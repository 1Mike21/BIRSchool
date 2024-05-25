<template>
  <ActionSection>
      <template #title>
          Delete Account
      </template>

      <template #description>
          Permanently delete your account.
      </template>

      <template #content>
          <div class="max-w-xl text-sm text-gray-600">
            Как только ваша учетная запись будет удалена, все ее ресурсы и данные будут удалены безвозвратно. Перед удалением вашей учетной записи, пожалуйста, загрузите любые данные или информацию, которые вы хотите сохранить.
          </div>

          <div class="mt-5">
              <DangerButton @click="confirmUserDeletion">
                  Удалить аккаунт
              </DangerButton>
          </div>

          <!-- Delete Account Confirmation Modal -->
          <DialogModal :show="confirmingUserDeletion" @close="closeModal">
              <template #title>
                  Delete Account
              </template>

              <template #content>
                Вы уверены, что хотите удалить свою учетную запись? Как только ваша учетная запись будет удалена, все ее ресурсы и данные будут удалены безвозвратно. Пожалуйста, введите свой пароль, чтобы подтвердить, что вы хотите удалить свою учетную запись безвозвратно.

                  <div class="mt-4">
                      <TextInput
                          ref="passwordInput"
                          v-model="form.password"
                          type="password"
                          class="mt-1 block w-3/4"
                          placeholder="Password"
                          autocomplete="current-password"
                          @keyup.enter="deleteUser"
                      />

                      <InputError :message="form.errors.password" class="mt-2" />
                  </div>
              </template>

              <template #footer>
                  <SecondaryButton @click="closeModal">
                      Отмена
                  </SecondaryButton>

                  <DangerButton
                      class="ms-3"
                      :class="{ 'opacity-25': form.processing }"
                      :disabled="form.processing"
                      @click="deleteUser"
                  >
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
    form.delete(route('current-user.destroy'), {
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
