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
Vue.component('add-system', require('./components/System/AddSystem.vue').default);
Vue.component('view-systems', require('./components/System/ViewSystems.vue').default);
Vue.component('update-system', require('./components/System/UpdateSystem.vue').default);
Vue.component('assign-permissions', require('./components/System/AssignPermissions.vue').default);

var app = new Vue({

    el: '#system'
});
