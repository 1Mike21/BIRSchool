<template>
  <Head :title="course.title"/>

  <!-- About course -->
  <section class="indent_section_bottom">
    <SectionTitle>{{ course.title }}</SectionTitle>
    <div class="flex justify-between items-center flex-col-reverse sm:flex-row gap-y-10 max-xl:gap-x-20">
      <div class="min-w-[200px] sm:w-[500px] xl:w-[750px]">
        <p class="main_text">{{ course.description }}</p>
      </div>
      <div class="flex flex-col items-center justify-center bg-white border-[3px] border-red rounded-28 min-w-72 max-w-[300px] max-h-[404px] py-3 px-7 sm:py-6 sm:px-14">
        <img class="w-20 md:w-24 h-20 md:h-24 mb-6 mx-auto" :src="course.icon" :alt="course.title">
        <p class="text-2xl md:text-3xl mb-5">{{ course.price }} ₽</p>
        <a class="btn-buy" href="#">Купить</a>
        <p class="text-base md:text-lg mt-5">Тем в курсе: 6</p>
        <p class="text-base md:text-lg mt-4 whitespace-nowrap">Дата обновления: {{ course.updated_at }}</p>
      </div>
    </div>
  </section>
  <!-- Program of course -->
  <section>
    <SectionTitle>Программа курса</SectionTitle>
    <p
      class="bg-white text-xl md:text-2xl font-semibold flex items-center rounded-28 max-sm:rounded-[36px] max-sm:h-20 ps-5 py-3 mb-6"
      v-for="theme in themes"
      :key="theme.id"
    >
      {{ theme.title }}
    </p>
  </section>
</template>

<script setup>
import SectionTitle from '@/Components/Section/SectionTitle.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
  course: Array,
  themes: Array,
})
</script>

<style scoped>
.btn-buy {
  @apply border-0 rounded-28 self-center bg-red text-white py-2 px-4 lg:px-6 lg:text-xl text-center no-underline whitespace-nowrap hover:shadow-inset;
}
</style>
