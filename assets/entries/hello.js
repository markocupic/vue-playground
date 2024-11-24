import './../styles/scss/hello.scss'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

import {createApp} from 'vue';
import Hello from './../vue/components/hello/Hello.vue';

createApp(Hello, {
    params: JSON.parse(atob(document.querySelector('#hello').dataset.params)),
}).mount('#hello');
