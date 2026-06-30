<template>
    <div class="card m-2 col-md-3">
    <img :src="'http://127.0.0.1:8000/'+ product.thumbnail " class="card-img-top" alt="Product Image">
    <div class="card-body">
        <h5 class="card-title">{{ product.name }}</h5>
        <p class="card-text">{{ product.desc.substr(0,50) }}</p>
        <div class="d-flex justify-content-between align-items-center">
            <span class="h5 mb-0">${{ product.price }}</span>
            <div>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
                <small class="text-muted">(4.5)</small>
            </div>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between bg-light">
        <button class="btn btn-primary btn-sm">Add to Cart</button>
        <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-heart"></i></button>
    </div>
</div>
</template>

<script setup>

const data = defineProps({
    product:{
        type:Object,
        required:true
    }
})

</script>

<style scoped>
</style>