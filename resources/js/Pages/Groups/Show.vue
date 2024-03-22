<template>
  <Head title="Описание группы курсов"/>

  <!-- About group course -->
  <section class="indent_section_bottom">
    <SectionTitle class="mb-10">Кто такой Frontend-разработчик?</SectionTitle>
    <div class="flex justify-center gap-10">
      <div class="w-[420px] border-[1px] pb-3 mb-8 border-red rounded-[20px]">
        <p class="text-white text-xl bg-red rounded-[20px] p-3">Frontend-разработчик программирует клиентскую сторону сайта — то, с чем соприкасается пользователь.
          Для этого нужно хорошо знать язык разметки страницы HTML, стилизации CSS и программировать на JavaScript.
        </p>
        <p class="text-white text-lg p-3">JavaScript позволяет разрабатывать игры, сайты и сервисы с интересными эффектами.
          С его помощью создают яркие, запоминающиеся проекты, на которые пользователь захочет вернуться.
        </p>
      </div>
      <img class="w-[427px] h-[427px] rounded-[20px]" src="/img/group_course/1.png" alt="Картинка">
    </div>
  </section>
  <!-- The running line -->
  <section class="indent_section_bottom">
    <article class="flex whitespace-nowrap overflow-x-hidden">
      <div class="relative text-red text-[40px]">
        <ul class="flex animate-marquee">
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
        </ul>
        <ul class="flex absolute top-0 animate-marquee2">
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
        </ul>
      </div>
    </article>
  </section>
  <section class="indent_section_bottom">
    <SectionTitle class="mb-10">Для кого курс?</SectionTitle>
    <div class="flex justify-center text-center gap-10">
      <div class="w-[416px] rounded-[15px]">
        <img class="w-[290px] h-[200px] inline" src="/img/group_course/1f.png" alt="Картинка">
        <h3 class="text-red text-xl p-5">Для новичков</h3>
        <p class="text-white">Кто хочет обучиться программированию с нуля. Программа курса рассчитана для начинающих фронтенд-разработчиков
           и построена так, что вы сможете ее освоить даже без технического бэкграунда.
        </p>
      </div>
      <div class="w-[416px] rounded-[15px]">
        <img class="w-[290px] h-[200px] inline" src="/img/group_course/2f.png" alt="Картинка">
        <h3 class="text-red text-xl p-5">Для фрилансеров</h3>
        <p class="text-white">
          Кто готов прокачать свои скилы — освоить JavaScript и React, чтобы браться за более комплексные задачи.
          Вы сможете вырасти как специалист и пополнить своё резюме новыми кейсами.
        </p>
      </div>
    </div>
  </section>
  <!-- Stages of training -->
  <section class="indent_section_bottom">
    <SectionTitle class="mb-10">Этапы обучения</SectionTitle>
    <ul class="steps-learning">
      <li class="steps-learning__item steps-learning__line">
        <span class="steps-learning__item-count">1</span>
        <span class="text-sm font-semibold mt-3">Изучаем HTML</span>
      </li>
      <li class="steps-learning__item steps-learning__line">
        <span class="steps-learning__item-count">2</span>
        <span class="text-sm font-semibold mt-3">Изучаем CSS</span>
      </li>
      <li class="steps-learning__item steps-learning__line">
        <span class="steps-learning__item-count">3</span>
        <span class="text-sm font-semibold mt-3">Создаем мини-сайт используя HTML и CSS</span>
      </li>
      <li class="steps-learning__item steps-learning__line">
        <span class="steps-learning__item-count">4</span>
        <span class="text-sm font-semibold mt-3">Верстка лендинга по макету из Figma</span>
      </li>
      <li class="steps-learning__item steps-learning__line">
        <span class="steps-learning__item-count">5</span>
        <span class="text-sm font-semibold mt-3"> Изучаем JavaScript</span>
      </li>
      <li class="steps-learning__item steps-learning__line">
        <span class="steps-learning__item-count">6</span>
        <span class="text-sm font-semibold mt-3">Создаем сайт используя HTML, CSS и JS</span>
      </li>
      <li class="steps-learning__item steps-learning__line">
        <span class="steps-learning__item-count">7</span>
        <span class="text-sm font-semibold mt-3">Изучаем React. Делаем финальный проект</span>
      </li>
    </ul>
  </section>
  <!-- Certificate -->
  <section>
    <SectionTitle class="mb-10">После успешного окончания обучения</SectionTitle>
    <div class="flex justify-between items-center">
      <div class="w-[600px]">
        <h3 class="text-white text-[28px]">Сертификат</h3>
        <p class="text-white text-base">Студенты получают сертификат об успешном окончании курса <span class="text-red">«Frontend-разработки»</span>. Текст документа может быть составлен на английском языке.</p>
      </div>
      <img class="w-[605px]" src="/img/group_course/sertificate.png" alt="Сертификат">
    </div>
  </section>
</template>

<script setup>
import SectionTitle from '@/Components/SectionTitle.vue';
import { Head } from '@inertiajs/vue3';
</script>

<style scoped>
.steps-learning {
  @apply text-white flex py-5 px-2 relative overflow-x-auto max-w-7xl mx-auto;
}
.steps-learning__item {
  @apply flex flex-col text-center px-5 min-w-44 max-w-full relative after:content-[""] after:absolute after:left-0 after:top-5 after:bg-red after:w-full after:h-[2px] after:translate-x-1/2 after:-z-10 last:after:w-0;
}
.steps-learning__item-count {
  @apply h-10 w-10 rounded-full flex justify-center items-center mx-auto z-10 relative font-semibold after:content-[""] after:h-10 after:w-10 after:bg-red after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full after:-z-10 after:text-white before:content-[""] before:h-3 before:w-5 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-2/3 before:-rotate-45 before:text-white;
}
</style>
