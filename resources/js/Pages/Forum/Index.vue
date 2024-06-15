<script setup>
import ForumLayout from '@/Layouts/ForumLayout.vue';
import Select from '@/Components/Select.vue';
import {Head} from '@inertiajs/vue3'
</script>

<template>

    <Head title="Forum" />

    <ForumLayout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Forum</h2>
        </template>


        <template #side>
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Side Bar</div>
                </div>
            </div>
        </template>

        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-900">
                    <Select>
                        <option value="">All Topics</option>
                        <option :value="topic.slug" v-for="topic in $page.props.topics">{{ topic.name }}</option>
                    </Select>
                </div>
            </div>
        </div>

    </ForumLayout>
</template>
