<template>
  <div class="container py-4">
    <div class="d-flex flex-wrap justify-content-center">
      <ProductListItem
        v-for="product in productStore.products.slice(0, item.count)"
        :key="product.id"
        :product="product"
      />
    </div>

    <div
      class="text-center mt-4"
      v-if="item.count < productStore.products.length"
    >
      <button @click="moreProduct()" class="btn btn-dark" id="custom-btn">
        Daha Fazla Göster
      </button>
    </div>
  </div>
</template>

<script setup>
import { useProductStore } from "@/stores/useProductStore";
import ProductListItem from "./ProductListItem.vue";
import { reactive } from "vue";

const productStore = useProductStore();

// reactive kullanarak tanımladık
const item = reactive({
  count: 3,
});

const moreProduct = () => {
  // 'this' kullanmıyoruz, doğrudan item'a erişiyoruz
  item.count += 3;
};
</script>

<style scoped>
#custom-btn {
  width: fit-content;
}
</style>