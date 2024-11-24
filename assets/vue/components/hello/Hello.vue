<script setup> // With <script setup>, imported components are automatically made available to the template.
import Product from './../product/Product.vue'
</script>

<script>
export default {
  props: ['params'], // Make this root prop available in this component
  data() {
    return {
      firstname: '',
      lastname: '',
      count: 0,
      products: [],
    };
  },
  setup() {
    //
  },
  beforeMount() {
    // Get props from root
    this.firstname = this.params.firstname;
    this.lastname = this.params.lastname;
    this.products = this.params.products;
  },
  mounted() {
    //
  },
  methods: {
    counter() {
      this.count++;
    }
  }
};
</script>

<template>
  <div class="container pb-5">
    <div class="mt-5">
      <h1 class="text-center">Vue.js & Symfony Webpack Encore are <span class="accent">AWESOME!</span></h1>
    </div>
    <div class="mt-4">
      <h2 class="text-center">Welcome {{ firstname }} {{ lastname }}!</h2>
    </div>
    <div class="mt-5">
      <img src="./images/vue.png" alt="learning vue.js">
    </div>
    <div class="mt-5 d-flex justify-content-center">
      <button class="btn btn-lg btn-danger" @click="counter">Count is: {{ count }}</button>
    </div>
    <div class="products mt-5">
      <div class="row">
        <Product
            v-for="product in products"
            :product="product"
        />
      </div>
    </div>
  </div>
</template>

<style scoped>
h1 {
  font-size: 6rem;
  color: #000;
  font-weight: 1000;
}

h2 {
  font-size: 3rem;
  color: #ffffff;
}

img {
  max-width: 100%
}

.accent {
  background: -webkit-linear-gradient(315deg, #42d392 25%, #647eff);
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
</style>
