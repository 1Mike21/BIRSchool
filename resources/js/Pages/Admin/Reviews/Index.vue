<template>

  <Head title="Отзывы" />

  <div class="mt-3 mb-5">
    <AdminButton as="link" hasIcon="true" :href="route('admin.reviews.create')">
      <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd">
        </path>
      </svg>
      Загрузить отзыв
    </AdminButton>
  </div>

  <section>
    <div class="grid grid-cols-1 2xl:grid-cols-4 min-[1950px]:grid-cols-5 gap-10">
      <img class="h-[550px] w-auto border dark:border-none shadow-xl dark:shadow-none"
        src="/storage/slider_reviews/study1.jpg" alt="Отзыв">
    </div>
  </section>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import AdminButton from '@/Components/Button/AdminButton.vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';

defineOptions({ layout: AdminLayout });
</script>
