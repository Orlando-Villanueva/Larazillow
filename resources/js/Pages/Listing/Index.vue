<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="`/listing/${listing.id}`">
          <Price :price="listing.price" class="text-2xl font-bold" />
          <ListingInfo :listing="listing" class="text-lg" />
          <ListingAddress :listing="listing" class="text-gray-500" />
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
import ListingInfo from '@/Components/ListingInfo.vue'
import Price from '@/Components/Price.vue'

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

