<template>

  <Head :title="group.title" />

  <!-- The running line -->
  <section class="indent_section_bottom">
    <article class="flex whitespace-nowrap overflow-x-hidden">
      <div class="relative text-red text-[40px]">
        <ul class="flex animate-[marquee_40s_linear_infinite]">
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
        </ul>
        <ul class="flex absolute top-0 animate-[marquee2_40s_linear_infinite]">
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
          <li class="m-8">После успешного прохождения курса, Вы можете стать, частью нашей команды.</li>
        </ul>
      </div>
    </article>
  </section>

  <template v-for="(section,index) in groupDescription">
    <!-- About group course -->
    <section class="indent_section_bottom" v-if="index == 0">
      <SectionTitle class="mb-10">{{ section.title }}</SectionTitle>
      <div class="flex justify-center gap-10">
        <div class="w-[420px] border-[1px] pb-3 mb-8 border-red rounded-[20px]">
          <p :class="['text-white text-xl p-3', {'text-lg bg-red rounded-[20px]': i == 0 }]"
            v-for="(text,i) in splitText(0)">
            {{ text }}
          </p>
        </div>
        <img class="w-[427px] h-[427px] rounded-[20px]" :src="section.img" alt="Картинка">
      </div>
    </section>

    <section class="indent_section_bottom" v-if="index == 1">
      <SectionTitle class="mb-10">{{ section.title }}</SectionTitle>
      <div class="flex justify-center text-center gap-10">
        <div class="w-[416px] rounded-[15px]" v-for="card in cardGroup()">
          <img class="w-[290px] h-[200px] inline" :src="card.img" alt="Картинка">
          <h3 class="text-red text-xl p-5">{{ card.title }}</h3>
          <p class="text-white">{{ card.text }}</p>
        </div>
      </div>
    </section>
  </template>

  <!-- Stages of training -->
  <section class="indent_section_bottom">
    <SectionTitle class="mb-10">Этапы обучения</SectionTitle>
    <ul class="steps-learning">
      <li class="steps-learning__item steps-learning__line" v-for="step in learningSteps">
        <span class="steps-learning__item-count">{{ step.number }}</span>
        <span class="text-sm font-semibold mt-3">{{ step.title }}</span>
      </li>
    </ul>
  </section>

  <!-- Certificate -->
  <section>
    <SectionTitle class="mb-10">После успешного окончания обучения</SectionTitle>
    <div class="flex justify-between items-center">
      <div class="w-[600px]">
        <h3 class="text-white text-[28px]">Сертификат</h3>
        <p class="text-white text-base">Студенты получают сертификат об успешном окончании курса <span class="text-red">«{{ group.title }} - {{ group.level }}»</span>. Текст документа может быть составлен на английском языке.</p>
      </div>
      <img class="w-[605px]" src="/storage/group_course/sertificate.png" alt="Сертификат">
    </div>
  </section>
</template>

<script setup>
import SectionTitle from '@/Components/SectionTitle.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
  learningSteps: Array,
  groupDescription: Array,
  group: Object
});

const splitText = (index) => {
  return props.groupDescription[index].text.split('\n');
}

const cardGroup = () => {
  return props.groupDescription.slice(2);
}
</script>

<style scoped>
.steps-learning {
  @apply text-white flex py-5 px-2 relative overflow-x-auto scrollbar max-w-7xl mx-auto;
}
.steps-learning__item {
  @apply flex flex-col text-center px-5 min-w-44 max-w-full relative after:content-[""] after:absolute after:left-0 after:top-5 after:bg-red after:w-full after:h-[2px] after:translate-x-1/2 after:-z-10 last:after:w-0;
}
.steps-learning__item-count {
  @apply h-10 w-10 rounded-full flex justify-center items-center mx-auto relative font-semibold after:content-[""] after:h-10 after:w-10 after:bg-red after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full after:-z-10 after:text-white before:content-[""] before:h-3 before:w-5 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-2/3 before:-rotate-45 before:text-white;
}
</style>
