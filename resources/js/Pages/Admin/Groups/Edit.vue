<template>

  <Head title="Редактирование группы" />

  <ModalPage max-width="md">
    <template #title>
      <h3 class="text-xl font-semibold">
        Редактирование группы
      </h3>
    </template>
    <template #content>
      <AdminForm id="update_group_form" @submitted="form.post(route('admin.groups.update', group.slug))">
        <AdminFormGroup>
          <InputLabel class="mb-2" for="title" value="Название группы" />
          <TextInput v-model="form.title" id="title"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.title }]"
            placeholder="Введите название группы" type="text" autofocus />
          <InputError class="mt-2" :message="form.errors.title" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="icon" value="Иконка" />
          <Dropzone @load="loadFiles" :preview="icon" :class="{ '!border-red':form.errors.icon }" />
          <InputError class="mt-2" :message="form.errors.icon" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="description" value="Описание группы" />
          <TextArea v-model="form.description" placeholder="Добавьте описание группы" id="description"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.description}]"
            rows="3" />
          <InputError class="mt-2" :message="form.errors.description" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="level" value="Уровень сложности" />
          <TextInput v-model="form.level" id="level"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.level }]"
            placeholder="Введите уровень сложности" type="text" />
          <InputError class="mt-2" :message="form.errors.level" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="is_active" value="Видимость группы" />
          <Checkbox id="is_active" class="w-6 h-6" v-model:checked="form.is_active"
            :class="{ 'border-red': form.errors.is_active }" />
          <InputError class="mt-2" :message="form.errors.is_active" />
        </AdminFormGroup>
      </AdminForm>
    </template>
    <template #footer>
      <AdminButton as="button" :submitted="form.processing" :disabled="form.processing" form="update_group_form"
        type="submit">
        Обновить
      </AdminButton>
    </template>
  </ModalPage>
</template>

<script setup>
import AdminButton from '@/Components/Button/AdminButton.vue';
import AdminForm from '@/Components/FormElement/AdminForm.vue';
import AdminFormGroup from '@/Components/FormElement/AdminFormGroup.vue';
import InputLabel from '@/Components/FormElement/InputLabel.vue';
import TextInput from '@/Components/FormElement/TextInput.vue';
import TextArea from '@/Components/FormElement/TextArea.vue';
import InputError from '@/Components/FormElement/InputError.vue';
import ModalPage from '@/Components/Modal/ModalPage.vue';
import Dropzone from '@/Components/Dropzone/Dropzone.vue';
import { useForm } from '@inertiajs/vue3';
import Checkbox from '@/Components/FormElement/Checkbox.vue';

const props = defineProps({
  group: Object,
  icon: Object
});

const loadFiles = (files, images) => {
  form.icon = images.value[0];
};

const form = useForm({
  _method: 'PUT',
  title: props.group.title,
  icon: null,
  description: props.group.description,
  is_active: props.group.is_active,
  level: props.group.level,
});
</script>
