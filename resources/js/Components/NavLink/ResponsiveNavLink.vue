<template>
    <div>
        <li :class="classes">
          <button v-if="as == 'button'" :class="classes" class="w-full text-start">
              <slot />
          </button>

          <Link v-else :href="href">
            <slot />
          </Link>
        </li>
    </div>
</template>

<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  active: Boolean,
  href: String,
  as: String,
});

const classes = computed(() => {
  return props.active
    ? 'block w-full ps-3 px-3 py-2 mb-1 rounded-md text-start text-base font-medium text-black dark:text-white bg-gray-300 dark:bg-indigo-950 transition duration-150 ease-in-out'
    : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-black dark:text-white hover:bg-gray-200 dark:hover:bg-indigo-900 transition duration-150 ease-in-out';
});
</script>
