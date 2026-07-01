<template>
  <div
    class="d-flex flex-column p-4 text-dark bg-white shadow"
    style="min-height: 100vh"
  >
    <a
      href="/"
      class="d-flex align-items-center mb-4 text-dark text-decoration-none"
    >
      <span class="fs-4 fw-bold">Vue T-shirt</span>
    </a>

    <SearchForm class="mb-4" />

    <div class="mb-4">
      <h6 class="text-uppercase text-muted small fw-bold mb-3">Colors</h6>
      <div class="d-flex flex-wrap gap-2">
        <div
          v-for="color in productsStore.colors"
          :key="color.id"
          class="color-circle border"
          :style="{ backgroundColor: color.name }"
          @click="productsStore.getProductByColor(color.slug)"
          title="Filtrele"
        ></div>
      </div>
    </div>

    <div class="mb-4">
      <h6 class="text-uppercase text-muted small fw-bold mb-3">Sizes</h6>
      <div class="d-flex flex-wrap gap-2">
        <span
          v-for="size in productsStore.sizes"
          :key="size.id"
          class="size-badge"
          @click="productsStore.getProductBySize(size.slug)"
        >
          {{ size.name }}
        </span>
      </div>
    </div>

    <hr class="my-3" />

    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <router-link to="/" class="nav-link" active-class="active"
          >Home</router-link
        >
      </li>
      <li class="nav-item">
        <router-link to="/login" class="nav-link" active-class="active"
          >Login</router-link
        >
      </li>
    </ul>

    <div class="dropdown mt-3 border-top pt-3">
      <a
        href="#"
        class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
        id="dropdownUser1"
        data-bs-toggle="dropdown"
      >
        <img
          src="https://github.com/mdo.png"
          width="32"
          height="32"
          class="rounded-circle me-2"
        />
        <strong>mdo</strong>
      </a>
    </div>
  </div>
</template>
<script setup>
import { useProductStore } from "@/stores/useProductStore";
import SearchForm from "./SearchForm.vue";
const productsStore = useProductStore();
</script>

<style scoped>
.color-circle {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  cursor: pointer;
  transition: transform 0.2s, border-color 0.2s;
}

.color-circle:hover {
  transform: scale(1.2);
  border-color: #333 !important;
}

.size-badge {
  padding: 5px 12px;
  background: #f8f9fa;
  border: 1px solid #dee2e6;
  border-radius: 6px;
  cursor: pointer;
  font-size: 0.85rem;
  transition: all 0.2s;
}

.size-badge:hover {
  background: #e2e6ea;
  border-color: #adb5bd;
}
</style>