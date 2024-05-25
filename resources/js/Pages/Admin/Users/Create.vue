<template>

  <Head title="Добавление пользователя" />
  <ModalPage>
    <template #title>
      <h3 class="text-xl font-semibold">
        Добавление нового пользователя
      </h3>
    </template>
    <template #content>
      <AdminForm id="create_user_form" @submitted="submit">
        <AdminFormGroup>
          <InputLabel
          class="mb-2"
          for="surname"
          value="Фамилия"
          />
          <TextInput
          :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.surname}]"
          v-model="form.surname"
          id="surname"
          autocomplete="surname"
          placeholder="Введите фамилию"
          type="text"
          />
          <InputError class="mt-2" :message="form.errors.surname"/>
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="name"
            value="Имя"
          />
          <TextInput
            v-model="form.name"
            id="name"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.name}]"
            autocomplete="name"
            type="text"
            placeholder="Введите имя"
            autofocus
          />
          <InputError class="mt-2" :message="form.errors.name"/>
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="email"
            value="Email"
          />
          <TextInput
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.email}]"
            v-model="form.email"
            id="email"
            type="email"
            placeholder="example@yandex.ru"
            autocomplete="username"
          />
          <InputError class="mt-2" :message="form.errors.email"/>
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="phone_number"
            value="Номер телефона"
          />
          <TextInput
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.phone_number}]"
            v-model="form.phone_number"
            id="phone_number"
            type="text"
            placeholder="+7 (926) 345-67-89"
            autocomplete="phone_number"
          />
          <InputError class="mt-2" :message="form.errors.phone_number"/>
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="password"
            value="Пароль"
          />
          <TextInput
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.password}]"
            v-model="form.password"
            id="password"
            type="password"
            autocomplete="new-password"
          />
          <InputError class="mt-2" :message="form.errors.password"/>
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="password_confirmation"
            value="Подтвердите пароль"
          />
          <TextInput
            v-model="form.password_confirmation"
            :class="['bg-gray-50 border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.password_confirmation}]"
            id="password_confirmation"
            autocomplete="new-password"
            type="password"
          />
          <InputError class="mt-2" :message="form.errors.password_confirmation" />
        </AdminFormGroup>
        <AdminFormGroup class="min-w-96">
          <InputLabel
            class="mb-2"
            for="role"
            value="Роль"
          />
          <MultiSelect
            v-model="form.role"
            :options="roles"
            id="role"
            label="name"
            :allow-empty="false"
            :close-on-select="true"
            track-by="id"
            placeholder="Выберите роль"
            :searchable="false"
          />
          <InputError class="mt-2" :message="form.errors.role"/>
        </AdminFormGroup>
      </AdminForm>
    </template>
    <template #footer>
      <AdminButton as="button" :submitted="form.processing" :disabled="form.processing" form="create_user_form" type="submit">
        Добавить
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
  roles: {
    type: Array,
    default: () => [],
  }
});

const submit = () => {
  form.post(route('admin.users.store'), {
    onFinish: () => {
      form.reset('password', 'password_confirmation');
    },
  });
};

const form = useForm({
  name: '',
  surname: '',
  email: '',
  phone_number: '',
  role: [],
  password: '',
  password_confirmation: '',
});
</script>
