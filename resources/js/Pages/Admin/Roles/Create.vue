<template>
  <Head title="Добавление роли" />

  <ModalPage max-width="lg">
    <template #title>
      <h3 class="text-xl font-semibold">
        Создание роли
      </h3>
    </template>
    <template #content>
      <AdminForm id="create_role_form" @submitted="form.post(route('admin.roles.store'))">
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="name"
            value="Название роли"
          />
          <TextInput
            v-model="form.name"
            id="name"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.name }]"
            placeholder="Введите название роли"
            type="text"
            autofocus
          />
          <InputError class="mt-2" :message="form.errors.name"/>
        </AdminFormGroup>
      </AdminForm>
    </template>
    <template #footer>
      <AdminButton as="button" :submitted="form.processing" :disabled="form.processing" form="create_role_form" type="submit">
        Создать
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

const form = useForm({
  name: '',
});
</script>
