<template>
  <Splide
    class="cursor-grab"
    :options="options"
    @splide:dragging="isDragging=true"
    >
    <SplideSlide v-for="(slide, index) in slides" :key="index" class="max-h-[200px] text-center">
      <img class="w-20 object-cover object-top inline-block" :src="slide" alt="">
      <h3 class="font-semibold text-black dark:text-white mt-3">HTML</h3>
      <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 mt-5">
        <div class="bg-green-600 text-xs font-semibold text-white text-center p-1 leading-none rounded-full" style="width: 45%">45%</div>
      </div>
    </SplideSlide>
  </Splide>
</template>

<script setup>
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import { ref } from 'vue';

const props = defineProps({
  options: {
    type: Object,
    default: () => {}
  },
  slides: {
    type: Array,
    default: () => []
  }
});

const isDragging = ref(false);
</script>
