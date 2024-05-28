<template>
  <li :class="classes">
    <Link :href="href">
      <slot />
    </Link>
  </li>
</template>

<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-1 pt-1 h-10 border-b-2 border-red dark:border-white leading-5 text-base xl:text-lg text-black dark:text-white focus:outline-none focus:border-red focus:text-red transition duration-150 ease-in-out'
        : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent leading-5 text-base xl:text-lg text-black dark:text-white hover:text-red dark:hover:text-red focus:outline-none transition duration-150 ease-in-out';
});
</script>
