<template>

  <Head title="Редактирование разрешения" />

  <ModalPage max-width="2xl">
    <template #title>
      <h3 class="text-xl font-semibold">
        Редактирование разрешения
      </h3>
    </template>
    <template #content>
      <AdminForm id="update_permission_form" @submitted="form.put(route('admin.permissions.update', permission.id))">
        <AdminFormGroup>
          <InputLabel class="mb-2" for="name" value="Название разрешения" />
          <TextInput v-model="form.name" id="name"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', { 'border-red': form.errors.name }]"
            placeholder="Введите название разрешения" type="text" autofocus />
          <InputError class="mt-2" :message="form.errors.name" />
        </AdminFormGroup>
      </AdminForm>
    </template>
    <template #footer>
      <AdminButton as="button" :class="{ 'opacity-75': form.processing }" :disabled="form.processing"
        form="update_permission_form" type="submit">
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
import InputError from '@/Components/FormElement/InputError.vue';
import ModalPage from '@/Components/Modal/ModalPage.vue';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
  permission: {
    type: Object,
    required: true
  }
});

const form = useForm({
  name: props.permission.name,
});
</script>
