<template>
  <div class="flex flex-col-reverse sm:grid sm:grid-cols-12 gap-4">
    <Box class="sm:col-span-7 flex items-center">
      <div class="w-full text-center font-medium text-gray-500">No images</div>
    </Box>
    <div class="sm:col-span-5 space-y-4">
      <Box>
        <template #header>
          Basic info
        </template>
        <Price :price="listing.price" class="text-2xl font-bold" />
        <ListingInfo :listing="listing" class="text-lg" />
        <ListingAddress :listing="listing" class="text-gray-500" />
      </Box>
      <Box>
        <template #header>
          Offer
        </template>
        Make an offer
      </Box>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ListingAddress from '@/Components/ListingAddress.vue'
import Price from '@/Components/Price.vue'
import ListingInfo from '@/Components/ListingInfo.vue'
import Box from '@/Components/UI/Box.vue'
defineProps({
  listing: Object,
})
</script>




