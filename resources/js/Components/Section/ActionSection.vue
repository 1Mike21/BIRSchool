<template>
  <div>
    <div class="mt-7 mb-3">
      <SectionFormTitle>
        <slot name="title" />
      </SectionFormTitle>

      <SectionDescription>
        <slot name="description" />
      </SectionDescription>
    </div>

    <div class="mt-5 md:mt-0 md:col-span-2">
      <div class="px-4 py-3 bg-white dark:bg-opacity-5 rounded-lg shadow-xl border dark:border-none sm:px-6">
        <slot name="content" />
      </div>
    </div>
  </div>
</template>

<script setup>
import SectionFormTitle from '@/Components/Section/SectionFormTitle.vue';
import SectionDescription from '@/Components/Section/SectionDescription.vue';
</script>
