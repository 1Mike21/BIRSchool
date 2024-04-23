<template>
  <!-- <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
      {{ status }}
    </div> -->

  <Head title="Авторизация" />

  <form @submit.prevent="submit">
    <div>
      <InputLabel for="email" value="Email" />
      <TextInput id="email" v-model="form.email" type="email" class="mt-1 block w-full" required autofocus
        autocomplete="username" />
      <InputError class="mt-2" :message="form.errors.email" />
    </div>

    <div class="mt-4">
      <InputLabel for="password" value="Пароль" />
      <TextInput id="password" v-model="form.password" type="password" class="mt-1 block w-full" required
        autocomplete="current-password" />
      <InputError class="mt-2" :message="form.errors.password" />
    </div>

    <div class="block mt-4">
      <label class="flex items-center">
        <Checkbox v-model:checked="form.remember" name="remember" />
        <span class="ms-2 text-sm text-gray-700">Запомнить меня</span>
      </label>
    </div>

    <div class="flex items-center justify-end mt-4">
      <button type="button" @click="$emit('changeComponent', ForgotPassword, 3)"
        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red">
        Забыли пароль?
      </button>

      <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
        Войти
      </PrimaryButton>
    </div>
  </form>
</template>

<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import { defineAsyncComponent } from 'vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
const ForgotPassword = defineAsyncComponent(() => import("@/Components/ForgotPassword.vue"));

defineProps({
  // canResetPassword: Boolean,
  // status: String,
});

const form = useForm({
  email: '',
  password: '',
  remember: false,
});

const submit = () => {
  form.transform(data => ({
    ...data,
    remember: form.remember ? 'on' : '',
  })).post(route('login'), {
    onFinish: () => form.reset('password'),
  });
};
</script>
