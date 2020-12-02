require('./vue-asset');
import VueIziToast from 'vue-izitoast';
import 'izitoast/dist/css/iziToast.min.css';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import 'bootstrap-vue/dist/bootstrap-vue.css'
import VueChatScroll from 'vue-chat-scroll'


window.Vue = require('vue');
// Install BootstrapVue
Vue.use(BootstrapVue)
Vue.use(VueChatScroll)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

Vue.use(VueIziToast);
Vue.component('private-chat', require('./components/Chat/PrivateChat.vue').default);
Vue.component('sidebar', require('./components/Chat/Sidebar.vue').default);
var app = new Vue({

    el: '#chat'
});
