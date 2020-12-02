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
Vue.component('add-service-user', require('./components/User/ServiceUser/AddServiceUser.vue').default);
Vue.component('view-service-users', require('./components/User/ServiceUser/ViewServiceUsers.vue').default);
Vue.component('update-service-user', require('./components/User/ServiceUser/UpdateServiceUser.vue').default)

var app = new Vue({

    el: '#service_user'
});
