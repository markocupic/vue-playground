import './styles/scss/main.scss'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

import {createApp} from 'vue';
import Hello from './components/Hello.vue';

const entry = createApp(Hello)
entry.provide('params', JSON.parse(atob(document.querySelector('#hello').dataset.params)));
entry.provide('params', JSON.parse(atob(document.querySelector('#hello').dataset.params)));

entry.mount('#hello');
