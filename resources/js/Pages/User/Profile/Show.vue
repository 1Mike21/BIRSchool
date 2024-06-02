<template>
  <Head title="Настройки профиля"/>

    <div class="grid grid-cols-1 gap-x-10 md:grid-cols-2">
      <div v-if="$page.props.jetstream.canUpdateProfileInformation">
        <UpdateProfileInformationForm :user="$page.props.auth.user" />
      </div>

      <div class="flex flex-col justify-between max-md:mt-6">
        <div v-if="$page.props.jetstream.canUpdatePassword">
          <UpdatePasswordForm class="mt-10 sm:mt-0" />
        </div>
        <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
          <DeleteUserForm class="mt-10 sm:mt-0" />
        </template>
      </div>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import UserLayout from '@/Layouts/UserLayout.vue';
import DeleteUserForm from '@/Pages/User/Profile/Partials/DeleteUserForm.vue';
import UpdatePasswordForm from '@/Pages/User/Profile/Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from '@/Pages/User/Profile/Partials/UpdateProfileInformationForm.vue';

defineOptions({ layout: UserLayout })

defineProps({
  sessions: Array,
});
</script>
