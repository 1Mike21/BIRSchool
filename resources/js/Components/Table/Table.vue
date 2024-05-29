<template>
  <div class="relative flex flex-col shadow-lg overflow-x-auto rounded-lg">
    <table class="w-full divide-y divide-gray-200">
      <thead class="bg-darkblue dark:bg-red">
        <slot name="header" />
      </thead>
      <tbody class="bg-white hover:*:bg-gray-100 divide-y divide-gray-200">
        <slot />
      </tbody>
    </table>
    <slot name="pagination" />
  </div>
</template>

<script setup>
const props = defineProps({
  heads: {
    type: Array,
    required: false
  }
});
</script>
