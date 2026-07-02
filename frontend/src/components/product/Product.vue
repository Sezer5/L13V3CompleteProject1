<template>
  <div>
    <Spinner :store="productDetailStore" />
    <div class="row my-5">
      <div class="col-md-6">
        <div>
          <!-- <img
            :src="IMAGE_PATH + productDetailStore.product?.thumbnail"
            class="img-fluid rounded"
            alt="Product Image"
          /> -->
          <ZoomImg
            :src="IMAGE_PATH + productDetailStore.product?.thumbnail"
            class="img-fluid rounded"
            zoom-type="move"
            :zoom-scale="3"
          />
        </div>
      </div>
      <div class="col-md-5 mx-auto">
        <h5 class="my-3">
          {{ productDetailStore.product?.name }}
        </h5>

        <p class="card-text" v-html="productDetailStore.product?.desc"></p>
        <div>
          <span class="h5 mb-2">$ {{ productDetailStore.product?.price }}</span>
        </div>
        <div class="d-flex flex-wrap justify-content-start">
          <div
            :class="`${
              data.chosenColor?.id === color.id
                ? 'border border-light-subtle shadow border-2 shadow-sm border-2 rounded-5'
                : ''
            } mb-1 me-1`"
            v-for="color in productDetailStore.product?.colors"
            :key="color.id"
            :style="{
              backgroundColor: color.name,
              width: '30px',
              height: '30px',
              cursor: 'pointer',
            }"
            @click="setChoosenColor(color)"
          ></div>
        </div>
        <div class="d-flex flex-wrap justify-content-start">
          <div
            :class="`${
              data.chosenSize?.id === size.id
                ? 'btn btn-danger mb-3'
                : 'nav-item mb-1 m-1'
            }`"
            v-for="size in productDetailStore.product?.sizes"
            :key="size.id"
            @click="setChoosenSize(size)"
          >
            <button class="btn btn-sm btn-outline-secondary text-dark">
              {{ size.name }}
            </button>
          </div>
        </div>
        <div class="my-3 d-inline-flex">
          <div>
            <input
              type="number"
              v-model="data.qty"
              min="1"
              :max="productDetailStore.product?.qty"
              class="form-control"
            />
          </div>
          <div class="ms-2">
            <button class="btn btn-danger btn-block">
              <i class="bi bi-cart-plus"></i> Add To Cart
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, reactive } from "vue";
import { useRoute } from "vue-router";
import { useProductDetailsStore } from "@/stores/useProductDetailsStore";
import Spinner from "@/components/layouts/Spinner.vue";
import { IMAGE_PATH } from "@/helpers/config";
import { ZoomImg } from "vue3-zoomer";
//define the product store

const productDetailStore = useProductDetailsStore();

//define the route

const route = useRoute();

// once the component is mounted we fetch the product

onMounted(() => {
  productDetailStore.getProduct(route.params.slug);
});

// define data for the cart

const data = reactive({
  qty: 1,
  chosenColor: null,
  chosenSize: null,
});

const setChoosenColor = (color) => {
  data.chosenColor = color;
};

const setChoosenSize = (size) => {
  data.chosenSize = size;
};
</script>

<style scoped>
</style>