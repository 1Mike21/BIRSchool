<template>

  <Head :title="group.title" />

  <Link class="text-white text-xl" :href="route('admin.groups.index')">Назад</Link>

  <!-- About group course -->
  <section class="indent_section_bottom">
    <form @submit.prevent="firstSectionForm.post(route('admin.groups.description.store', group.slug))"
      class="flex flex-col items-center">
      <div class="flex flex-col mb-3">
        <TextInput v-model="firstSectionForm.title" id="title"
          :class="['bg-gray-50 border text-black sm:text-sm block mx-auto mb-5 w-96 p-2.5', { 'border-red': firstSectionForm.errors.title }]"
          placeholder="Введите заголовок раздела" type="text" autofocus />
        <InputError :message="firstSectionForm.errors.title" />
      </div>
      <div class="flex flex-wrap-reverse md:flex-nowrap justify-center gap-10 mb-5">
        <div class="w-[420px] border-[1px] border-red rounded-[22px]">
          <p class="dark:text-white p-3 text-white text-xl bg-red rounded-[20px]">
            <TextArea v-model="firstSectionForm.main_text" placeholder="Добавьте основной текст" id="description"
              :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', { 'border-red': firstSectionForm.errors.main_text }]"
              rows="3" />
          </p>
          <InputError class="mt-2 pl-3" :message="firstSectionForm.errors.main_text" />
          <p class="text-red dark:text-white text-lg p-3">
            <TextArea v-model="firstSectionForm.secondary_text" placeholder="Добавьте дополнительный текст"
              id="description"
              :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', { 'border-red': firstSectionForm.errors.secondary_text }]"
              rows="3" />
            <InputError class="mt-2" :message="firstSectionForm.errors.secondary_text" />
          </p>
        </div>
        <div class="flex flex-col">
          <Dropzone @load="loadFilesFirstSection" class="max-w-[300px] rounded-[36px]" />
          <InputError class="mt-2" :message="firstSectionForm.errors.img" />
        </div>
      </div>
      <AdminButton as="button" submitted="firstSectionForm.processing" :disabled="firstSectionForm.processing"
        type="submit">
        Сохранить раздел
      </AdminButton>
    </form>
  </section>

  <section class="indent_section_bottom">
    <form @submit.prevent="secondSectionForm.post(route('admin.groups.description.store', group.slug))"
      class="flex flex-col items-center gap-y-3">
      <div class="flex flex-col mb-3">
        <TextInput v-model="firstSectionForm.title" id="title"
          :class="['bg-gray-50 border text-black sm:text-sm block mx-auto w-96 p-2.5', { 'border-red': firstSectionForm.errors.title }]"
          placeholder="Введите заголовок раздела" type="text" />
        <InputError :message="firstSectionForm.errors.title" />
      </div>
      <div class="flex flex-wrap md:flex-nowrap justify-center text-center">
        <div class="flex flex-col gap-y-5 max-w-96 items-center rounded-[15px]" v-for="(section, index) in sections">
          <div class="flex flex-col">
            <Dropzone @load="loadFilesFirstSection(section)" class="max-w-[300px] rounded-[36px]" />
            <InputError class="mt-2" :message="secondSectionForm.errors.img" />
          </div>
          <div class="flex flex-col">
            <TextInput v-model="section.title"
              :class="['bg-gray-50 border text-black sm:text-sm block mx-auto w-96 p-2.5', { 'border-red': secondSectionForm.errors.title }]"
              placeholder="Введите заголовок подраздела" type="text" />
            <InputError :message="secondSectionForm.errors.title" />
          </div>
          <TextArea v-model="section.text" placeholder="Добавьте описание подраздела"
            id="description"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', { 'border-red': secondSectionForm.errors.secondary_text }]"
            rows="3" />
          <InputError class="mt-2" :message="secondSectionForm.errors.secondary_text" />
        </div>
        <div class="flex gap-y-3">
          <AdminButton as="button">Добавить раздел</AdminButton>
          <AdminDangerButton>Удалить раздел</AdminDangerButton>
        </div>
      </div>
      <AdminButton as="button" submitted="secondSectionForm.processing" :disabled="secondSectionForm.processing"
        type="submit">
        Сохранить раздел
      </AdminButton>
    </form>
  </section>

  <!-- Stages of training -->
  <section class="indent_section_bottom">
    <SectionTitle>Этапы обучения</SectionTitle>
    <ul class="steps-learning">
      <li class="steps-learning__item steps-learning__line">
        <span class="steps-learning__item-count text-white hover:shadow-inset"></span>
        <span class="text-sm font-semibold mt-3"></span>
      </li>
    </ul>
  </section>

  <!-- Certificate -->
  <section>
    <SectionTitle>После успешного окончания обучения</SectionTitle>
    <div class="flex flex-wrap md:flex-nowrap justify-between items-center md:gap-32">
      <div class="w-[600px]">
        <h3 class="text-darkblue dark:text-white text-2xl lg:text-[28px] mb-2">Сертификат</h3>
        <p class="text-black dark:text-white text-base lg:text-lg">Студенты получают сертификат об успешном окончании
          курса <span class="text-red font-medium">«{{ group.title }} - {{ group.level }}»</span>. Текст документа может
          быть составлен на английском языке.</p>
      </div>
      <img class="max-md:mt-6 md:max-w-[605px] min-w-[205px] border dark:border-none shadow-xl dark:shadow-none"
        src="/storage/group_course/sertificate.png" alt="Сертификат">
    </div>
  </section>
</template>

<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import SectionTitle from '@/Components/Section/SectionTitle.vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Dropzone from '@/Components/Dropzone/Dropzone.vue';
import TextArea from '@/Components/FormElement/TextArea.vue';
import TextInput from '@/Components/FormElement/TextInput.vue';
import InputError from '@/Components/FormElement/InputError.vue';
import AdminButton from '@/Components/Button/AdminButton.vue';
import AdminDangerButton from '@/Components/Button/AdminDangerButton.vue';


defineOptions({ layout: AdminLayout });

const props = defineProps({
  group: Object
});

const loadFilesFirstSection = (files, images) => {
  firstSectionForm.img = images.value[0];
};

const firstSectionForm = useForm({
  form_name: 'firstSection',
  title: '',
  img: null,
  main_text: '',
  secondary_text: '',
});

const secondSectionForm = useForm({
  title: '',
  img: null,
  main_text: '',
  secondary_text: '',
});
</script>

<style scoped>
.steps-learning {
  @apply text-darkblue dark:text-white flex py-5 px-2 relative overflow-x-auto scrollbar max-w-7xl mx-auto;
}

.steps-learning__item {
  @apply flex flex-col text-center px-5 min-w-44 max-w-full relative after:content-[""] after:absolute after:left-0 after:top-5 after:bg-red after:w-full after:h-[2px] after:translate-x-1/2 after:-z-10 last:after:w-0;
}

.steps-learning__item-count {
  @apply h-10 w-10 rounded-full flex justify-center items-center mx-auto relative font-semibold after:content-[""] after:h-10 after:w-10 after:bg-red after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full after:-z-10 after:text-white before:content-[""] before:h-3 before:w-5 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-2/3 before:-rotate-45 before:text-white;
}
</style>
