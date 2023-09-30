<template>
  <div v-for="listing in listings" :key="listing.id" style="margin-bottom: 10px;">
    <div>
      <Link :href="`/listing/${listing.id}`">
        <ListingAddress :listing="listing" />
      </Link>
    </div>
    <div class="actions">
      <Link :href="`/listing/${listing.id}/edit`">Edit</Link>
      <Link :href="`/listing/${listing.id}`" method="delete" as="button">Delete</Link>
    </div>
  </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import ListingAddress from '@/Components/ListingAddress.vue'

defineProps({
  listings: Array,
})
</script>

<style scoped>
.actions {
    display: flex;
    justify-content: space-between;
    width: 100px;
}
</style>

