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
      <img class="w-[427px] h-[427px]" src="img/group_course/1.png" alt="Картинка">
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
    <SectionTitle class="mb-20">Для кого курс?</SectionTitle>
    <div class="flex justify-center text-center gap-10">
      <div class="w-[416px]">
        <img class="w-[290px] h-[200px] inline" src="img/group_course/1f.png" alt="Картинка">
        <h3 class="text-red text-xl p-5">Для новичков</h3>
        <p class="text-white">Кто хочет обучиться программированию с нуля. Программа курса рассчитана для начинающих фронтенд-разработчиков
           и построена так, что вы сможете ее освоить даже без технического бэкграунда.
        </p>
      </div>
      <div class="w-[416px]">
        <img class="w-[290px] h-[200px] inline" src="img/group_course/2f.png" alt="Картинка">
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
    <ul class="text-white flex justify-center items-center">
      <li class="flex flex-col text-center w-44">
        <span class="h-10 w-10 bg-red rounded-[50%] flex justify-center items-center m-auto font-semibold">1</span>
        <span class="text-sm font-semibold">Изучаем HTML</span>
      </li>
      <li class="flex flex-col text-center w-44">
        <span class="h-10 w-10 bg-red rounded-[50%] flex justify-center items-center m-auto font-semibold">2</span>
        <span class="text-sm font-semibold">Изучаем CSS</span>
      </li>
      <li class="flex flex-col text-center w-44">
        <span class="h-10 w-10 bg-red rounded-[50%] flex justify-center items-center m-auto font-semibold">3</span>
        <span class="text-sm font-semibold">Создаем мини-сайт используя HTML и CSS</span>
      </li>
      <li class="flex flex-col text-center w-44">
        <span class="h-10 w-10 bg-red rounded-[50%] flex justify-center items-center m-auto font-semibold">4</span>
        <span class="text-sm font-semibold">Верстка лендинга по макету из Figma</span>
      </li>
      <li class="flex flex-col text-center w-44">
        <span class="h-10 w-10 bg-red rounded-[50%] flex justify-center items-center m-auto font-semibold">5</span>
        <span class="text-sm font-semibold"> Изучаем JavaScript</span>
      </li>
      <li class="flex flex-col text-center w-44">
        <span class="h-10 w-10 bg-red rounded-[50%] flex justify-center items-center m-auto font-semibold">6</span>
        <span class="text-sm font-semibold">Создаем сайт используя HTML, CSS и JS</span>
      </li>
      <li class="flex flex-col text-center w-44">
        <span class="h-10 w-10 bg-red rounded-[50%] flex justify-center items-center m-auto font-semibold">7</span>
        <span class="text-sm font-semibold">Изучаем React. Делаем финальный проект</span>
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
      <img class="w-[605px]" src="img/group_course/sertificate.png" alt="Сертификат">
    </div>
  </section>
</template>

<script setup>
import SectionTitle from '@/Components/SectionTitle.vue';
import { Head } from '@inertiajs/vue3';
</script>

<style scoped>

</style>
