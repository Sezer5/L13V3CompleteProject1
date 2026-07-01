<template>
  <div class="mb-3 d-flex justify-content-between w-100">
    <input
      type="text"
      v-model="data.term"
      class="form-control"
      placeholder="Add Search"
    />
    <button
      class="btn btn-sm btn-dark search_button"
      @click="searchForProducts"
      :disabled="!data.term"
    >
      <i class="bi bi-search"></i>
    </button>
  </div>
</template>

<script setup>
import { useProductStore } from "@/stores/useProductStore";
import { reactive } from "vue";

const productStore = useProductStore();

const data = reactive({
  term: "",
});

const searchForProducts = () => {
  productStore.getProductByTerm(data.term);
  data.term = "";
};
</script>

<style scoped>
#search_button {
  border-top-right-radius: 15px;
  border-bottom-right-radius: 15px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
</style>