<template>
  <textarea
    :value="modelValue"
    @input="$emit('update:modelValue', $event.target.value); resize($event)"
    class="resize-none border-gray-300 focus:border-violetButton focus:ring-violetButton rounded-md shadow-sm"
    ref="textarea"
  />
</template>

<script setup>
import { onMounted, ref } from 'vue';

const props = defineProps({
  modelValue: String,
});

defineEmits(['update:modelValue']);

const textarea = ref(null);

const resize = (event) => {
  event.target.style.height = 'auto';
  event.target.style.height = `${event.target.scrollHeight}px`;
}

onMounted(() => {
  if (textarea.value.hasAttribute('autofocus')) {
    textarea.value.focus();
  }
});

defineExpose({ focus: () => textarea.value.focus() });
</script>

<style scoped>
textarea {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
textarea::-webkit-scrollbar {
  display: none;
}
</style>
