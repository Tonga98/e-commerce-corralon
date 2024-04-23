<script setup>
import {Head, Link} from '@inertiajs/vue3';

defineProps({
    title: String
});
</script>

<template>
    <div>
        <Head :title="title"/>


    </div>
</template>

<style scoped>

</style>
