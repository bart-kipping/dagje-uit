<template>
    <Link v-for="link in links" :key="link.url">{{ link.label }}</Link>
</template>
<script setup> 
    // Composition API
    import { Link } from '@inertiajs/inertia-vue3';

    const props = defineProps({
        links: Object
    });


</script>