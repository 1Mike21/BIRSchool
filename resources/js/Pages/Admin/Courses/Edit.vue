<template>

  <Head title="Редактирование курса" />

  <ModalPage max-width="md">
    <template #title>
      <h3 class="text-lg md:text-xl font-semibold">
        Редактирование курса
      </h3>
    </template>
    <template #content>
      <AdminForm id="update_course_form" @submitted="form.post(route('admin.courses.update', course.slug))">
        <AdminFormGroup>
          <InputLabel class="mb-2" for="title" value="Название курса" />
          <TextInput v-model="form.title" id="title"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.title }]"
            placeholder="Введите название курса" type="text" autofocus />
          <InputError class="mt-2" :message="form.errors.title" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="icon" value="Иконка" />
          <Dropzone @load="loadFiles" :preview="icon" :class="{ '!border-red':form.errors.icon }" />
          <InputError class="mt-2" :message="form.errors.icon" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="description" value="Описание курса" />
          <TextArea v-model="form.description" placeholder="Добавьте описание курса" id="description"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.description}]"
            rows="3" />
          <InputError class="mt-2" :message="form.errors.description" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="price" value="Цена курса" />
          <TextInput v-model="form.price" id="price"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.price }]"
            placeholder="Добавьте стоимость курса" type="text" />
          <InputError class="mt-2" :message="form.errors.price" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="group" value="Группа" />
          <MultiSelect v-model="form.group" :options="groups" id="group" label="title" :allow-empty="false"
            :close-on-select="true" track-by="id" placeholder="Выберите группу" :searchable="false" />
          <InputError class="mt-2" :message="form.errors.group"/>
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="is_active" value="Видимость курса" />
          <Checkbox id="is_active" class="w-6 h-6" v-model:checked="form.is_active"
            :class="{ 'border-red': form.errors.is_active }" />
          <InputError class="mt-2" :message="form.errors.is_active" />
        </AdminFormGroup>
      </AdminForm>
    </template>
    <template #footer>
      <AdminButton as="button" :submitted="form.processing" :disabled="form.processing" form="update_course_form"
        type="submit">
        Обновить
      </AdminButton>
    </template>
  </ModalPage>
</template>

<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import AdminButton from '@/Components/Button/AdminButton.vue';
import AdminForm from '@/Components/FormElement/AdminForm.vue';
import AdminFormGroup from '@/Components/FormElement/AdminFormGroup.vue';
import InputLabel from '@/Components/FormElement/InputLabel.vue';
import TextInput from '@/Components/FormElement/TextInput.vue';
import TextArea from '@/Components/FormElement/TextArea.vue';
import InputError from '@/Components/FormElement/InputError.vue';
import ModalPage from '@/Components/Modal/ModalPage.vue';
import Dropzone from '@/Components/Dropzone/Dropzone.vue';
import Checkbox from '@/Components/FormElement/Checkbox.vue';

const props = defineProps({
  course: Object,
  groups: Array,
  icon: Object
});

const loadFiles = (files, images) => {
  form.icon = images.value[0];
};

const form = useForm({
  _method: 'PUT',
  title: props.course.title,
  icon: null,
  description: props.course.description,
  price: props.course.price,
  group: [],
  is_active: props.course.is_active,
});
</script>
