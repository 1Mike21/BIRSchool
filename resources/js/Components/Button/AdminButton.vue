<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
  <button :type="type" class="bg-violetButton hover:bg-violetHoverButton focus:ring-4 focus:ring-gray-300 rounded-lg text-white font-medium text-sm md:text-base inline-flex items-center text-center">
    <slot/>
  </button>
</template>
