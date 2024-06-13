<template>
  <FormSection @submitted="updatePassword">
    <template #title>
      Обновление пароля
    </template>

    <template #description>
      Убедитесь, что в вашем аккаунте используется сложный пароль.
    </template>

    <template #form>
      <div class="col-span-6 sm:col-span-4">
        <InputLabel for="current_password" value="Текущий пароль" class="text-black dark:text-white"/>
        <HideShowPassword id="current_password" ref="currentPasswordInput" v-model="form.current_password" :errors="form.errors.current_password" autocomplete="current-password"/>
        <InputError :message="form.errors.current_password" class="mt-2" />
      </div>

      <div class="col-span-6 sm:col-span-4">
        <InputLabel for="password" value="Новый пароль" class="text-black dark:text-white"/>
        <HideShowPassword ref="passwordInput" v-model="form.password" :errors="form.errors.password" autocomplete="new-password"/>
        <InputError :message="form.errors.password" class="mt-2" />
      </div>

      <div class="col-span-6 sm:col-span-4">
        <InputLabel for="password_confirmation" value="Подтвердите пароль" class="text-black dark:text-white"/>
        <HideShowPassword id="password_confirmation" v-model="form.password_confirmation" :errors="form.errors.password_confirmation" autocomplete="new-password"/>
        <InputError :message="form.errors.password_confirmation" class="mt-2" />
      </div>
    </template>

    <template #actions>
      <ActionMessage :on="form.recentlySuccessful" class="me-3">
        Сохранено
      </ActionMessage>

      <PrimaryButton class="hover:bg-gray-700 focus:bg-gray-700 dark:hover:bg-gray-900 dark:focus:bg-gray-900" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
        Сохранить
      </PrimaryButton>
    </template>
  </FormSection>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/FormElement/ActionMessage.vue';
import FormSection from '@/Components/FormElement/FormSection.vue';
import InputError from '@/Components/FormElement/InputError.vue';
import InputLabel from '@/Components/FormElement/InputLabel.vue';
import PrimaryButton from '@/Components/Button/PrimaryButton.vue';
import HideShowPassword from '@/Components/FormElement/HideShowPassword.vue';

const passwordInput = ref(null);
const currentPasswordInput = ref(null);

const form = useForm({
  current_password: '',
  password: '',
  password_confirmation: '',
});

const updatePassword = () => {
  form.put(route('user-password.update'), {
    errorBag: 'updatePassword',
    preserveScroll: true,
    onSuccess: () => form.reset(),
    onError: () => {
      if (form.errors.password) {
        form.reset('password', 'password_confirmation');
        passwordInput.value.focus();
      }

      if (form.errors.current_password) {
        form.reset('current_password');
        currentPasswordInput.value.focus();
      }
    },
  });
};
</script>
