<script>
import {inject} from 'vue';

export default {
  data() {
    return {
      firstname: '',
      lastname: '',
      count: 0,
    };
  },
  setup() {
    //
  },
  mounted() {
    // Inject params from the data attribute
    const params = inject('params');

    this.firstname = params.firstname;
    this.lastname = params.lastname;
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
      <img src="./../images/vue.png" alt="learning vue.js">
    </div>
    <div class="mt-5 d-flex justify-content-center">
      <button class="btn btn-lg btn-danger" @click="counter">Count is: {{ count }}</button>
    </div>
  </div>
</template>

<style scoped>
img {
  max-width: 100%
}

h1 {
  font-size: 6rem;
  color: #000;
  font-weight: 1000;
}

h2 {
  font-size: 3rem;
  color: #00b2a9;
}

.accent {
  background: -webkit-linear-gradient(315deg, #42d392 25%, #647eff);
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
</style>
