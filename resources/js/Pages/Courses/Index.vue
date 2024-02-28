<template>
  <Head title="Все курсы"/>

  <section>
    <SectionTitle class="mb-5">Все курсы</SectionTitle>
    <div class="mb-12 flex justify-between">
      <input class="w-72 md:w-[400px] lg:w-[610px] xl:w-[830px] 2xl:w-[1080px] h-10 rounded-28 ps-5 text-sm md:text-base lg:text-lg" type="search" placeholder="Поиск...">
      <button class="bg-white w-36 lg:w-44 xl:w-[185px] h-10 rounded-28 text-sm md:text-base lg:text-lg">По названию</button>
      <button class="bg-white w-36 lg:w-44 xl:w-[185px] h-10 rounded-28 text-sm md:text-base lg:text-lg">По группе</button>
    </div>
    <div class="all-courses mb-12">
      <div class="all-courses__item">
        <img class="inline mt-4 mb-6" src="img/icon_course/HTML.svg" alt="Иконка курса">
        <h3 class="text-red text-xl xl:text-2xl mb-6">HTML</h3>
        <p class="text-xl xl:text-2xl mb-6">500 ₽</p>
        <a class="btn-more-detail text-white mb-6" :href="route('courses.show')">Подробнее</a>
      </div>
      <div class="all-courses__item">
        <img class="inline mt-4 mb-6" src="img/icon_course/CSS.svg" alt="Иконка курса">
        <h3 class="text-red text-xl xl:text-2xl mb-6">CSS</h3>
        <p class="text-xl xl:text-2xl mb-6">950 ₽</p>
        <a class="btn-more-detail text-white mb-6" href="#">Подробнее</a>
      </div>
      <div class="all-courses__item">
        <img class="inline mt-4 mb-6" src="img/icon_course/Git.svg" alt="Иконка курса">
        <h3 class="text-red text-xl xl:text-2xl mb-6">Git и командная строка</h3>
        <p class="text-xl xl:text-2xl mb-6">1500 ₽</p>
        <a class="btn-more-detail text-white mb-6" href="#">Подробнее</a>
      </div>
      <div class="all-courses__item">
        <img class="inline mt-4 mb-6" src="img/icon_course/JavaScript.svg" alt="Иконка курса">
        <h3 class="text-red text-xl xl:text-2xl mb-6">JavaScript</h3>
        <p class="text-xl xl:text-2xl mb-6">3500 ₽</p>
        <a class="btn-more-detail text-white mb-6" href="#">Подробнее</a>
      </div>
      <div class="all-courses__item">
        <img class="inline mt-4 mb-6" src="img/icon_course/React.svg" alt="Иконка курса">
        <h3 class="text-red text-xl xl:text-2xl mb-6">React</h3>
        <p class="text-xl xl:text-2xl mb-6">5000 ₽</p>
        <a class="btn-more-detail text-white mb-6" href="#">Подробнее</a>
      </div>
      <div class="all-courses__item">
        <img class="inline mt-4 mb-6" src="img/icon_course/PHP.svg" alt="Иконка курса">
        <h3 class="text-red text-xl xl:text-2xl mb-6">PHP</h3>
        <p class="text-xl xl:text-2xl mb-6">3500 ₽</p>
        <a class="btn-more-detail text-white mb-6" href="#">Подробнее</a>
      </div>
    </div>
  </section>
</template>

<script setup>
import SectionTitle from '@/Components/SectionTitle.vue';
import { Head } from '@inertiajs/vue3';
</script>

<style scoped>
  .all-courses {
    @apply grid sm:grid-cols-2 lg:grid-cols-3 justify-items-center text-center gap-y-12;
  }
  .all-courses__item {
    @apply bg-white border-[3px] border-red rounded-28 w-80 sm:w-72 md:w-[340px] lg:w-72 xl:w-96 2xl:w-[460px] h-72;
  }
  .btn-more-detail {
    @apply border-0 rounded-28 self-center bg-red hover:bg-inherit text-white ms-3 py-2 px-4 lg:px-6 lg:text-xl text-center no-underline whitespace-nowrap hover:bg-white hover:text-red;
  }
</style>
