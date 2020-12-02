require('./vue-asset');
import VueIziToast from 'vue-izitoast';
import 'izitoast/dist/css/iziToast.min.css';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import 'bootstrap-vue/dist/bootstrap-vue.css'


window.Vue = require('vue');
// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

Vue.use(VueIziToast);
Vue.component('add-client', require('./components/Client/AddClient.vue').default);
Vue.component('view-clients', require('./components/Client/ViewClients.vue').default);
Vue.component('update-client', require('./components/Client/UpdateClient.vue').default)

var app = new Vue({

    el: '#client'
});
