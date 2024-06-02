<template>
  <div class="mt-2 mb-3">
    <SectionFormTitle>
      <slot name="title" />
    </SectionFormTitle>

    <SectionDescription>
      <slot name="description" />
    </SectionDescription>
  </div>

  <form @submit.prevent="$emit('submitted')">
    <div class="px-4 py-5 bg-white dark:bg-opacity-5 sm:p-6 shadow-xl border dark:border-none"
      :class="hasActions ? 'rounded-tl-lg rounded-tr-lg' : 'rounded-lg'">
      <div class="grid gap-6">
        <slot name="form" />
      </div>
    </div>

    <div v-if="hasActions"
      class="flex items-center justify-end px-4 py-3 bg-gray-100 dark:bg-white dark:bg-opacity-10 text-end sm:px-6 shadow-xl border dark:border-none rounded-bl-lg rounded-br-lg">
      <slot name="actions" />
    </div>
  </form>
</template>

<script setup>
import { computed, useSlots } from 'vue';
import SectionFormTitle from '@/Components/Section/SectionFormTitle.vue';
import SectionDescription from '@/Components/Section/SectionDescription.vue';

defineEmits(['submitted']);

const hasActions = computed(() => !!useSlots().actions);
</script>
