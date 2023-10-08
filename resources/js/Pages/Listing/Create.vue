<template>
  <form @submit.prevent="create">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-3 sm:col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Beds</label>
        <input v-model.number="form.beds" type="text" class="block w-full p-2 rounded-md border shadow-sm border-gray-300 text-gray-500" />
        <div
          v-if="form.errors.beds" class="text-red-500"
          v-text="form.errors.beds"
        />
      </div>

      <div class="col-span-3 sm:col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Baths</label>
        <input v-model.number="form.baths" type="text" class="block w-full p-2 rounded-md border shadow-sm border-gray-300 text-gray-500" />
        <div
          v-if="form.errors.baths" class="text-red-500"
          v-text="form.errors.baths"
        />
      </div>

      <div class="col-span-6 sm:col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Area</label>
        <input v-model.number="form.area" type="text" class="block w-full p-2 rounded-md border shadow-sm border-gray-300 text-gray-500" />
        <div
          v-if="form.errors.area" class="text-red-500"
          v-text="form.errors.area"
        />
      </div>

      <div class="col-span-6 sm:col-span-4">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">City</label>
        <input v-model="form.city" type="text" class="block w-full p-2 rounded-md border shadow-sm border-gray-300 text-gray-500" />
        <div
          v-if="form.errors.city" class="text-red-500"
          v-text="form.errors.city"
        />
      </div>

      <div class="col-span-6 sm:col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Post Code</label>
        <input v-model="form.code" type="text" class="block w-full p-2 rounded-md border shadow-sm border-gray-300 text-gray-500" />
        <div
          v-if="form.errors.code" class="text-red-500"
          v-text="form.errors.code"
        />
      </div>

      <div class="col-span-6 sm:col-span-4">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Street</label>
        <input v-model="form.street" type="text" class="block w-full p-2 rounded-md border shadow-sm border-gray-300 text-gray-500" />
        <div
          v-if="form.errors.street" class="text-red-500"
          v-text="form.errors.street"
        />
      </div>

      <div class="col-span-6 sm:col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Street Number</label>
        <input v-model.number="form.street_number" type="text" class="block w-full p-2 rounded-md border shadow-sm border-gray-300 text-gray-500" />
        <div
          v-if="form.errors.street_number" class="text-red-500"
          v-text="form.errors.street_number"
        />
      </div>

      <div class="col-span-6 sm:col-span-6">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Price</label>
        <input v-model.number="form.price" type="text" class="block w-full p-2 rounded-md border shadow-sm border-gray-300 text-gray-500" />
        <div
          v-if="form.errors.price" class="text-red-500"
          v-text="form.errors.price"
        />
      </div>

      <div class="col-span-6 sm:col-span-6">
        <button type="submit" class="bg-indigo-600 text-white p-2 border-0 rounded-md hover:bg-indigo-500 font-medium">Create</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import {Link, useForm} from '@inertiajs/vue3'

const form = useForm({
  beds: 0,
  baths: 0,
  area: 0,
  city: null,
  street: null,
  street_number: null,
  code: null,
  price: 0,
})

const create = () => form.post('/listing')


</script>
<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px
}

.text-red-500 {
    color: red;
    font-size: small;
}

body {
    font-family: sans-serif;
}
</style>
