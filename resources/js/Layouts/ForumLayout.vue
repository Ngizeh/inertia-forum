<script setup>
import AuthenticatedLayout from './AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3'
</script>

<template>

    <Head title="Forum" />
    <AuthenticatedLayout>
        <div
            class="dark:text-white py-12 gap-6 sm:px-5 lg:px-8 max-w-7xl mx-auto space-y-6 md:space-y-0 md:grid grid-cols-7">
            <div class="col-span-2">
                <slot name="side" />
            </div>
            <div class="col-span-5">
                <slot />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
