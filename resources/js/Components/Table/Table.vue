<template>
  <div class="shadow overflow-x-auto rounded-lg">
    <table class="table-fixed min-w-full divide-y divide-gray-200">
      <thead class="bg-darkblue">
        <tr>
          <th class="p-4 text-left text-xs font-medium text-white uppercase" scope="col" v-for="(head, index) in heads"
            :key="index">
            {{ head }}
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <slot />
      </tbody>
    </table>
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

<style scoped></style>
