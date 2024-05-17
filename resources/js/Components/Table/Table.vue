<template>
  <div class="relative flex flex-col shadow-lg overflow-x-auto rounded-lg">
    <table class="w-full divide-y divide-gray-200">
      <thead class="bg-darkblue">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase" scope="col" v-for="(head, index) in heads"
            :key="index">
            {{ head }}
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <slot />
      </tbody>
    </table>
    <slot name="pagination"/>
  </div>
</template>

<script setup>
const props = defineProps({
  heads: {
    type: Array,
    required: false
  }
});
</script>
