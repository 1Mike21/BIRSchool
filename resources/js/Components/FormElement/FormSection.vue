<template>
  <div class="mt-7 mb-3">
    <SectionFormTitle>
      <slot name="title" />
    </SectionFormTitle>

    <SectionDescription>
      <slot name="description" />
    </SectionDescription>
  </div>

  <form @submit.prevent="$emit('submitted')">
    <div class="px-4 py-5 bg-white sm:p-6 shadow"
      :class="hasActions ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md'">
      <div class="grid gap-6">
        <slot name="form" />
      </div>
    </div>

    <div v-if="hasActions"
      class="flex items-center justify-end px-4 py-3 bg-gray-50 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
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
