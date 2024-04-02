<template>
  <Head title="Главная страница"/>

  <!-- About company -->
  <section class="indent_section_bottom">
    <img class="mx-auto blur-none" src="img/About_company.png" alt="Компания">
    <p class="text-white text-2xl text-justify mt-[85px]">
      Компания Бюро интернет решений занимается разработкой информационных систем с 2023 года. Одним из направлений компании является обучение.
      Мы ведем обучение в областях разработки сайтов и дизайна уже более двух лет. Обучение подойдет для любого возраста и уровня знаний.
      В ходе обучения, вы получите сильное коммьюнити, постоянную поддержку от куратора, реальные заказы и официальный сертификат на выходе.
    </p>
    &nbsp;
    <p class="text-white text-2xl">Лучшие ученики смогут начать свою карьеру в нашей компании!</p>
  </section>
  <!-- About teacher -->
  <section class="indent_section_bottom">
    <div class="flex items-center justify-center flex-wrap md:flex-nowrap md:gap-24 xl:gap-52">
      <img class="w-52 h-52 sm:w-72 sm:h-72 lg:w-[400px] lg:h-[400px]" src="img/Angelina_1.png" alt="Преподаватель">
      <p class="text-white text-2xl">
        Один из наших ведущих преподавателей и основатель компании - Петелина Ангелина.
        Ангелина ведущий дипломированный специалист в области веб разработки.
        Она является чемпионом WorldSkills 2022 в области интернета вещей и сертифицированным экспертом.
      </p>
    </div>
  </section>
  <!-- Group courses -->
  <section class="indent_section_bottom">
    <SectionTitle class="mb-11">Получите перспективную творческую профессию в IT</SectionTitle>
    <div class="group-course">
      <div class="group-course__item">
        <img class="w-16 mx-auto" src="img/icon/image 1.svg" alt="Иконка группы">
        <h4 class="text-red font-medium text-2xl">FrontEnd Pro</h4>
        <h5 class="text-white text-xl underline underline-offset-8 decoration-red">Продвинутый уровень</h5>
        <h6 class="text-white text-base">Освойте с нуля HTML, CSS, и прокачайте свои знания по JS и React</h6>
        <a class="btn-more-detail" :href="route('groups.show')">Подробнее</a>
      </div>
      <div class="group-course__item">
        <img class="w-16 mx-auto" src="img/icon/image 2.svg" alt="Иконка группы">
        <h4 class="text-red font-medium text-2xl">BackEnd Pro</h4>
        <h5 class="text-white text-xl underline underline-offset-8 decoration-red">Продвинутый уровень</h5>
        <h6 class="text-white text-base">Освойте с нуля PHP, серверные технологии и фреймворк Laravel</h6>
        <a class="btn-more-detail" :href="route('groups.show')">Подробнее</a>
      </div>
      <div class="group-course__item">
        <img class="w-16 mx-auto" src="img/icon/image 3.svg" alt="Иконка группы">
        <h4 class="text-red font-medium text-2xl">Figma для разработчиков</h4>
        <h5 class="text-white text-xl underline underline-offset-8 decoration-red">Базовый уровень</h5>
        <h6 class="text-white text-base">Изучите самый популярный дизайнерский инструмент</h6>
        <a class="btn-more-detail" :href="route('groups.show')">Подробнее</a>
      </div>
      <div class="group-course__item">
        <img class="w-16 mx-auto" src="img/icon/image 4.svg" alt="Иконка группы">
        <h4 class="text-red font-medium text-2xl">Git и командная строка</h4>
        <h5 class="text-white text-xl underline underline-offset-8 decoration-red">Базовый уровень</h5>
        <h6 class="text-white text-base">Выучите два самых важных инструмента для любого программиста</h6>
        <a class="btn-more-detail" :href="route('groups.show')">Подробнее</a>
      </div>
    </div>
  </section>
  <!-- Slider student portfolio -->
  <section class="indent_section_bottom">
    <Carousel class="carousel" v-slot="{ currentSlide }">
      <Slide v-for="(slide, index) in carouselSlides" :key="index">
        <div v-show="currentSlide === index + 1" class="slide-info">
          <img :src="imgUrls[`${base}img/slider_student_portfolio/${slide}.png`]" alt="">
        </div>
      </Slide>
    </Carousel>
  </section>
  <!-- Slider reviews -->
  <section>

  </section>
</template>

<script>
import SectionTitle from '@/Components/SectionTitle.vue';
import { Head } from '@inertiajs/vue3';
import Carousel from '@/Components/Carousel.vue';
import Slide from '@/Components/Slide.vue';

const base = import.meta.env.BASE_URL
const imgUrls = import.meta.glob('../img/slider_student_portfolio/*.png', {
  import: 'default',
  eager: true
})

defineProps(['slide'])

export default {
  setup () {
    const carouselSlides = ["w1", "w2", "w3", "w4", "w5"];
    return { carouselSlides };
  },
};
</script>

<style scoped>
  .group-course {
    @apply max-w-3xl mx-auto grid grid-cols-2 justify-items-center gap-8;
  }
  .group-course__item {
    @apply bg-white flex flex-col gap-y-3 bg-opacity-5 border-2 min-h-[310px] min-w-[270px] border-white rounded-28 text-center p-3 pb-5;
  }
  .btn-more-detail {
    @apply border-0 rounded-xl self-center mt-auto bg-red hover:bg-inherit text-white py-2 px-4 lg:px-6 lg:text-xl text-center no-underline whitespace-nowrap hover:bg-white hover:text-red;
  }
  .carousel {
    @apply max-h-[700px];
  }
</style>
