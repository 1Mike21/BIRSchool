<template>
  <button :type="type"
    class="inline-flex items-center justify-center px-4 py-2 bg-[#963249] hover:bg-[#b63c58] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150">
    <slot />
  </button>
</template>

<script setup>
defineProps({
  type: {
    type: String,
    default: 'button',
  },
});
</script>
