<template>
  <div @dragenter.prevent="toggleActive" @dragleave.prevent="toggleActive" @dragover.prevent @drop.prevent="onDropFile"
    @change="onFileSelect" :class="{ 'active_dropzone': activeDropZone }"
    class="flex flex-col justify-center bg-gray-50 text-block sm:text-sm p-2.5 transition-all duration-[.3s] items-center gap-y-4 border-2 border-dashed border-violetHoverButton rounded-md">
    <span>Перетащите файлы сюда</span>
    <span>ИЛИ</span>
    <label class="px-3 py-2 rounded-lg font-medium text-white bg-violetButton transition-all duration-[.3s]"
      :class="{ 'bg-white !text-violetButton': activeDropZone }" for="dropZone">
      Выберите файл
    </label>
    <input class="hidden" type="file" ref="dropZone" :multiple="multiple" id="dropZone">
  </div>
  <div class="w-full h-auto flex justify-start items-start flex-wrap relative mt-2">
    <div v-if="files.length > 0">
      <span class="block font-medium text-sm text-gray-900">Загруженные файлы:</span>
      <ul>
        <li v-for="(file, index) in files" class="flex items-center" :key="index">
          {{ file.name }}
          <span class="cursor-pointer ps-3 text-2xl text-rose-600" @click="deleteFile(index, files)">&times;</span>
        </li>
      </ul>
    </div>
  </div>
  <template v-if="images.length > 0">
    <span class="block font-medium text-sm text-gray-900">Загруженные изображения:</span>
    <div class="w-full h-auto flex justify-start items-start flex-wrap relative mt-2">
      <div class="w-20 h-20 mr-1 relative mb-2" v-for="(image, index) in images" :key="index">
        <span class="absolute top-1 right-2 cursor-pointer text-4xl text-rose-600"
          @click="deleteFile(index, images)">&times;</span>
        <img ref="previewImage" class="w-full h-full rounded-lg" :src="image.url" :alt="image.name">
      </div>
    </div>
  </template>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
  multiple: {
    type: Boolean,
    default: false
  },
  preview: Object
});

const dropZone = ref(null);
const activeDropZone = ref(false);

let files = ref([]);
let images = ref([]);

const emit = defineEmits(['load']);

const toggleActive = () => {
  activeDropZone.value = !activeDropZone.value;
}

const load = () => {
  emit('load', files, images);
};

const getMockData = (src, fileName, mimeType) => {
  return fetch(src)
    .then(res => res.arrayBuffer())
    .then(buf => new File([buf], fileName, {
      type: mimeType,
      lastModified: Date.now()
    }));
};

const mockFile = () => {
  if (!props.preview) return;

  if (!dropZone.value.multiple) {
    dropZone.value.disabled = true;
  }

  getMockData(props.preview.url, props.preview.name, props.preview.type)
    .then(file => {
      if (file.type.split('/')[0] == 'image') {
        file.url = props.preview.url
        images.value.push(file);
      }
      else {
        files.value.push(file);
      }
    });
    setTimeout(() => {
      load();
    }, 1000);
};

onMounted(() => {
  mockFile();
})

const uploadData = (data) => {
  if (data.length === 0) return;
  for (let i = 0; i < data.length; i++) {
    if (data[i].type.split('/')[0] == 'image') {
      if (!images.value.some((image) => image.name === data[i].name)) {
        data[i].url = URL.createObjectURL(data[i]);
        images.value.push(data[i]);
      }
    }
    else {
      if (!files.value.some((file) => file.name === data[i].name)) {
        data[i].url = URL.createObjectURL(data[i]);
        files.value.push(data[i]);
      }
    }
  }
  load();
}

const onFileSelect = (event) => {
  if (!dropZone.value.multiple) {
    dropZone.value.disabled = true;
  }
  uploadData(event.target.files);
};

const onDropFile = (event) => {
  toggleActive();
  if (!dropZone.value.multiple) {
    dropZone.value.disabled = true;
    const droppedFile = event.dataTransfer.files[0];
    if (!droppedFile) return;
    droppedFile.url = URL.createObjectURL(droppedFile);
    if (droppedFile.type.split('/')[0] == 'image') {
      images.value.length = 0;
      images.value.push(droppedFile);
    }
    else {
      files.value.length = 0;
      files.value.push(droppedFile);
    }
    return
  }
  uploadData(event.dataTransfer.files);
};

const deleteFile = (index, array) => {
  dropZone.value.disabled = false;
  array.splice(index, 1);
  load();
};
</script>

<style scoped>
.active_dropzone {
  @apply text-white bg-violetHoverButton border-gray-50;
}
</style>
