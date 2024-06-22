<template>
  <Splide
    class="cursor-grab"
    :options="options"
    @splide:dragging="isDragging=true"
    >
    <SplideSlide v-for="(slide, index) in slides" :key="index">
      <img class="w-full h-full object-cover object-top rounded-md border dark:border-none" :src="slide" alt="">
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
