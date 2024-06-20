<template>
  <div v-if="meta.links.length > 3" class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
      <div>
        <p class="text-sm text-gray-700">
          <span class="font-medium">{{ meta.from }}</span>
          -
          <span class="font-medium">{{ meta.to }}</span>
          из
          <span class="font-medium">{{ meta.total }}</span>
          записей
        </p>
      </div>
      <div>
        <nav class="isolate inline-flex gap-x-3 -space-x-px rounded-md shadow-sm" aria-label="Pagination">
          <Link
            v-for="(link, index) in meta.links"
            :href="link.url"
            :key="index"
            :disabled="link.url === null"
            :class="{ 'z-10 bg-indigo-600 hover:bg-violetHoverButton text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600': link.active, 'text-gray-200 bg-gray-200': link.url === null }"
            v-html="link.label"
            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 rounded-md"
          />
        </nav>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  meta: {
    type: Array,
  }
});
</script>

