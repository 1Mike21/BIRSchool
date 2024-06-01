<template>
  <ModalPage max-width="md">
    <template #title>
      <h3 class="text-xl font-semibold">
        Редактирование информации пользователя
      </h3>
    </template>
    <template #content>
      <AdminForm id="update_user_form" @submitted="form.put(route('admin.users.update', user.id))">
        <AdminFormGroup>
          <InputLabel class="mb-2" for="surname" value="Фамилия" />
          <TextInput
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', { 'border-red': form.errors.surname }]"
            v-model="form.surname" id="surname" autocomplete="surname" autofocus placeholder="Введите фамилию" type="text" />
          <InputError class="mt-2" :message="form.errors.surname" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="name" value="Имя" />
          <TextInput v-model="form.name" id="name"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', { 'border-red': form.errors.name }]"
            autocomplete="name" type="text" placeholder="Введите имя" />
          <InputError class="mt-2" :message="form.errors.name" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="email" value="Email" />
          <TextInput
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', { 'border-red': form.errors.email }]"
            v-model="form.email" id="email" type="email" placeholder="example@yandex.ru" autocomplete="username" />
          <InputError class="mt-2" :message="form.errors.email" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="phone_number" value="Номер телефона" />
          <TextInput
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', { 'border-red': form.errors.phone_number }]"
            v-model="form.phone_number" id="phone_number" type="phone_number" placeholder="+7 (926) 345-67-89"
            autocomplete="phone_number" />
          <InputError class="mt-2" :message="form.errors.phone_number" />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel class="mb-2" for="role" value="Роль" />
          <MultiSelect v-model="form.role" :options="roles" id="role" label="name" :allow-empty="false"
            :close-on-select="true" track-by="id" placeholder="Выберите роль" :searchable="false" />
        </AdminFormGroup>
      </AdminForm>
    </template>
    <template #footer>
      <AdminButton as="button" :submitted="form.processing" :disabled="form.processing" form="update_user_form"
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
import InputError from '@/Components/FormElement/InputError.vue';
import ModalPage from '@/Components/Modal/ModalPage.vue';
import { useForm } from '@inertiajs/vue3';
import { onMounted } from 'vue';

const props = defineProps({
  user: {
    type: Object,
  },
  roles: {
    type: Array,
    default: () => [],
  }
});

onMounted(() => {
  form.role = props.user?.roles;
});

const form = useForm({
  name: props.user.name,
  surname: props.user.surname,
  email: props.user.email,
  phone_number: props.user.phone_number,
  role: [],
});
</script>
