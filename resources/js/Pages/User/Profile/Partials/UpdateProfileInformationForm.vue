<template>
  <FormSection @submitted="updateProfileInformation">
    <template #title>
      Информация о вас
    </template>

    <template #description>
      Обновите информацию профиля вашей учетной записи.
    </template>

    <template #form>
      <!-- Profile Photo -->
      <div v-if="$page.props.jetstream.managesProfilePhotos" class="col-span-6 sm:col-span-4">
        <!-- Profile Photo File Input -->
        <input id="photo" ref="photoInput" type="file" class="hidden" @change="updatePhotoPreview">

        <!-- Current Profile Photo -->
        <div v-show="!photoPreview" class="mt-2">
          <img :src="user.profile_photo_url" :alt="user.name" class="rounded-full w-36 sm:w-48 h-36 sm:h-48 object-cover mx-auto">
        </div>

        <!-- New Profile Photo Preview -->
        <div v-show="photoPreview" class="mt-2">
          <span class="block rounded-full mx-auto w-36 sm:w-48 h-36 sm:h-48 bg-cover bg-no-repeat bg-center"
            :style="'background-image: url(\'' + photoPreview + '\');'" />
        </div>

        <div class="flex gap-x-4 mt-2 items-center flex-col sm:flex-row md:flex-col justify-center lg:flex-row lg:gap-y-2">
          <ProfileSecondaryButton class="mt-2" type="button" @click.prevent="selectNewPhoto">
            Обновить фотографию
          </ProfileSecondaryButton>
          <ProfileSecondaryButton class="mt-2" type="button" @click.prevent="deletePhoto">
            Удалить фотографию
          </ProfileSecondaryButton>
        </div>

        <InputError :message="form.errors.photo" class="mt-2" />
      </div>

      <!-- Surname -->
      <div class="col-span-6 sm:col-span-4">
        <InputLabel for="surname" value="Фамилия" class="text-black dark:text-white"/>
        <TextInput id="surname" v-model="form.surname" type="text" :class="['mt-1 block w-full bg-white', {'border-red': form.errors.surname}]" autocomplete="surname" />
        <InputError :message="form.errors.surname" class="mt-2" />
      </div>

      <!-- Name -->
      <div class="col-span-6 sm:col-span-4">
        <InputLabel for="name" value="Имя" class="text-black dark:text-white"/>
        <TextInput id="name" v-model="form.name" type="text" :class="['mt-1 block w-full bg-white', {'border-red': form.errors.name}]" autocomplete="name" />
        <InputError :message="form.errors.name" class="mt-2" />
      </div>

      <!-- Email -->
      <div class="col-span-6 sm:col-span-4">
        <InputLabel for="email" value="Email" class="text-black dark:text-white"/>
        <TextInput id="email" v-model="form.email" type="email" :class="['mt-1 block w-full bg-white', {'border-red': form.errors.email}]" autocomplete="email" />
        <InputError :message="form.errors.email" class="mt-2" />

        <div v-if="$page.props.jetstream.hasEmailVerification && user.email_verified_at === null">
          <p class="text-sm mt-2">
            Ваш адрес электронной почты не подтвержден.

            <Link :href="route('verification.send')" method="post" as="button"
              class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              @click.prevent="sendEmailVerification">
            Нажмите здесь, чтобы повторно отправить электронное письмо с подтверждением.
            </Link>
          </p>

          <div v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
            На Ваш электронный адрес была отправлена новая ссылка для подтверждения.
          </div>
        </div>
      </div>

      <!-- Phone number -->
      <div class="col-span-6 sm:col-span-4">
        <InputLabel for="phone_number" value="Номер телефона" class="text-black dark:text-white"/>
        <TextInput id="phone_number" v-model="form.phone_number" type="text" :class="['mt-1 block w-full bg-white', {'border-red': form.errors.phone_number}]" autocomplete="phone_number" />
        <InputError :message="form.errors.phone_number" class="mt-2" />
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
import { Link, router, useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/FormElement/ActionMessage.vue';
import FormSection from '@/Components/FormElement/FormSection.vue';
import InputError from '@/Components/FormElement/InputError.vue';
import InputLabel from '@/Components/FormElement/InputLabel.vue';
import PrimaryButton from '@/Components/Button/PrimaryButton.vue';
import ProfileSecondaryButton from '@/Components/Button/ProfileSecondaryButton.vue';
import TextInput from '@/Components/FormElement/TextInput.vue';

const props = defineProps({
  user: Object,
});

const form = useForm({
  _method: 'PUT',
  name: props.user.name,
  surname: props.user.surname,
  email: props.user.email,
  phone_number: props.user.phone_number,
  photo: null,
});

const verificationLinkSent = ref(null);
const photoPreview = ref(null);
const photoInput = ref(null);

const updateProfileInformation = () => {
  if (photoInput.value) {
    form.photo = photoInput.value.files[0];
  }

  form.post(route('user.user-profile-information.update'), {
    errorBag: 'updateProfileInformation',
    preserveScroll: true,
    onSuccess: () => clearPhotoFileInput(),
  });
};

const sendEmailVerification = () => {
  verificationLinkSent.value = true;
};

const selectNewPhoto = () => {
  photoInput.value.click();
};

const updatePhotoPreview = () => {
  const photo = photoInput.value.files[0];

  if (!photo) return;

  const reader = new FileReader();

  reader.onload = (e) => {
    photoPreview.value = e.target.result;
  };

  reader.readAsDataURL(photo);
};

const deletePhoto = () => {
  router.delete(route('user.current-user-photo.destroy'), {
    preserveScroll: true,
    onSuccess: () => {
      photoPreview.value = null;
      clearPhotoFileInput();
    },
  });
};

const clearPhotoFileInput = () => {
  if (photoInput.value?.value) {
    photoInput.value.value = null;
  }
};
</script>
