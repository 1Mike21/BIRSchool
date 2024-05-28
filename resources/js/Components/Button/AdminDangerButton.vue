<template>
  <button :type="type"
    class="bg-[#963249] hover:bg-[#b63c58] text-white focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
    <Delete />
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
