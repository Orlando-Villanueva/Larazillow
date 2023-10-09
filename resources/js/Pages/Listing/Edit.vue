<template>
  <form class="lg:mx-32 xl:mx-64" @submit.prevent="update">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-3 sm:col-span-2">
        <label class="label">Beds</label>
        <input v-model.number="form.beds" type="text" class="input" />
        <div
          v-if="form.errors.beds" class="text-red-500"
          v-text="form.errors.beds"
        />
      </div>

      <div class="col-span-3 sm:col-span-2">
        <label class="label">Baths</label>
        <input v-model.number="form.baths" type="text" class="input" />
        <div
          v-if="form.errors.baths" class="text-red-500"
          v-text="form.errors.baths"
        />
      </div>

      <div class="col-span-6 sm:col-span-2">
        <label class="label&quot;">Area</label>
        <input v-model.number="form.area" type="text" class="input" />
        <div
          v-if="form.errors.area" class="text-red-500"
          v-text="form.errors.area"
        />
      </div>

      <div class="col-span-6 sm:col-span-4">
        <label class="label">City</label>
        <input v-model="form.city" type="text" class="input" />
        <div
          v-if="form.errors.city" class="text-red-500"
          v-text="form.errors.city"
        />
      </div>

      <div class="col-span-6 sm:col-span-2">
        <label class="label">Post Code</label>
        <input v-model="form.code" type="text" class="input" />
        <div
          v-if="form.errors.code" class="text-red-500"
          v-text="form.errors.code"
        />
      </div>

      <div class="col-span-6 sm:col-span-4">
        <label class="label">Street</label>
        <input v-model="form.street" type="text" class="input" />
        <div
          v-if="form.errors.street" class="text-red-500"
          v-text="form.errors.street"
        />
      </div>

      <div class="col-span-6 sm:col-span-2">
        <label class="label&quot;">Street Number</label>
        <input v-model.number="form.street_number" type="text" class="input" />
        <div
          v-if="form.errors.street_number" class="text-red-500"
          v-text="form.errors.street_number"
        />
      </div>

      <div class="col-span-6 sm:col-span-6">
        <label class="label">Price</label>
        <input v-model.number="form.price" type="text" class="input" />
        <div
          v-if="form.errors.price" class="text-red-500"
          v-text="form.errors.price"
        />
      </div>

      <div class="col-span-6 sm:col-span-6">
        <button type="submit" class="btn-primary">Update</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import {Link, useForm} from '@inertiajs/vue3'

const props = defineProps({
  listing: Object,
})

const form = useForm({
  beds: props.listing.beds,
  baths: props.listing.baths,
  area: props.listing.area,
  city: props.listing.city,
  code: props.listing.code,
  street: props.listing.street,
  street_number: props.listing.street_number,
  price: props.listing.price,
})

const update = () => form.put(`/listing/${props.listing.id}`)


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
