<template>
    <label class="font-medium text-sm sm:text-base">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>

<script setup>
defineProps({
  value: String,
});
</script>
