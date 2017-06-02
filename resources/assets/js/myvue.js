import router from './routes.js';


// Vue Router
window.Vue = require('vue');
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// AxioS
window.axios = require('axios');

window.axios.defaults.headers.common = {
 'X-CSRF-TOKEN': window.Laravel.csrfToken,
 'X-Requested-With': 'XMLHttpRequest'
};

// Vue Instance


const app = new Vue({
    el: '#app',
    router
});
