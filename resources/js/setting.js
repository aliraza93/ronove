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
Vue.component('add-medicine', require('./components/setting/AddMedicines.vue').default);
Vue.component('view-medicines', require('./components/setting/ViewMedicines.vue').default);
Vue.component('update-medicines', require('./components/setting/UpdateMedicines.vue').default);

var app = new Vue({

    el: '#medicine'
});
