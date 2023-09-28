<template>
  <Link href="/listing">Home</Link>&nbsp;
  <Link href="/listing/create">Create</Link>
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <slot>Loading...</slot>
</template>

<script setup>
import {Link, usePage} from '@inertiajs/vue3'
import {computed} from 'vue'

const page = usePage()

const flashSuccess = computed(() => page.props.flash.success)

</script>

<style scoped>
.success {
    background-color: green;
    color: white;
    width: fit-content;
    padding: 5px;
    margin: 4px;
    border-radius: 4px;
}
</style>
