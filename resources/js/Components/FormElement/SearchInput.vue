<template>
   <TextInput
    ref="searchInput"
    type="search"
    class="w-full sm:w-72 md:w-[400px] lg:w-[610px] xl:w-[830px] 2xl:w-[1000px] h-10 !rounded-28 ps-5 text-sm md:text-base lg:text-lg shadow-inner focus:border-red focus:ring-red"
    placeholder="Поиск..."
   />
</template>

<script setup>
import { ref } from 'vue';
import TextInput from '@/Components/FormElement/TextInput.vue';

const searchInput = ref(null);
</script>
