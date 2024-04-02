<template>
  <div class="carousel">
    <slot :currentSlide="currentSlide" />

    <!-- Navigation -->
    <div class="navigate">
      <div class="toggle-page left">

      </div>
      <div class="toggle-page right">

      </div>
    </div>
  </div>
</template>

<script>
import {ref} from 'vue';
export default {
  setup() {
    const currentSlide = ref(1);

    return { currentSlide };
  },
};
</script>

<style scoped>

</style>
