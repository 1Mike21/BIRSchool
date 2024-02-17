<template>
  <Head title="Личный кабинет"/>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <Welcome />
          </div>
      </div>
  </div>
</template>

<script setup>
  import Welcome from '@/Components/Welcome.vue';
  import { Head } from '@inertiajs/vue3';

</script>

<style scoped>

</style>
