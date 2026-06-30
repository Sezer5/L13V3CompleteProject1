<template>
  <div>
    <Sidebar />
    <ProductListItem />
  </div>
</template>

<script setup>
import { useProductStore } from "@/stores/useProductStore.js";
import Sidebar from "./layouts/Sidebar.vue";
import { onMounted } from "vue";
import ProductList from "./product/ProductList.vue";
import ProductListItem from "./product/ProductListItem.vue";

const productsStore = useProductStore();

onMounted(() => productsStore.getAllProducts());
</script>

<style scoped>
</style>