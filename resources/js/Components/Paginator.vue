<template>
    <div v-for="car in cars" :key="car.id">
      <Link :href="`/cars/${car.model}`">
        {{ car.model }}
      </Link>
    </div>
    <!-- <Link v-for="car in cars" :key="car.model">{{ car.model }}</Link> -->
</template>
<script setup> 
    // Composition API
    import { Link } from '@inertiajs/inertia-vue3';

    const props = defineProps({
        cars: Array
    });

    props:{
        cars
    }
</script>