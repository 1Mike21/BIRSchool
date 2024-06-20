<template>

  <Head title="Добавление отзыва" />

  <ModalPage max-width="md">
    <template #title>
      <h3 class="text-xl font-semibold">
        Добавление отзыва
      </h3>
    </template>
    <template #content>
      <AdminForm id="create_review_form" @submitted="form.post(route('admin.reviews.store'))">
        <AdminFormGroup>
          <InputLabel class="mb-2" for="comment" value="Отзыв" />
          <Dropzone @load="loadFiles" :class="{ '!border-red': form.errors.comment }" />
          <InputError class="mt-2" :message="form.errors.comment" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2 mr-3" for="is_published" value="Видимость отзыва" />
          <Checkbox id="is_published" class="w-6 h-6" v-model:checked="form.is_published"
            :class="{ 'border-red': form.errors.is_published }" />
          <InputError class="mt-2" :message="form.errors.is_published" />
        </AdminFormGroup>
      </AdminForm>
    </template>
    <template #footer>
      <AdminButton as="button" :submitted="form.processing" :disabled="form.processing" form="create_review_form" type="submit">
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
  comment: null,
  is_published: false,
});
</script>
