<template>
  <button v-if="as == 'button'"
    :class="['bg-violetButton min-w-16 hover:bg-violetHoverButton focus:ring-4 focus:ring-gray-300 rounded-lg text-white font-medium text-sm mr-3 justify-center px-3 py-2 sm:w-auto md:text-base text-center', { 'inline-flex items-center': hasIcon }, { 'opacity-75': submitted }]"
    :type="type">
    <slot />
  </button>

  <Link v-else-if="as == 'link'" :href="href"
    :class="['bg-violetButton min-w-16 hover:bg-violetHoverButton focus:ring-4 focus:ring-gray-300 rounded-lg text-white font-medium text-sm mr-3 justify-center px-3 py-2 sm:w-auto md:text-base text-center', { 'inline-flex items-center': hasIcon }]">
  <slot />
  </Link>

  <Link v-else :href="href"
    class="text-white focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
  <slot />
  </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
  type: {
    type: String,
    default: 'button',
  },
  submitted: {
    type: Boolean,
    default: false
  },
  hasIcon: {
    type: Boolean,
    default: false,
  },
  as: String,
  href: {
    type: String,
  }
});
</script>
