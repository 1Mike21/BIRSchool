<template>

  <Head title="Регистрация" />

  <form @submit.prevent="submit">
    <div>
      <InputLabel for="name" value="Имя" />
      <TextInput id="name" v-model="form.name" type="text"
        :class="['mt-1 block w-full', {'border-red': form.errors.name}]" autofocus autocomplete="name" />
      <InputError class="mt-2" :message="form.errors.name" />
    </div>

    <div class="mt-4">
      <InputLabel for="surname" value="Фамилия" />
      <TextInput id="surname" v-model="form.surname" type="text"
        :class="['mt-1 block w-full', {'border-red': form.errors.surname}]" autocomplete="surname" />
      <InputError class="mt-2" :message="form.errors.surname" />
    </div>

    <div class="mt-4">
      <InputLabel for="email" value="Email" />
      <TextInput id="email" v-model="form.email" type="email"
        :class="['mt-1 block w-full', {'border-red': form.errors.email}]" autocomplete="username" />
      <InputError class="mt-2" :message="form.errors.email" />
    </div>

    <div class="mt-4">
      <InputLabel for="password" value="Пароль" />
      <HideShowPassword v-model="form.password" :errors="form.errors.password" autocomplete="new-password" />
      <InputError class="mt-2" :message="form.errors.password" />
    </div>

    <div class="mt-4">
      <InputLabel for="password_confirmation" value="Подтвердите пароль" />
      <HideShowPassword id="password_confirmation" v-model="form.password_confirmation" :errors="form.errors.password_confirmation" autocomplete="new-password" />
      <InputError class="mt-2" :message="form.errors.password_confirmation" />
    </div>

    <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="mt-4">
      <InputLabel for="terms">
        <div class="flex items-center">
          <Checkbox id="terms" v-model:checked="form.terms" :class="{ 'border-red': form.errors.terms }" name="terms" />

          <div class="ms-2">
            Я согласен с
            <a :href="route('terms.show')"
              class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              target="_blank">
              Условиями использования
            </a>
            и
            <a :href="route('policy.show')"
              class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              target="_blank">
              Политикой конфиденциальности
            </a>
          </div>
        </div>
        <InputError class="mt-2" :message="form.errors.terms" />
      </InputLabel>
    </div>

    <div class="flex items-center justify-end mt-4">
      <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
        Зарегистрироваться
      </PrimaryButton>
    </div>
  </form>
</template>

<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import Checkbox from '@/Components/FormElement/Checkbox.vue';
import InputError from '@/Components/FormElement/InputError.vue';
import InputLabel from '@/Components/FormElement/InputLabel.vue';
import PrimaryButton from '@/Components/Button/PrimaryButton.vue';
import TextInput from '@/Components/FormElement/TextInput.vue';
import HideShowPassword from '@/Components/FormElement/HideShowPassword.vue';

const emit = defineEmits(['closeModal']);

const form = useForm({
  name: '',
  surname: '',
  email: '',
  password: '',
  password_confirmation: '',
  terms: false,
});

const submit = () => {
  form.post(route('register'), {
    onFinish: () => {
      form.reset('password', 'password_confirmation');
    },
    onSuccess: () => {
      emit('closeModal');
    }
  });
};
</script>
