<template>

  <Accordion>
    <Link href="#" class="flex items-center h-[96px] mx-10 my-6 py-11 ps-6 pe-3 bg-white rounded-28 text-2xl font-medium"><img src="/img/icons/study.svg" alt="Лекция" class="w-12 me-3 mt-2">Лекция</Link>
    <Link href="#" class="flex items-center h-[96px] mx-10 my-6 py-11 ps-6 pe-3 bg-white rounded-28 text-2xl font-medium"><img src="/img/icons/computer.svg" alt="Задание" class="w-12 me-3">Задание</Link>
    <Link href="#" class="flex items-center h-[96px] mx-10 my-6 py-11 ps-6 pe-3 bg-white rounded-28 text-2xl font-medium"><img src="/img/icons/code-programming.svg" alt="Дополнительные материалы" class="w-12 me-3">Дополнительные материалы</Link>
  </Accordion>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Accordion from '@/Components/Accordion.vue';
</script>
