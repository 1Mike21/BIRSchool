<template>
    <div v-show="message">
        <p class="text-sm text-red">
            {{ message }}
        </p>
    </div>
</template>

<script setup>
defineProps({
  message: String,
});
</script>
