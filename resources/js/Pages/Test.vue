<template>
<div>
    <Paginator :links="{A: 'b'}"></Paginator>   
    <Link href="/cars">Test</Link>
</div>
</template>
<script setup>
    import Paginator from '../Components/Paginator'
    import { Link } from '@inertiajs/inertia-vue3';
</script>