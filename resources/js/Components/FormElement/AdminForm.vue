<template>
  <form @submit.prevent="$emit('submitted')">
    <div class="grid grid-cols-6 gap-6">
      <slot/>
    </div>
  </form>
</template>

<script setup>

</script>

<style scoped>

</style>
