<template>
  <Head title="Все курсы"/>

  <section>
    <SectionTitle class="mb-5">Все курсы</SectionTitle>
    <div class="mb-12 flex justify-between ">
      <input class="w-72 md:w-[400px] lg:w-[610px] xl:w-[830px] 2xl:w-[1080px] h-10 rounded-28 ps-5 text-sm md:text-base lg:text-lg focus:border-red focus:ring-red" type="search" placeholder="Поиск...">
      <button class="bg-white w-36 lg:w-44 xl:w-[185px] h-10 rounded-28 text-sm md:text-base lg:text-lg">По названию</button>
      <button class="bg-white w-36 lg:w-44 xl:w-[185px] h-10 rounded-28 text-sm md:text-base lg:text-lg">По группе</button>
    </div>
    <div class="all-courses mb-12">
      <div class="all-courses__item">
        <img class="w-16 h-16 inline mt-4 mb-2" src="img/icon/html5.svg" alt="Иконка курса">
        <h3 class="text-white text-xl xl:text-2xl font-semibold mb-8">HTML</h3>
        <p class="text-white text-xl xl:text-2xl mb-10">500 ₽</p>
        <a class="btn-more-detail text-white mb-6" :href="route('courses.show')">Подробнее</a>
      </div>
      <div class="all-courses__item">
        <img class="w-16 h-16 inline mt-4 mb-2" src="img/icon/css3.svg" alt="Иконка курса">
        <h3 class="text-white text-xl xl:text-2xl font-semibold mb-8">CSS</h3>
        <p class="text-white text-xl xl:text-2xl mb-10">950 ₽</p>
        <a class="btn-more-detail text-white mb-6" href="#">Подробнее</a>
      </div>
      <div class="all-courses__item">
        <img class="w-16 h-16 inline mt-4 mb-2" src="img/icon/git.svg" alt="Иконка курса">
        <h3 class="text-white text-xl xl:text-2xl font-semibold mb-8">Git и командная строка</h3>
        <p class="text-white text-xl xl:text-2xl mb-10">1500 ₽</p>
        <a class="btn-more-detail text-white mb-6" href="#">Подробнее</a>
      </div>
      <div class="all-courses__item">
        <img class="w-16 h-16 inline mt-4 mb-2" src="img/icon/javascript.svg" alt="Иконка курса">
        <h3 class="text-white text-xl xl:text-2xl font-semibold mb-8">JavaScript</h3>
        <p class="text-white text-xl xl:text-2xl mb-10">3500 ₽</p>
        <a class="btn-more-detail text-white mb-6" href="#">Подробнее</a>
      </div>
      <div class="all-courses__item">
        <img class="w-16 h-16 inline mt-4 mb-2" src="img/icon/react.svg" alt="Иконка курса">
        <h3 class="text-white text-xl xl:text-2xl font-semibold mb-8">React</h3>
        <p class="text-white text-xl xl:text-2xl mb-10">5000 ₽</p>
        <a class="btn-more-detail text-white mb-6" href="#">Подробнее</a>
      </div>
      <div class="all-courses__item">
        <img class="w-16 h-16 inline mt-4 mb-2" src="img/icon/php.svg" alt="Иконка курса">
        <h3 class="text-white text-xl xl:text-2xl font-semibold mb-8">PHP</h3>
        <p class="text-white text-xl xl:text-2xl mb-10">3500 ₽</p>
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
    @apply bg-white bg-opacity-5 border-[3px] border-white rounded-28 w-80 sm:w-72 md:w-[340px] lg:w-72 xl:w-96 2xl:w-[460px] h-72;
  }
  .btn-more-detail {
    @apply border-0 rounded-28 self-center bg-red text-white py-2 px-4 lg:px-6 lg:text-xl text-center no-underline whitespace-nowrap hover:shadow-inset;
  }
</style>
