<template>

  <Head title="Главная страница" />

  <!-- About company -->
  <section class="indent_section_bottom">
    <img class="mx-auto blur-none" src="/img/About_company.png" alt="Компания">
    <p class="main_text max-sm:text-left text-justify indent_section_top">
      Компания Бюро интернет решений занимается разработкой информационных систем с 2023 года. Одним из направлений
      компании является обучение.
      Мы ведем обучение в областях разработки сайтов и дизайна уже более двух лет. Обучение подойдет для любого возраста
      и уровня знаний.
      В ходе обучения, вы получите сильное коммьюнити, постоянную поддержку от куратора, реальные заказы и официальный
      сертификат на выходе.
    </p>
    &nbsp;
    <p class="main_text">Лучшие ученики смогут начать свою карьеру в нашей компании!</p>
  </section>
  <!-- About teacher -->
  <section class="indent_section_bottom">
    <div class="flex items-center justify-center flex-wrap md:flex-nowrap md:gap-24 xl:gap-52">
      <img class="w-52 h-52 sm:w-72 sm:h-72 lg:w-[400px] lg:h-[400px] max-sm:mb-4 max-md:mb-8" src="/img/Angelina_1.png"
        alt="Преподаватель">
      <p class="main_text">
        Один из наших ведущих преподавателей и основатель компании - Петелина Ангелина.
        Ангелина ведущий дипломированный специалист в области веб разработки.
        Она является чемпионом WorldSkills 2022 в области интернета вещей и сертифицированным экспертом.
      </p>
    </div>
  </section>
  <!-- Group courses -->
  <section class="indent_section_bottom">
    <SectionTitle>Получите перспективную творческую профессию в IT</SectionTitle>
    <div class="group-course">
      <div class="group-course__item" v-for="group in groups" :key="group.id">
        <img class="w-16 mx-auto" :src="group.icon" :alt="group.title">
        <h4 class="text-red font-medium text-2xl">{{ group.title }}</h4>
        <h5 class="text-black dark:text-white text-lg underline underline-offset-8 decoration-red">{{ group.level }}
        </h5>
        <h6 class="text-black dark:text-white text-base">{{ group.description }}</h6>
        <Link class="btn-more-detail" :href="route('groups.show', group.slug)">Подробнее</Link>
      </div>
    </div>
  </section>
  <!-- Slider student portfolio -->
  <section class="indent_section_bottom max-lg:mb-20">
    <SectionTitle>Работы учеников</SectionTitle>
    <Slider :options="optionsProjectsSlider" class="slider_projects" :slides="studentsProjects" />
  </section>
  <!-- Slider reviews -->
  <section class="indent_section_bottom max-md:mb-14">
    <SectionTitle>Отзывы</SectionTitle>
    <Slider :options="optionsReviewsSlider" class="slider_reviews" :slides="reviews" />
  </section>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import SectionTitle from '@/Components/Section/SectionTitle.vue';
import Slider from '@/Components/Slider/Slider.vue';

const props = defineProps({
  groups: Array,
  studentsProjects: Array,
  reviews: Array,
});

const optionsProjectsSlider = {
  type: 'loop',
  updateOnMove: true,
  perPage: 3,
  perMove: 2,
  gap: '1rem',
  breakpoints: {
    1650: {
      arrows: false,
    },
    1200: {
      perPage: 2,
    },
    600: {
      perPage: 1,
      perMove: 1,
    },
  }
}

const optionsReviewsSlider = {
  type: 'loop',
  updateOnMove: true,
  perPage: 3,
  perMove : 1,
  gap: '1rem',
  breakpoints: {
    1650: {
      arrows: false,
    },
    1200: {
      perPage: 2,
    },
    600: {
      perPage: 1,
      perMove: 1,
    },
  }
}
</script>

<style scoped>
.group-course {
  @apply max-w-4xl mx-auto grid sm:grid-cols-2 justify-items-center gap-8;
}
.group-course__item {
  @apply flex flex-col gap-y-3 bg-white dark:bg-opacity-5 border-2 min-h-[310px] w-full max-sm:max-w-[330px] border-darkblue dark:border-white rounded-28 text-center p-3 pb-5 shadow-2xl dark:shadow-none;
}
.btn-more-detail {
  @apply border-0 rounded-xl self-center mt-auto bg-red text-white py-2 px-4 lg:px-6 lg:text-xl text-center no-underline whitespace-nowrap hover:bg-[#941433] dark:hover:bg-white dark:hover:text-red;
}
</style>
