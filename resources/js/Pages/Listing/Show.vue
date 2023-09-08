<template>
  <ListingAddress :listing="listing" />
  <div>
    Go back to <Link :href="`/listing`">listings</Link>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ListingAddress from '@/Components/ListingAddress.vue'
defineProps({
  listing: Object,
})
</script>




