<template>
  <button :type="type"
    class="inline-flex items-center px-3 py-2.5 bg-white dark:bg-violetButton border border-gray-300 rounded-lg font-medium text-base text-center text-black dark:text-white shadow-sm dark:hover:bg-violetHoverButton hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
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
