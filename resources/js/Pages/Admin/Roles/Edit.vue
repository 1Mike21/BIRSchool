<template>

  <Head title="Редактирование роли" />

  <ModalPage max-width="md">
    <template #title>
      <h3 class="text-xl font-semibold">
        Редактирование роли
      </h3>
    </template>
    <template #content>
      <AdminForm id="update_role_form" @submitted="form.put(route('admin.roles.update', role.id))">
        <AdminFormGroup class="!col-span-12">
          <InputLabel class="mb-2" for="name" value="Название роли" />
          <TextInput v-model="form.name" id="name"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', { 'border-red': form.errors.name }]"
            placeholder="Введите название роли" type="text" autofocus />
          <InputError class="mt-2" :message="form.errors.name" />
        </AdminFormGroup>
        <AdminFormGroup class="!col-span-12">
          <InputLabel class="mb-2" for="permissions" value="Разрешения" />
          <MultiSelect v-model="form.permissions" :options="permissions" id="permissions" :show-labels="false"
            label="name" :multiple="true" :close-on-select="false" track-by="id" placeholder="Выберите разрешения" />
        </AdminFormGroup>
      </AdminForm>
    </template>
    <template #footer>
      <AdminButton as="button" :class="{ 'opacity-75': form.processing }" :disabled="form.processing"
        form="update_role_form" type="submit">
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
import { onMounted } from 'vue';

const props = defineProps({
  role: {
    type: Object,
    required: true
  },
  permissions: {
    type: Array
  }
});

onMounted(() => {
  form.permissions = props.role?.permissions;
});

const form = useForm({
  name: props.role.name,
  permissions: [],
});
</script>
