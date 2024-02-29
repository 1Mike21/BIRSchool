<template>
  <Head title="Описание курса"/>

  <!-- About course -->
  <section class="indent_section_bottom">
    <div class="flex justify-between">
      <div class="w-[550px]">
        <SectionTitle class="mb-12">HTML</SectionTitle>
        <p class="text-white text-2xl">
          Онлайн-курс по HTML - это обучающая программа, целью которой является предоставление студентам фундаментальных знаний и навыков в области
          языка гипертекстовой разметки (HTML). Курс ориентирован на начинающих и тех, кто стремится познакомиться с веб-технологиями.
        </p>
      </div>
      <div class="text-center bg-white border-[3px] border-red rounded-28 px-8 py-7">
        <img class="w-24 h-24 mb-6 inline" src="/img/icon_course/HTML.svg" alt="Иконка курса">
        <p class="text-3xl mb-5">500 ₽</p>
        <a class="btn-buy" href="#">Купить</a>
        <p class="text-lg mt-5">Тем в курсе: 6</p>
        <p class="text-lg">Дата обновления: 19.01.24</p>
      </div>
    </div>
  </section>
  <!-- Program of course -->
  <section>
    <SectionTitle class="mb-7">Программа курса</SectionTitle>
    <p class="bg-white text-3xl rounded-28 ps-5 py-3 mb-6">Введение в HTML</p>
    <p class="bg-white text-3xl rounded-28 ps-5 py-3 mb-6">Структура HTML документа</p>
    <p class="bg-white text-3xl rounded-28 ps-5 py-3 mb-6">Форматирование текста</p>
    <p class="bg-white text-3xl rounded-28 ps-5 py-3 mb-6">Работа с изображениями и мультимедиа</p>
    <p class="bg-white text-3xl rounded-28 ps-5 py-3 mb-6">Таблицы</p>
    <p class="bg-white text-3xl rounded-28 ps-5 py-3">Формы и элементы управления</p>
  </section>
</template>

<script setup>
import SectionTitle from '@/Components/SectionTitle.vue';
import { Head } from '@inertiajs/vue3';
</script>

<style scoped>
  .btn-buy {
    @apply border-0 rounded-28 self-center bg-red text-white ms-3 py-2 px-4 lg:px-6 lg:text-xl text-center no-underline whitespace-nowrap hover:shadow-inset;
  }
</style>
