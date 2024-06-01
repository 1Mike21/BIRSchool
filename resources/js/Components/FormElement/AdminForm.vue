<template>
  <form @submit.prevent="$emit('submitted')" class="grid gap-6">
      <slot/>
  </form>
</template>

<script setup>
defineEmits(['submitted']);
</script>
