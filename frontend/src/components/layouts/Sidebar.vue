<template>
  <div
    class="d-flex flex-column flex-shrink-0 p-3 text-black bg-white col-md-3 shadow"
  >
    <a
      href="/"
      class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-black text-decoration-none"
    >
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="#bootstrap" />
      </svg>
      <span class="fs-4">Vue T-shirt</span>
    </a>
    <hr />

    <ul class="nav nav-pills flex-column mb-auto">
      <span class="fs-5">Colors</span>
      <hr />
      <div class="d-flex flex-wrap gap-2 mb-3">
        <div
          v-for="color in productsStore.colors"
          :key="color.id"
          :style="{
            backgroundColor: color.name,
            width: '24px',
            height: '24px',
          }"
          @click="productsStore.getProductByColor(color.slug)"
          class="rounded-circle border"
        ></div>
      </div>
      <hr />
      <span class="fs-5">Sizes</span>
      <hr />
      <div class="d-flex flex-wrap gap-2 mb-3">
        <div
          class="badge bg-secondary"
          v-for="size in productsStore.sizes"
          :key="size.id"
          @click="productsStore.getProductBySize(size.slug)"
        >
          {{ size.name }}
        </div>
      </div>
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
      <li class="nav-item">
        <router-link to="/register" class="nav-link" active-class="active"
          >Register</router-link
        >
      </li>
    </ul>

    <hr />
    <div class="dropdown">
      <a
        href="#"
        class="d-flex align-items-center text-black text-decoration-none dropdown-toggle"
        id="dropdownUser1"
        data-bs-toggle="dropdown"
        aria-expanded="false"
      >
        <img
          src="https://github.com/mdo.png"
          alt=""
          width="32"
          height="32"
          class="rounded-circle me-2"
        />
        <strong>mdo</strong>
      </a>
      <ul
        class="dropdown-menu dropdown-menu-dark text-small shadow"
        aria-labelledby="dropdownUser1"
      >
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider" /></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
</template>
<script setup>
import { useProductStore } from "@/stores/useProductStore";

const productsStore = useProductStore();
</script>

<style scoped>
</style>