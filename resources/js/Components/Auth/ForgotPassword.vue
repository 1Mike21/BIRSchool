<template>

  <Head title="Восстановление пароля" />

  <div class="mb-4 text-sm text-gray-600">
    Забыли свой пароль? Без проблем. Просто сообщите нам свой адрес электронной почты, и мы вышлем ссылку для сброса пароля, которая позволит вам выбрать новый.
  </div>

  <!-- <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div> -->

  <form @submit.prevent="submit">
    <div>
      <InputLabel for="email" value="Email" />
      <TextInput id="email" v-model="form.email" type="email" class="mt-1 block w-full" required autofocus
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

defineProps({
  // status: String,
});

const emit = defineEmits(['closeModal']);

const form = useForm({
  email: '',
});

const submit = () => {
  form.post(route('password.email'));
  emit('closeModal');
};
</script>
