<template>
  <Head title="Все курсы"/>

  <section>
    <SectionTitle>Все курсы</SectionTitle>
    <div class="flex mb-7 lg:mb-12 gap-4 flex-col sm:flex-row items-center justify-between max-sm:justify-center">
      <SearchInput />
      <div class="flex max-[320px]:flex-col gap-y-5">
        <button
          class="bg-white min-w-32 px-5 min-h-10 rounded-28 text-sm md:text-base lg:text-lg text-black mr-3 max-[320px]:mr-0 xl:mr-5 border shadow-inner hover:shadow-xl focus:shadow-xl">По
          названию</button>
        <button class="bg-white min-w-32 px-5 min-h-10 rounded-28 text-sm md:text-base lg:text-lg text-black border shadow-inner hover:shadow-xl focus:shadow-xl">По
          группе</button>
      </div>
    </div>
    <div class="all-courses">
      <div class="all-courses__item" v-for="course in courses" :key="course.id">
        <img class="w-16 mx-auto" :src="course.icon" alt="Иконка курса">
        <h3 class="font-semibold">{{ course.title }}</h3>
        <p>{{ course.price }} ₽</p>
        <Link class="btn-more-detail" :href="route('courses.show', course.slug)">Подробнее</Link>
      </div>
    </div>
  </section>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import SearchInput from '@/Components/FormElement/SearchInput.vue';
import SectionTitle from '@/Components/Section/SectionTitle.vue';
import { Head, Link } from '@inertiajs/vue3';

defineOptions({ layout: AdminLayout });

const props = defineProps({
  courses: Array
});
</script>

<style scoped>
.all-courses {
  @apply max-w-screen-2xl grid grid-cols-1 min-[560px]:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center text-center gap-5;
}
.all-courses__item {
  @apply flex flex-col text-black dark:text-white text-xl xl:text-2xl bg-white bg-opacity-5 p-5 pb-6 gap-y-5 border-[3px] border-darkblue dark:border-white rounded-28 w-full sm:w-[292px] md:w-[357px] lg:w-[315px] xl:w-[295px] 2xl:w-[360px] min-h-72 shadow-2xl;
}
.btn-more-detail {
  @apply border-0 rounded-28 mt-auto self-center bg-red text-white py-2 px-4 lg:px-6 lg:text-xl text-center no-underline whitespace-nowrap hover:shadow-inset;
}
</style>
