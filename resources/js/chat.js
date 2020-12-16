require('./vue-asset');
import VueIziToast from 'vue-izitoast';
import 'izitoast/dist/css/iziToast.min.css';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Echo from 'laravel-echo'

window.Vue = require('vue');
// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

Vue.use(VueIziToast);

 window.Pusher = require('pusher-js');

 window.Echo = new Echo({
     authEndpoint: base_url + 'broadcasting/auth',
     broadcaster: 'pusher',
     key: 'f8344d3f5be7d7ba7d9c',
     cluster: 'ap2',
     encrypted: true

 });

Vue.component('private-chat', require('./components/Chat/PrivateChat.vue').default);
Vue.component('sidebar', require('./components/Chat/Sidebar.vue').default);
var app = new Vue({

    el: '#chat'
});
