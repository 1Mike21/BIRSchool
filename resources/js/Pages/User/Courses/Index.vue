<template>
  <Head title="Мои курсы"/>

  <section>
    <SectionTitle>Мои курсы</SectionTitle>
    <div class="flex mb-7 lg:mb-12 gap-4 flex-col sm:flex-row items-center justify-between max-sm:justify-center">
      <SearchInput />
      <div class="flex max-[320px]:flex-col gap-y-5">
        <button
          class="bg-white min-w-32 px-5 min-h-10 rounded-28 text-sm md:text-base lg:text-lg mr-3 max-[320px]:mr-0 xl:mr-5">По
          названию</button>
        <button class="bg-white min-w-32 px-5 min-h-10 rounded-28 text-sm md:text-base lg:text-lg">По
          группе</button>
      </div>
    </div>
    <div class="all-courses">
      <Link :href="route('user.courses.show', course.slug)">
        <div class="all-courses__item">
          <img class="w-16 mx-auto" :src="course.icon" :alt="course.title">
          <h3 class="font-semibold">{{ course.title }}</h3>
          <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 mt-auto">
            <div class="bg-green-600 text-xs font-semibold text-white text-center p-1 leading-none rounded-full" style="width: 45%">45%</div>
          </div>
        </div>
      </Link>
    </div>
  </section>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import SearchInput from '@/Components/FormElement/SearchInput.vue';
import SectionTitle from '@/Components/Section/SectionTitle.vue';

const props = defineProps({
  course: Array
});
</script>

<style scoped>
.all-courses {
  @apply max-w-screen-2xl grid grid-cols-1 min-[560px]:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center text-center gap-5;
}
.all-courses__item {
  @apply flex flex-col text-black dark:text-white text-xl xl:text-2xl bg-white dark:bg-opacity-5 px-5 py-10 gap-y-4 border-[3px] border-red rounded-28 w-full sm:w-[292px] md:w-[357px] lg:w-[315px] xl:w-[295px] 2xl:w-[360px] min-h-72 shadow-2xl dark:shadow-none;
}
</style>
