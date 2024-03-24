<template>
  <Head title="Контакты"/>

  <section>
    <h2 class="title">
      <span>BURO OF INTERNET <br> RESOLUTIONS!</span>
    </h2>
    <div class="flex items-center justify-center flex-wrap sm:flex-nowrap sm:gap-20 lg:gap-40 mt-12">
      <iframe class="rounded-lg h-96 md:h-[500px]" src="https://yandex.ru/map-widget/v1/?um=constructor%3A7956b17f9560d78e557a72711294f78aa8a83ec26ec231a62f52e02426081f6f&amp;source=constructor" width="1500" frameborder="0"></iframe>
      <p class="text-white text-base md:text-xl max-sm:mt-6">Мы находимся по адресу <b>ул. Бойцовая 27, офис 326</b>.<br>
        Перед приездом обязательно предварительно свяжитесь с нами по телефону <b>+79017441182</b> или по почте <b>inbox@bir-team.ru</b>
      </p>
    </div>
    <div class="flex items-center justify-center flex-wrap sm:flex-nowrap sm:gap-24 lg:gap-48 mt-10 sm:mt-12 md:mt-85">
      <p class="text-white text-base md:text-xl">В нашей школе программирования мы стремимся дать студентам не только теоретическую базу и практические навыки веб-разработки,
        но и подготовить их к реальным проектам и вызовам в отрасли информационных технологий. Мы гордимся тем, что наши студенты получают полезный опыт,
        который может быть использован не только для работы в нашей компании, но и в других крупных организациях.
      </p>
      <a href="img/door.jpg"><img class="rounded-lg max-sm:mt-6 max-sm:h-[420px]" src="img/door.jpg" alt="Дверь офиса"></a>
    </div>
  </section>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
</script>

<style scoped>
  .title {
    @apply text-center text-[56px] tracking-normal max-md:text-4xl leading-none font-bold bg-clip-text bg-[url('/img/line.png')] bg-repeat-y text-transparent backface-hidden translate-3d-0 animate-[contact-title_80s_linear_infinite];
  }
</style>
