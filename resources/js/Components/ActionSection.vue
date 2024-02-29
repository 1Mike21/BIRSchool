<script setup>
import SectionDescription from '@/Components/SectionDescription.vue';
import SectionTitle from '@/Components/SectionTitle.vue';
</script>

<template>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <SectionTitle>
          <slot/>
        </SectionTitle>

        <SectionDescription>
          <slot/>
        </SectionDescription>

        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                <slot name="content" />
            </div>
        </div>
    </div>
</template>
