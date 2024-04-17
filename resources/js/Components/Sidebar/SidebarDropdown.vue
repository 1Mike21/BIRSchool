<template>
  <ul class="mt-4 mb-5.5 flex flex-col gap-2.5 pl-6">
    <template v-for="(childItem) in items" :key="index">
      <li>
        <Link
          :active="route().current(item.route)"
          :href="route(item.route) "
          class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
        >
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

<style scoped>
.active {
  @apply text-white;
}
</style>
