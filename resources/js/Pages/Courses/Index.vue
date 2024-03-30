<template>
  <Head title="Все курсы"/>

  <section>
    <SectionTitle class="mb-5">Все курсы</SectionTitle>
    <div class="mb-12 flex justify-between ">
      <input class="w-72 md:w-[400px] lg:w-[610px] xl:w-[830px] 2xl:w-[1080px] h-10 rounded-28 ps-5 text-sm md:text-base lg:text-lg focus:border-red focus:ring-red" type="search" placeholder="Поиск...">
      <button class="bg-white w-36 lg:w-44 xl:w-[185px] h-10 rounded-28 text-sm md:text-base lg:text-lg">По названию</button>
      <button class="bg-white w-36 lg:w-44 xl:w-[185px] h-10 rounded-28 text-sm md:text-base lg:text-lg">По группе</button>
    </div>
    <div class="all-courses">
      <div
        class="all-courses__item"
        v-for="course in courses"
        :key="course.id"
      >
        <img class="w-16 h-16 inline mt-4 mb-2" :src="course.icon" alt="Иконка курса">
        <h3 class="text-white text-xl xl:text-2xl font-semibold mb-8">{{ course.title }}</h3>
        <p class="text-white text-xl xl:text-2xl mb-10">{{ course.price }} ₽</p>
        <a class="btn-more-detail text-white mb-6" :href="route('courses.show', course.id)">Подробнее</a>
      </div>
    </div>
  </section>
</template>

<script setup>
import SectionTitle from '@/Components/SectionTitle.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
  courses: Array
});
</script>

<style scoped>
  .all-courses {
    @apply grid sm:grid-cols-2 lg:grid-cols-3 justify-items-center text-center gap-12;
  }
  .all-courses__item {
    @apply bg-white bg-opacity-5 border-[3px] border-white rounded-28 w-80 sm:w-72 md:w-[340px] lg:w-72 xl:w-96 2xl:w-[460px] h-72;
  }
  .btn-more-detail {
    @apply border-0 rounded-28 self-center bg-red text-white py-2 px-4 lg:px-6 lg:text-xl text-center no-underline whitespace-nowrap hover:shadow-inset;
  }
</style>
