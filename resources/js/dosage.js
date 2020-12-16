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
Vue.component('add-dosage', require('./components/setting/AddDosage.vue').default);
Vue.component('view-dosage', require('./components/setting/ViewDosage.vue').default);
Vue.component('update-dosage', require('./components/setting/UpdateDosage.vue').default);

var app = new Vue({

    el: '#dosage'
});
