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
Vue.component('view-pending-bookings', require('./components/Booking/ViewPendingBookings.vue').default);
Vue.component('view-approved-bookings', require('./components/Booking/ViewApprovedBookings.vue').default);
var app = new Vue({

    el: '#booking'
});
