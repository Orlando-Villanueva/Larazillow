<template>
  <h1>Index</h1>
  <div>The message is :{{ message }}</div>
</template>

<script setup>
defineProps({
  message: String,
})
</script>

<!-- use a different layout then the default -->
<script>
</script>
