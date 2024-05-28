<template>
  <button v-if="dropdown"
    class="w-full group relative flex items-center gap-x-4 hover:bg-violetHoverButton focus:bg-violetHoverButton rounded-md font-medium text-white duration-300 ease-in-out">
    <slot />
  </button>
  <Link v-else :href="href" :class="classes">
  <slot />
  </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
  href: String,
  active: Boolean,
  dropdown: Boolean
});

const classes = computed(() => {
  return props.active
    ? 'group relative flex items-center bg-violetButton gap-x-4 hover:bg-violetHoverButton focus:bg-violetHoverButton rounded-md font-medium text-white duration-300 ease-in-out'
    : 'group relative flex items-center gap-x-4 hover:bg-violetHoverButton focus:bg-violetHoverButton rounded-md font-medium text-white duration-300 ease-in-out';
});
</script>

<style scoped>

</style>
