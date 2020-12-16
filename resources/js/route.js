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
Vue.component('add-route', require('./components/setting/AddRoute.vue').default);
Vue.component('view-route', require('./components/setting/ViewRoute.vue').default);
Vue.component('update-route', require('./components/setting/UpdateRoute.vue').default);

var app = new Vue({

    el: '#route'
});
