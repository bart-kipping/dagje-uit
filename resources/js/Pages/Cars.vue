<template>

    <div>
        <h1>Car rent</h1>
        <div v-if="$page.props.flash.message" class="alert">
        {{ $page.props.flash.message }}
      </div>
        <CarCard 
            v-for="car in cars.data" 
            :key="car.id"
            :car="car" 
        /> 
    </div>

</template>

<script setup>
    import CarCard from '../Components/CarCard'
    import { Link } from '@inertiajs/inertia-vue3';

    defineProps({
        cars: Object
    })
</script>