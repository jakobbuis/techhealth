import axios from 'axios';
import Vue from 'vue';

import Projects from './components/Projects';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const token = document.head.querySelector('meta[name="csrf-token"]');
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

Vue.component('projects', Projects);

new Vue({ el: '#app' });
