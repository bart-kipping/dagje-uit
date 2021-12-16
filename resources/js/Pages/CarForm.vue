<template>
  <!-- <h1>{{car.model}}</h1> -->
  <form @submit.prevent="form.post('/reservation')">
  <div>
    <label for="reservation_date">Date</label>
    <input type="date" v-model="form.reservation_date" />
    <span v-if="form.errors.reservation_date" >{{ form.errors.reservation_date }}</span>
  </div>


    <label for="first_name">First name:</label>
    <input id="first_name" v-model="form.first_name" />
    <label for="last_name">Last name:</label>
    <input id="last_name" v-model="form.last_name" />
    <label for="email">Email:</label>
    <input id="email" v-model="form.email" />
    <!-- <label for="car">Car</label> -->
    <!-- <input id="car" v-model="form.car_id" /> -->
    <!-- <select :value="car.model" id="car" v-model="form.car" >
      <option :value="car.model">{{ car.model }}</option>
    </select> -->
    <select v-model="form.user_id">
        <option v-for="user in users" :key="user.id" :value="user.id"> {{ user.name }}</option>
    </select>
    <button type="submit">Submit</button>

  </form>
</template>

<script setup>
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
  car: Object,
  users: Array,
});


const form = useForm({
  reservation_date: null,
  first_name: null,
  last_name: null,
  email: null,
  car_id: props.car.id,
  user_id: null,
});

// const form = reactive({
//   first_name: null,
//   last_name: null,
//   email: null,
// })

</script>
