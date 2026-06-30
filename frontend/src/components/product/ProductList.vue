<template>
    <div class="col-md-9 d-flex flex-wrap justify-content-around">
        <ProductListItem v-for="product in productStore.products" :key="product.id" :product="product"/>
    </div>
</template>

<script setup>
import { useProductStore } from '@/stores/useProductStore';
import ProductListItem from './ProductListItem.vue';

const productStore = useProductStore()


</script>

<style scoped>
</style>