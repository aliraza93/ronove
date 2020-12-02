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
Vue.component('add-organization', require('./components/Organization/AddOrganization.vue').default);
Vue.component('view-organizations', require('./components/Organization/ViewOrganizations.vue').default);
Vue.component('update-organization', require('./components/Organization/UpdateOrganization.vue').default)

var app = new Vue({

    el: '#organization'
});
