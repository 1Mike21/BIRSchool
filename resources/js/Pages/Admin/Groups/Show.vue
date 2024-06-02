<template>
  <Head :title="group.title" />

  <template v-for="(section,index) in groupDescription">
    <!-- About group course -->
    <section class="indent_section_bottom" v-if="index == 0">
      <SectionTitle>{{ section.title }}</SectionTitle>
      <div class="flex flex-wrap-reverse md:flex-nowrap justify-center gap-10">
        <div class="w-[420px] border-[1px] pb-3 mb-8 border-red rounded-[20px]">
          <p :class="['text-red dark:text-white text-lg p-3', {'text-white text-xl bg-red rounded-[20px]': i == 0}]"
            v-for="(text,i) in splitText(0)">
            {{ text }}
          </p>
        </div>
        <img class="max-w-[350px] lg:max-w-[427px] min-w-[250px] h-full rounded-[36px] shadow-lg shadow-gray-400 dark:shadow-none border dark:border-none" :src="section.img" :alt="section.title">
      </div>
    </section>

    <section class="indent_section_bottom" v-if="index == 1">
      <SectionTitle>{{ section.title }}</SectionTitle>
      <div class="flex flex-wrap md:flex-nowrap justify-center text-center gap-10">
        <div class="w-[416px] rounded-[15px]" v-for="card in cardGroup()">
          <img class="w-[290px] max-h-[200px] rounded-[20px] mx-auto border dark:border-none shadow-xl dark:shadow-none" :src="card.img" :alt="card.title">
          <h3 class="text-red text-xl font-semibold p-5">{{ card.title }}</h3>
          <p class="text-black dark:text-white">{{ card.text }}</p>
        </div>
      </div>
    </section>
  </template>

  <!-- Stages of training -->
  <section class="indent_section_bottom">
    <SectionTitle>Этапы обучения</SectionTitle>
    <ul class="steps-learning">
      <li class="steps-learning__item steps-learning__line" v-for="step in learningSteps">
        <span class="steps-learning__item-count text-white hover:shadow-inset">{{ step.number }}</span>
        <span class="text-sm font-semibold mt-3">{{ step.title }}</span>
      </li>
    </ul>
  </section>

  <!-- Certificate -->
  <section>
    <SectionTitle>После успешного окончания обучения</SectionTitle>
    <div class="flex flex-wrap md:flex-nowrap justify-between items-center md:gap-32">
      <div class="w-[600px]">
        <h3 class="text-darkblue dark:text-white text-2xl lg:text-[28px] mb-2">Сертификат</h3>
        <p class="text-black dark:text-white text-base lg:text-lg">Студенты получают сертификат об успешном окончании курса <span class="text-red font-medium">«{{ group.title }} - {{ group.level }}»</span>. Текст документа может быть составлен на английском языке.</p>
      </div>
      <img class="max-md:mt-6 md:max-w-[605px] min-w-[205px] border dark:border-none shadow-xl dark:shadow-none" src="/storage/group_course/sertificate.png" alt="Сертификат">
    </div>
  </section>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import SectionTitle from '@/Components/Section/SectionTitle.vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';

defineOptions({ layout: AdminLayout });

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
  @apply text-darkblue dark:text-white flex py-5 px-2 relative overflow-x-auto scrollbar max-w-7xl mx-auto;
}
.steps-learning__item {
  @apply flex flex-col text-center px-5 min-w-44 max-w-full relative after:content-[""] after:absolute after:left-0 after:top-5 after:bg-red after:w-full after:h-[2px] after:translate-x-1/2 after:-z-10 last:after:w-0;
}
.steps-learning__item-count {
  @apply h-10 w-10 rounded-full flex justify-center items-center mx-auto relative font-semibold after:content-[""] after:h-10 after:w-10 after:bg-red after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full after:-z-10 after:text-white before:content-[""] before:h-3 before:w-5 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-2/3 before:-rotate-45 before:text-white;
}
</style>
