<template>
    <Link :href="'/'">
      <BlackApplicationLogo/>
    </Link>
</template>

<script setup>
import BlackApplicationLogo from '@/Components/Logo/BlackApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>
