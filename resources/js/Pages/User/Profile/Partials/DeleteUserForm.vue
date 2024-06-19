<template>
  <ActionSection>
    <template #title>
      Удаление аккаунта
    </template>

    <template #description>
      Безвозвратно удалите свою учетную запись.
    </template>

    <template #content>
      <div class="text-black dark:text-white text-base lg:text-lg py-2">
        После удаления вашей учетной записи, все содержащиеся в ней ресурсы и данные будут безвозвратно удалены. Перед
        удалением вашей учетной записи, пожалуйста, сохраните себе информацию.
      </div>

      <div class="mt-5 text-right">
        <DangerButton @click="confirmUserDeletion">
          Удалить аккаунт
        </DangerButton>
      </div>

      <!-- Delete Account Confirmation Modal -->
      <DialogModal :show="confirmingUserDeletion" @close="closeModal">
        <template #title>
          Удаление аккаунта
        </template>

        <template #content>
          Вы уверены, что хотите удалить свою учетную запись? Как только ваша учетная запись будет удалена, все ее
          ресурсы и данные будут удалены безвозвратно. Пожалуйста, введите свой пароль, чтобы подтвердить, что вы хотите
          удалить свою учетную запись безвозвратно.

          <div class="mt-4">
            <HideShowPassword ref="passwordInput" v-model="form.password" autocomplete="current-password"
              @keyup.enter="deleteUser" />
            <InputError :message="form.errors.password" class="mt-2" />
          </div>
        </template>

        <template #footer>
          <SecondaryButton @click="closeModal" class="font-semibold text-xs uppercase">
            Отмена
          </SecondaryButton>

          <DangerButton class="ms-3" :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
            @click="deleteUser">
            Удалить аккаунт
          </DangerButton>
        </template>
      </DialogModal>
    </template>
  </ActionSection>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import ActionSection from '@/Components/Section/ActionSection.vue';
import DangerButton from '@/Components/Button/DangerButton.vue';
import DialogModal from '@/Components/Modal/DialogModal.vue';
import InputError from '@/Components/FormElement/InputError.vue';
import SecondaryButton from '@/Components/Button/SecondaryButton.vue';
import TextInput from '@/Components/FormElement/TextInput.vue';
import HideShowPassword from '@/Components/FormElement/HideShowPassword.vue';

const confirmingUserDeletion = ref(false);
const passwordInput = ref(null);

const form = useForm({
  password: '',
});

const confirmUserDeletion = () => {
  confirmingUserDeletion.value = true;

  setTimeout(() => passwordInput.value.focus(), 250);
};

const deleteUser = () => {
  form.delete(route('user.current-user.destroy'), {
    preserveScroll: true,
    onSuccess: () => closeModal(),
    onError: () => passwordInput.value.focus(),
    onFinish: () => form.reset(),
  });
};

const closeModal = () => {
  confirmingUserDeletion.value = false;

  form.reset();
};
</script>
