
<template>
  <div>
    <span class="">
      {{ listing.beds }} beds <span class="text-gray-400">|</span>
      {{ listing.baths }} baths <span class="text-gray-400">|</span>
      {{ listing.area }} m<sup>2</sup>

    </span>
  </div>
</template>
<script setup>
defineProps({
  listing: Object,
})
</script>

<style scoped>

</style>
