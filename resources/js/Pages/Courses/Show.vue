<template>
  <Head title="Описание курса"/>

  <!-- About course -->
  <section class="indent_section_bottom">
    <SectionTitle class="mb-12">HTML</SectionTitle>
    <div class="flex justify-between items-center flex-col-reverse sm:flex-row gap-y-10 max-xl:gap-x-20">
      <div class="max-w-[750px]">
        <p class="text-white text-xl md:text-2xl max-sm:text-justify">
          Онлайн-курс по HTML - это обучающая программа, целью которой является предоставление студентам фундаментальных знаний и навыков в области
          языка гипертекстовой разметки (HTML). Курс ориентирован на начинающих и тех, кто стремится познакомиться с веб-технологиями.
        </p>
      </div>
      <div class="flex flex-col items-center justify-center bg-white border-[3px] border-red rounded-28 min-w-72 max-w-96 max-h-[404px] py-3 px-7 sm:py-6 sm:px-14">
        <img class="w-20 md:w-24 h-20 md:h-24 mb-6 mx-auto" src="/img/icon/html5.svg" alt="Иконка курса">
        <p class="text-2xl md:text-3xl mb-5">500 ₽</p>
        <a class="btn-buy" href="#">Купить</a>
        <p class="text-base md:text-lg mt-5">Тем в курсе: 6</p>
        <p class="text-base md:text-lg mt-4 whitespace-nowrap">Дата обновления: 19.01.24</p>
      </div>
    </div>
  </section>
  <!-- Program of course -->
  <section>
    <SectionTitle class="mb-7">Программа курса</SectionTitle>
    <p class="bg-white text-xl md:text-2xl font-semibold flex items-center rounded-28 max-sm:rounded-[36px] max-sm:h-20 ps-5 py-3 mb-6">Введение в HTML</p>
    <p class="bg-white text-xl md:text-2xl font-semibold flex items-center rounded-28 max-sm:rounded-[36px] max-sm:h-20 ps-5 py-3 mb-6">Структура HTML документа</p>
    <p class="bg-white text-xl md:text-2xl font-semibold flex items-center rounded-28 max-sm:rounded-[36px] max-sm:h-20 ps-5 py-3 mb-6">Форматирование текста</p>
    <p class="bg-white text-xl md:text-2xl font-semibold flex items-center rounded-28 max-sm:rounded-[36px] max-sm:h-20 ps-5 py-3 mb-6">Работа с изображениями и мультимедиа</p>
    <p class="bg-white text-xl md:text-2xl font-semibold flex items-center rounded-28 max-sm:rounded-[36px] max-sm:h-20 ps-5 py-3 mb-6">Таблицы</p>
    <p class="bg-white text-xl md:text-2xl font-semibold flex items-center rounded-28 max-sm:rounded-[36px] max-sm:h-20 ps-5 py-3">Формы и элементы управления</p>
  </section>
</template>

<script setup>
import SectionTitle from '@/Components/SectionTitle.vue';
import { Head } from '@inertiajs/vue3';
</script>

<style scoped>
  .btn-buy {
    @apply border-0 rounded-28 self-center bg-red text-white py-2 px-4 lg:px-6 lg:text-xl text-center no-underline whitespace-nowrap hover:shadow-inset;
  }
</style>
