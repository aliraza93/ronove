require('./vue-asset');
import VueIziToast from 'vue-izitoast';
import 'izitoast/dist/css/iziToast.min.css';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import 'bootstrap-vue/dist/bootstrap-vue.css'
import vueFilterPrettyBytes from 'vue-filter-pretty-bytes'

window.Vue = require('vue');
// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
Vue.use(vueFilterPrettyBytes)
Vue.use(VueIziToast);
//Projects
Vue.component('add-project', require('./components/Project/AddProject.vue').default);
Vue.component('view-projects', require('./components/Project/ViewProjects.vue').default);
Vue.component('update-project', require('./components/Project/UpdateProject.vue').default);
//Folders
Vue.component('add-folder', require('./components/FileManager/Folders/CreateFolder.vue').default);
//Files
Vue.component('upload-files', require('./components/Files/UploadFiles.vue').default);
Vue.component('view-files', require('./components/Files/ViewFiles.vue').default);

var app = new Vue({

    el: '#file-manager'
});
