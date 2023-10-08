<template>
  <div style="margin-bottom: 10px;">
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
      <div class="container mx-auto">
        <nav class="p-4 flex items-center justify-between">
          <div class="text-lg font-medium hidden sm:block">
            <Link href="/listing">Listings</Link>
          </div>
          <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center">
            <Link href="/listing">LaraZillow</Link>
          </div>
          <div>
            <Link
              href="/listing/create"
              class="bg-indigo-600 text-white p-2 border-0 rounded-md hover:bg-indigo-500 font-medium"
            >
              + New Listing
            </Link>
          </div>
        </nav>
      </div>
    </header>

    <main>
      <div class="container mx-auto p-4">
        <div
          v-if="flashSuccess"
          class="mb-4 border rounded-md shadow-sm border-green-300 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2"
          v-text="flashSuccess"
        />
        <slot />
      </div>
    </main>
  </div>
</template>

<script setup>
import {Link, usePage} from '@inertiajs/vue3'
import {computed} from 'vue'

const page = usePage()

const flashSuccess = computed(() => page.props.flash.success)

</script>
