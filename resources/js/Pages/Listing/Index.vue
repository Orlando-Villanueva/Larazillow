<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="`/listing/${listing.id}`">
          <ListingAddress :listing="listing" />
        </Link>
      </div>
      <div class="actions">
        <Link :href="`/listing/${listing.id}/edit`">Edit</Link>
        <Link :href="`/listing/${listing.id}`" method="delete" as="button">Delete</Link>
      </div>
    </Box>
  </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import ListingAddress from '@/Components/ListingAddress.vue'
import Box from '@/Components/UI/Box.vue'

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

