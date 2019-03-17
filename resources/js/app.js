import axios from 'axios';
import Vue from 'vue';

import Projects from './components/Projects';
import Filters from './components/Filters';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const token = document.head.querySelector('meta[name="csrf-token"]');
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

Vue.component('projects', Projects);
Vue.component('filters', Filters);

new Vue({
    el: '#app',
    data: {
        filter: 'all',
    },
});
