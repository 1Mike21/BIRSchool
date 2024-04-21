<template>
  <div class="slide">
    <img :src="`../../../../storage/slider_student_portfolio/${slide}.png`" draggable="false" alt="">
  </div>
</template>

<script setup>

const props = defineProps({
  slide: String
});
</script>

<style scoped>
.slide {
  @apply rounded-lg max-h-[400px] snap-start;
}
img {
  @apply max-w-full w-full h-full object-cover object-top pointer-events-none;
}
</style>
