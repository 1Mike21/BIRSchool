<template>

  <Head title="Добавление пользователя" />
  <ModalPage>
    <template #title>
      <h3 class="text-xl font-semibold">
        Добавление нового пользователя
      </h3>
    </template>
    <template #content>
      <AdminForm>
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="name"
            value="Имя"
          />
          <TextInput
            v-model="form.name"
            id="name"
            class="bg-gray-50 border text-black sm:text-sm block w-full p-2.5"
            autocomplete="name"
            type="text"
            placeholder="Введите имя"
            autofocus
            required
          />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="surname"
            value="Фамилия"
          />
          <TextInput
            class="bg-gray-50 border text-black sm:text-sm block w-full p-2.5"
            v-model="form.surname"
            id="surname"
            autocomplete="surname"
            placeholder="Введите фамилию"
            type="text"
            required
          />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="email"
            value="Email"
          />
          <TextInput
            class="bg-gray-50 border text-black sm:text-sm block w-full p-2.5"
            v-model="form.email"
            id="email"
            type="email"
            placeholder="example@yandex.ru"
            autocomplete="username"
            required
          />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="phone_number"
            value="Номер телефона"
          />
          <TextInput
            class="bg-gray-50 border text-black sm:text-sm block w-full p-2.5"
            v-model="form.phone_number"
            id="phone_number"
            type="phone_number"
            placeholder="+7 (926) 345-67-89"
            autocomplete="phone_number"
          />
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="role"
            value="Роль"
          />
          <Select/>
        </AdminFormGroup>
        <AdminFormGroup>
          <InputLabel
            class="mb-2"
            for="password"
            value="Пароль"
          />
          <TextInput
            class="bg-gray-50 border text-black sm:text-sm block w-full p-2.5"
            v-model="form.password"
            id="password"
            type="password"
            placeholder="********"
            autocomplete="new-password"
            required
          />
        </AdminFormGroup>
      </AdminForm>
        <!-- <div class="col-span-6 sm:col-span-3">
          <label for="role_id" class="text-sm font-medium text-black block mb-2">Роль</label>
          <select name="role_id" id="role_id"
            class="shadow-sm bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5">
            <option value="">-- Выберите роль --</option>
            <option value="">Админ</option>
            <option value="">Куратор</option>
            <option value="">Ученик</option>
          </select>
        </div> -->
    </template>
    <template #footer>
      <AdminButton as="button" type="submit">
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
import ModalPage from '@/Components/Modal/ModalPage.vue';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
  roles: {
    type: Array,
    default: () => [],
  }
});

const form = useForm({
  name: '',
  surname: '',
  email: '',
  phone_number: '',
  roles: [],
  password: '',
});
</script>
