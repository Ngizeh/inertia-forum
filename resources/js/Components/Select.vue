<script setup>
import InputLabel from '@/Components/InputLabel.vue';
</script>

<template>
    <InputLabel for="topic" value="Topic" class="sr-only" />
    <select id="topic">
        <slot />
    </select>
</template>
