<template>
  <div class="card m-2 shadow h-100" style="width: 18rem">
    <img
      :src="IMAGE_PATH + product.thumbnail"
      class="card-img-top"
      style="height: 200px; object-fit: cover"
      alt="Product Image"
    />
    <div class="card-body d-flex flex-column">
      <router-link
        class="text-decoration-none text-dark"
        :to="`/product/${product.slug}`"
      >
        <h5 class="card-title text-decoration-none">{{ product.name }}</h5>
      </router-link>
      <p class="card-text flex-grow-1">
        {{ product.desc?.substring(0, 50) }}...
      </p>

      <div class="d-flex justify-content-between align-items-center mt-2">
        <span class="h5 mb-0">${{ product.price }}</span>
      </div>
    </div>
    <div class="card-footer d-flex justify-content-between bg-light">
      <button class="btn btn-primary btn-sm">Add to Cart</button>
      <button class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-heart"></i>
      </button>
    </div>
  </div>
</template>
<script setup>
import { IMAGE_PATH } from "@/helpers/config";

const data = defineProps({
  product: {
    type: Object,
    required: true,
  },
});
</script>

<style scoped>
</style>