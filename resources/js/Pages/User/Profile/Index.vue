<template>
  <Head title="Личный кабинет"/>

  <div class="grid grid-cols-1 2xl:grid-cols-2 gap-4 my-4">
    <div class="bg-white dark:bg-opacity-5 shadow-xl rounded-lg 2xl:rounded-br-3xl p-4 sm:p-6 w-full h-full border dark:border-none">
      <div class="md:flex md:justify-around">
        <div class="text-center">
          <img class="h-36 w-36 sm:h-48 sm:w-48 rounded-full mx-auto" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.surname + '' + $page.props.auth.user.name">
          <p class="dark:text-white mt-4 mb-5">Дата регистрации: {{ $page.props.auth.user.created_at }}</p>
        </div>
        <div class="dark:text-white text-center space-y-3">
          <h2 class="sm:text-2xl">{{ $page.props.auth.user.surname }} {{ $page.props.auth.user.name }}</h2>
          <p class="sm:text-lg truncate">{{ $page.props.auth.user.email }}</p>
          <p class="sm:text-lg">{{ $page.props.auth.user.phone_number }}</p>
        </div>
      </div>
      <Link class="dark:text-white hover:text-red dark:hover:text-red hover:underline hover:underline-offset-4 hover:decoration-red sm:text-lg flex justify-center text-center md:place-content-end mt-14" :href="route('user.profile.show')">Редактировать информацию</Link>
    </div>
    <div class="bg-white dark:bg-opacity-5 shadow-xl rounded-lg 2xl:rounded-bl-3xl mb-4 p-4 sm:p-6 w-full h-full border dark:border-none">

    </div>
  </div>

  <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 my-4">
    <div class="bg-white dark:bg-opacity-5 shadow-xl rounded-lg xl:rounded-tr-3xl mb-4 p-4 sm:px-16 sm:py-6 w-full h-full border dark:border-none">
      <h3 class="text-xl sm:text-2xl font-bold dark:text-white text-center mb-10">Текущие курсы</h3>
      <SliderCourses :options="options" :slides="slides"/>
      <!-- <div class="text-center font-bold text-xl dark:text-white">
        Текущих курсов пока нет
      </div> -->
    </div>
    <div class="bg-white dark:bg-opacity-5 shadow-xl rounded-lg xl:rounded-tl-3xl mb-4 p-4 sm:px-16 sm:py-6 w-full h-full border dark:border-none">
      <h3 class="text-xl sm:text-2xl font-bold dark:text-white text-center mb-10">Пройденные курсы</h3>
      <SliderCourses :options="options" :slides="slides"/>
      <!-- <div class="text-center font-bold text-xl dark:text-white">
        Пройденных курсов пока нет
      </div> -->
    </div>
  </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import UserLayout from '@/Layouts/UserLayout.vue';
import SliderCourses from '@/Components/Slider/SliderCourses.vue';

defineOptions({ layout: UserLayout })

const slides = [
  '/storage/icons/html5.svg',
  '/storage/icons/css3.svg',
  '/storage/icons/course-figma.svg',
  '/storage/icons/course-git.svg',
  '/storage/icons/javascript.svg',
  '/storage/icons/react.svg',
  '/storage/icons/docker.svg',
];

const options = {
  type: 'loop',
  updateOnMove: true,
  perPage: 4,
  perMove : 1,
  gap: '2.5rem',
  pagination: false,
  breakpoints: {
    1700: {
      perPage: 3,
    },
    700: {
      perPage: 2,
      arrows: false,
    },
    600: {
      perPage: 1,
    },
  }
}
</script>
