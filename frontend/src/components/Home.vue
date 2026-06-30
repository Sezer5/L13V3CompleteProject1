<template>
  <div class="d-flex justify-content-between">
    <Spinner :store="productsStore" />
    <Sidebar />
    <ProductList />
  </div>
</template>

<script setup>
import { useProductStore } from "@/stores/useProductStore.js";
import Sidebar from "./layouts/Sidebar.vue";
import { onMounted } from "vue";
import ProductList from "./product/ProductList.vue";
import Spinner from "./layouts/Spinner.vue";

const productsStore = useProductStore();

onMounted(() => productsStore.getAllProducts());
</script>

<style scoped>
</style>