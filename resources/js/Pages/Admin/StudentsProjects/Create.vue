<template>

  <Head title="Добавление работы ученика" />

  <ModalPage max-width="md">
    <template #title>
      <h3 class="text-lg md:text-xl font-semibold">
        Добавление работы ученика
      </h3>
    </template>
    <template #content>
      <AdminForm id="create_student_project_form" @submitted="form.post(route('admin.students-projects.store'))">
        <AdminFormGroup>
          <InputLabel class="mb-2" for="img" value="Работа ученика" />
          <Dropzone @load="loadFiles" :class="{ '!border-red': form.errors.img }" />
          <InputError class="mt-2" :message="form.errors.img" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2 mr-3" for="is_active" value="Видимость работы" />
          <Checkbox id="is_active" class="w-6 h-6" v-model:checked="form.is_active"
            :class="{ 'border-red': form.errors.is_active }" />
          <InputError class="mt-2" :message="form.errors.is_active" />
        </AdminFormGroup>
      </AdminForm>
    </template>
    <template #footer>
      <AdminButton as="button" :submitted="form.processing" :disabled="form.processing" form="create_student_project_form" type="submit">
        Добавить
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
import InputError from '@/Components/FormElement/InputError.vue';
import ModalPage from '@/Components/Modal/ModalPage.vue';
import Dropzone from '@/Components/Dropzone/Dropzone.vue';
import Checkbox from '@/Components/FormElement/Checkbox.vue';

const loadFiles = (files, images) => {
  form.comment = images.value[0];
};

const form = useForm({
  img: null,
  is_active: false,
});
</script>
