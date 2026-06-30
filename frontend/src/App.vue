<template>
  <div>
    <Navbar />
    <router-view></router-view>
  </div>
</template>
<script setup>
import { RouterView } from "vue-router";
import Navbar from "./components/layouts/Navbar.vue";
</script>
<style scoped></style>