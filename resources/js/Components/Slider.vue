<template>
  <Splide
    class="cursor-grab"
    :options="options"
    @splide:dragging="isDragging=true"
    >
    <SplideSlide v-for="(slide, index) in slides" :key="index" class="rounded-lg max-h-[400px]">
      <img class="w-full object-cover object-top" :src="slide" alt="">
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
