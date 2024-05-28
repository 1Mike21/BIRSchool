<template>
  <button :type="type"
    class="bg-[#963249] hover:bg-[#b63c58] text-white max-w-60 focus:ring-4 gap-x-4 focus:ring-gray-300 font-medium rounded-lg inline-flex justify-center items-center px-3 py-2 text-center">
    <Delete />
    <slot />
  </button>
</template>

<script setup>
import Delete from '@/Components/Icons/Delete.vue';

defineProps({
  type: {
    type: String,
    default: 'button',
  },
});
</script>
