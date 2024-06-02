<template>

  <Head title="Сброс пароля" />

  <div class="mb-4 text-sm text-gray-600">
    Забыли свой пароль? Без проблем. Просто сообщите нам свой адрес электронной почты, и мы вышлем ссылку для сброса пароля, которая позволит вам выбрать новый.
  </div>

  <form @submit.prevent="submit">
    <div>
      <InputLabel for="email" value="Email" />
      <TextInput id="email" v-model="form.email" type="email" :class="['mt-1 block w-full', {'border-red': form.errors.email}]" autofocus
        autocomplete="username" />
      <InputError class="mt-2" :message="form.errors.email" />
    </div>

    <div class="flex items-center justify-end mt-4">
      <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
        Получить ссылку для сброса пароля
      </PrimaryButton>
    </div>
  </form>
</template>

<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/FormElement/InputError.vue';
import InputLabel from '@/Components/FormElement/InputLabel.vue';
import PrimaryButton from '@/Components/Button/PrimaryButton.vue';
import TextInput from '@/Components/FormElement/TextInput.vue';

const emit = defineEmits(['closeModal']);

const form = useForm({
  email: '',
});

const submit = () => {
  form.post(route('password.email'),
  onSuccess, () => {
    emit('closeModal');
  });
};
</script>
