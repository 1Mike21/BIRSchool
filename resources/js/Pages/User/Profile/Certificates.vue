<template>
  <Head title="Сертификаты"/>

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 justify-items-center gap-y-6 gap-x-3 mt-2">
    <div class="text-left">
      <h2 class="text-black dark:text-white text-base md:text-lg lg:text-xl mb-3">Frontend разработчик</h2>
      <img class="w-[560px] h-auto border dark:border-none shadow-xl dark:shadow-none" src="/storage/certificates/certificate.png" alt="Сертификат">
    </div>
  </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import UserLayout from '@/Layouts/UserLayout.vue';

defineOptions({ layout: UserLayout })
</script>
