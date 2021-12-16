<template>
<div>
    <h2>{{car.model}}</h2>
    <Link :href="'/cars/' + car.id">rent</Link>
    <img :src="car.img" :alt="car.mode"/>
</div>

</template>

<script setup>
    import {Link} from '@inertiajs/inertia-vue3'
    
    defineProps({
        car: Object
    })
</script>
