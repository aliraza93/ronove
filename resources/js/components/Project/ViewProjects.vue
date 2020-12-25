<template>
  <div class="col-md-12">
      <form class="file-search">
        <div class="input-group">
          <div class="input-group-prepend">
            <i class="fa fa-search"></i>
          </div>
          <input
            type="text"
            class="form-control"
            v-on:keyup="getData()"
            placeholder="Serach By Name"
                name=""
            v-model="name"
          >
        </div>
      </form>
      <div class="loading" v-if="isLoading">
          <h2 style="text-align:center">Loading.......</h2>
      </div>
      <div class="file-pro-list" v-else>
        <div class="file-scroll" v-if="show">
          <ul v-for="(value,index) in project.data" v-bind:key="index" class="file-menu">
            <li>
              <a href="#" @click="showFiles(value.id)">{{ value.name }}</a>
            </li>
          </ul>
          <div class="show-more">
            <a href="#">Show More</a>
          </div>
        </div>
        <div class="text-center" style="margin-top: 15px;" v-if="!show">
          <h4>No Projects Avaialble</h4>
        </div>
      </div>
      <pagination :pageData="project"></pagination>
      <div class="row">
        <update-project></update-project>
      </div>
  </div>
</template>

<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";
import UpdateProject from "./UpdateProject.vue";
import Pagination  from '../pagination/pagination.vue';

export default {
  mixins: [mixin],

  components: {
    "update-project": UpdateProject,
    "pagination": Pagination,
  },

  data() {
    return {
      project: [],
      name: '',
      status: '',
      selectedUser: '',
      notificationSystem: {
          options: {
              success: {
                  position: "topRight",
                  timeout: 3000,
                  class: 'success_notification'
              },
              error: {
                  position: "topRight",
                  timeout: 4000,
                  class: 'error_notification'
              },
              completed: {
                  position: 'center',
                  timeout: 1000,
                  class: 'complete_notification'
              },
              info: {
                  overlay: true,
                  zindex: 999,
                  position: 'center',
                  timeout: 3000,
                  class: 'info_notification',
              }
          }
      },
    };
  },
  created() {
    var _this = this;
    this.getData();

    EventBus.$on("project-added", function() {
      _this.getData();
    });
  },

  methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "project-list?page="+
            page+
            "&name=" +
            this.name
        )
        .then(response => {
          // console.log(response.data.data);

          this.project = response.data;
          this.isLoading = false;
        })
        .catch(error => {
          console.log(error);
        });
    },
    showFiles(id) {
      console.log(id)
      EventBus.$emit("show-files", id);
    },
    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
    sendInfo(value) {
        this.selectedUser = value;
    },
  },

  computed: {

    show() {
      return this.project.data.length >= 1 ? true: false
    }

  }
};
</script>