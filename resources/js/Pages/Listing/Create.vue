<template>
  <form @submit.prevent="create">
    <div>
      <div>
        <label>Beds</label>
        <input v-model.number="form.beds" type="text" />
        <div
          v-if="form.errors.beds" class="text-red-500"
          v-text="form.errors.beds"
        />
        <div>
          <label>Baths</label>
          <input v-model.number="form.baths" type="text" />
          <div
            v-if="form.errors.baths" class="text-red-500"
            v-text="form.errors.baths"
          />
        </div>

        <div>
          <label>Area</label>
          <input v-model.number="form.area" type="text" />
          <div
            v-if="form.errors.area" class="text-red-500"
            v-text="form.errors.area"
          />
        </div>

        <div>
          <label>City</label>
          <input v-model="form.city" type="text" />
          <div
            v-if="form.errors.city" class="text-red-500"
            v-text="form.errors.city"
          />
        </div>

        <div>
          <label>Post Code</label>
          <input v-model="form.code" type="text" />
          <div
            v-if="form.errors.code" class="text-red-500"
            v-text="form.errors.code"
          />
        </div>

        <div>
          <label>Street</label>
          <input v-model="form.street" type="text" />
          <div
            v-if="form.errors.street" class="text-red-500"
            v-text="form.errors.street"
          />
        </div>

        <div>
          <label>Street Number</label>
          <input v-model.number="form.street_number" type="text" />
          <div
            v-if="form.errors.street_number" class="text-red-500"
            v-text="form.errors.street_number"
          />
        </div>

        <div>
          <label>Price</label>
          <input v-model.number="form.price" type="text" />
          <div
            v-if="form.errors.price" class="text-red-500"
            v-text="form.errors.price"
          />
        </div>

        <div>
          <button type="submit">Create</button>
        </div>
      </div>
    </div>
  </form>
</template>

<script setup>
import {useForm} from '@inertiajs/vue3'

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
