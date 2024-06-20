<template>

  <Head title="Добавление пользователя" />
  <ModalPage>
    <template #title>
      <h3 class="text-xl font-semibold">
        Добавление нового пользователя
      </h3>
    </template>
    <template #content>
      <AdminForm id="create_user_form" @submitted="submit" class="grid-cols-6">
        <AdminFormGroup>
          <InputLabel
          class="mb-2 after:content-['*'] after:text-red"
          for="surname"
          value="Фамилия"
          />
          <TextInput
          :class="['border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.surname}]"
          v-model="form.surname"
          id="surname"
          placeholder="Введите фамилию"
          type="text"
          autocomplete="surname"
          />
          <InputError class="mt-2" :message="form.errors.surname"/>
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2 after:content-['*'] after:text-red"
            for="name"
            value="Имя"
          />
          <TextInput
            v-model="form.name"
            id="name"
            :class="['border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.name}]"
            placeholder="Введите имя"
            type="text"
            autocomplete="name"
          />
          <InputError class="mt-2" :message="form.errors.name"/>
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2 after:content-['*'] after:text-red"
            for="email"
            value="Email"
          />
          <TextInput
            :class="['border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.email}]"
            v-model="form.email"
            id="email"
            placeholder="example@yandex.ru"
            type="email"
            autocomplete="email"
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
            :class="['border text-black sm:text-sm block w-full p-2.5', {'border-red': form.errors.phone_number}]"
            v-model="form.phone_number"
            id="phone_number"
            placeholder="+7 (926) 345-67-89"
            type="text"
            autocomplete="phone_number"
          />
          <InputError class="mt-2" :message="form.errors.phone_number"/>
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2 after:content-['*'] after:text-red"
            for="password"
            value="Пароль"
          />
          <HideShowPassword v-model="form.password" :errors="form.errors.password" autocomplete="new-password" />
          <InputError class="mt-2" :message="form.errors.password"/>
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2 after:content-['*'] after:text-red"
            for="password_confirmation"
            value="Подтвердите пароль"
          />
          <HideShowPassword id="password_confirmation" v-model="form.password_confirmation" :errors="form.errors.password_confirmation" autocomplete="new-password"/>
          <InputError class="mt-2" :message="form.errors.password_confirmation" />
        </AdminFormGroup>
        <AdminFormGroup class="min-w-96">
          <InputLabel
            class="mb-2 after:content-['*'] after:text-red"
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
import HideShowPassword from '@/Components/FormElement/HideShowPassword.vue';
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
