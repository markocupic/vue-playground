<script>
export default {
  props: ['product'], // Make this prop available in this component
  data() {
    return {
      price: '',
      type: '',
      likes: 0,
    };
  },
  setup() {
    //
  },
  beforeMount() {
    // Get props from root
    this.type = this.product.type;
    this.price = this.product.price;
    this.likes = this.product.likes;
  },
  mounted() {
    //
  },
};
</script>

<template>
  <div class="col-1 col-md-6 col-lg-4 product">
    <div class="p-3 p-md-4 p-xl-5 product--inner">
      <div class="mt-5">
        <h3 class="text-center text-capitalize">{{ type }}</h3>
      </div>
      <div class="mt-4">
        <div class="price text-center">{{ price }}</div>
      </div>
      <div class="mt-5 d-flex justify-content-center">
        <button class="btn btn-lg btn-danger" @click="likes++">Likes: {{ likes }} &#x2661;</button>
      </div>
    </div>
  </div>
</template>

<style scoped>
h3 {
  font-size: 2rem;
  color: #ffffff;
  font-weight: bold;
}

.product--inner {
  background-color: #00AAAA;
}

.price {
  font-size: 1.75rem;
  font-weight: 800;
}
</style>
