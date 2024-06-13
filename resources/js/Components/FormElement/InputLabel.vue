<template>
    <label class="font-medium text-sm">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>

<script setup>
defineProps({
  value: String,
});
</script>
