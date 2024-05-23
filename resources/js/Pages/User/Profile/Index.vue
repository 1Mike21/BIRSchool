<template>
  <Head title="Личный кабинет"/>

  <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 my-4">
    <div class="bg-white dark:bg-opacity-5 shadow-xl rounded-lg rounded-br-3xl p-4 sm:p-6 w-full h-full border dark:border-none">
      <div class="md:flex md:justify-around">
        <div class="text-center">
          <img class="max-h-48 max-w-48 rounded-full mx-auto" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
          <p class="dark:text-white mt-4 mb-5">Дата регистрации: <!--{{ user.created_at }}--></p>
        </div>
        <div class="dark:text-white text-center space-y-3">
          <h2 class="text-2xl">{{ $page.props.auth.user.surname }} {{ $page.props.auth.user.name }}</h2>
          <p class="text-lg">{{ $page.props.auth.user.email }}</p>
          <p class="text-lg">{{ $page.props.auth.user.phone_number }}</p>
        </div>
      </div>
      <Link class="dark:text-white hover:text-red hover:underline hover:underline-offset-4 hover:decoration-red text-lg flex justify-center md:place-content-end mt-10" :href="route('user.profile.show')">Редактировать информацию</Link>
    </div>

    <div class="bg-white dark:bg-opacity-5 shadow-xl rounded-lg rounded-bl-3xl mb-4 p-4 sm:p-6 w-full h-full border dark:border-none">

    </div>
  </div>

  <div class="grid grid-cols-1 2xl:grid-cols-2 gap-4 my-4">
    <div class="bg-white dark:bg-opacity-5 shadow-xl rounded-lg rounded-tr-3xl mb-4 p-4 sm:p-6 w-full h-full border dark:border-none">
      <h3 class="text-xl font-bold dark:text-white text-center">Текущие курсы</h3>

    </div>
    <div class="overflow-x-auto bg-white dark:bg-opacity-5 shadow-xl rounded-lg rounded-tl-3xl mb-4 p-4 sm:p-6 w-full h-full border dark:border-none">
      <h3 class="text-xl font-bold dark:text-white text-center">Пройденные курсы</h3>

    </div>
  </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import UserLayout from '@/Layouts/UserLayout.vue';

defineOptions({ layout: UserLayout })
</script>
