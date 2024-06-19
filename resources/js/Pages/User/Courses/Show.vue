<template>
  <Head />

  <Accordion>
    <template #title>Тема 1</template>
    <Link :href="route('user.themes.show')" class="flex items-center h-[96px] mx-10 my-6 py-11 ps-3 sm:ps-6 pe-3 bg-slate-200 dark:bg-white shadow-xl dark:shadow-none rounded-28 text-lg sm:text-xl md:text-2xl font-medium hover:underline hover:decoration-1 hover:underline-offset-4"><img src="/img/icons/study.svg" alt="Лекция" class="w-9 sm:w-12 me-2 sm:me-3 mt-2">Лекция</Link>
    <Link :href="route('user.homeworks.show', 'homework')" class="flex items-center h-[96px] mx-10 my-6 py-11 ps-3 sm:ps-6 pe-3 bg-slate-200 dark:bg-white shadow-xl dark:shadow-none rounded-28 text-lg sm:text-xl md:text-2xl font-medium hover:underline hover:decoration-1 hover:underline-offset-4"><img src="/img/icons/computer.svg" alt="Задание" class="w-9 sm:w-12 me-2 sm:me-3">Задание</Link>
    <div class="flex items-center h-[96px] mx-10 my-6 py-11 ps-3 sm:ps-6 pe-3 bg-slate-200 dark:bg-white shadow-xl dark:shadow-none rounded-28 text-lg sm:text-xl md:text-2xl font-medium hover:underline hover:decoration-1 hover:underline-offset-4">
      <img src="/img/icons/code-programming.svg" alt="Дополнительные материалы" class="w-9 sm:w-12 me-2 sm:me-3">
      <h2>Доп. материалы</h2>
    </div>
  </Accordion>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Accordion from '@/Components/Accordion.vue';

// const props = defineProps({
//   homework: Array
// });
</script>
