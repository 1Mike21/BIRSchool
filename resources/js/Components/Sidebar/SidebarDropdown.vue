<template>
  <ul class="mt-2 mb-3 flex flex-col gap-y-4 pl-4">
    <template v-for="(childItem, index) in items" :key="index">
      <li>
        <Link :active="route().current(childItem.route)" :href="route(childItem.route)"
          class="group relative flex items-center rounded-md px-4 hover:bg-violetButton focus:bg-violetButton font-medium text-sm text-white duration-300 ease-in-out">
        {{ childItem.label }}
        </Link>
      </li>
    </template>
  </ul>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  items: {
    type: Array,
    default: () => []
  }
});
const items = ref(props.items);
</script>
