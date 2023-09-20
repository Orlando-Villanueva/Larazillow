<template>
  <Link href="/listing">Home</Link>&nbsp;
  <Link href="/listing/create">Create</Link>
  <slot>Loading...</slot>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'

</script>
