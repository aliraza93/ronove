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
Vue.component('bank-details', require('./components/Employee/BankDetails.vue').default)
Vue.component('employee-education', require('./components/Employee/EmployeeEducation.vue').default)
Vue.component('employee-education-update', require('./components/Employee/EmployeeEducationUpdate.vue').default)
Vue.component('employee-present', require('./components/Employee/EmployeePresent.vue').default)
Vue.component('employee-present-update', require('./components/Employee/EmployeePresentUpdate.vue').default)
Vue.component('employee-training', require('./components/Employee/EmployeeTraining.vue').default)
Vue.component('employee-training-update', require('./components/Employee/EmployeeTrainingUpdate.vue').default)



var app = new Vue({

    el: '#employee_details'
});
