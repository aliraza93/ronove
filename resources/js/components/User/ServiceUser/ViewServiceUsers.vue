<template>
  <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
          <input
            type="text"
            class="form-control"
            v-on:keyup="getData()"
            placeholder="Serach By ID"
                name=""
            v-model="id"
            style="margin-bottom: 1px;"
          >
        </div>
        <div class="col-md-6">
          <input
              type="text"
              class="form-control"
              v-on:keyup="getData()"
              placeholder="Serach By Name"
                  name=""
              v-model="name"
              style="margin-bottom: 1px;"
            >  
        </div>
      </div>
      
      <!-- Search Filter
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3">  
              <div class="form-group form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee ID</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">  
              <div class="form-group form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee Name</label>
              </div>
          </div>
      </div>
      Search Filter -->
        <!--
          

        -->
      <div class="loading" v-if="isLoading">
        <h2 style="text-align:center">Loading.......</h2>
      </div>
      <div class="row staff-grid-row" v-else>
          <div v-for="(value,index) in service_user.data" v-bind:key="index" class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
              <div class="profile-widget">
                  <div class="profile-img">
                      <a :href="'service-user-show/' + value.id" class="avatar">
                        <img style="height: inherit;" :src="value.avatar ? value.avatar : 'img/profiles/avatar-02.jpg' " alt="">
                      </a>
                  </div>
                  <div class="dropdown profile-action">
                      <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#" @click="editServiceUser(value.id)"><i class="la la-pencil m-r-5"></i> Edit</a>
                          <a class="dropdown-item" href="#" @click="sendInfo(value)" data-toggle="modal" data-target="#delete_service_user"><i class="la la-trash-o m-r-5"></i> Delete</a>
                      </div>
                      <!-- Delete Service User Modal -->
                        <div class="modal custom-modal fade" id="delete_service_user" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="form-header">
                                            <h3>Delete Service User</h3>
                                            <p>Are you sure want to delete?</p>
                                        </div>
                                        <div class="modal-btn delete-action">
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="javascript:void(0);" @click="deleteServiceUser(selectedUser.id)" class="btn btn-primary continue-btn">Delete</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Delete Service User Modal -->
                  </div>
                  <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">{{ value.first_name }} {{ value.last_name }}</a></h4>
                  <!--
                    <div class="small text-muted">Web Designer</div>
                  -->
              </div>
          </div>
          <div class="col-md-12 text-center" style="margin-top: 15px;" v-if="!show">
              <h4>No Service Users Found</h4>
          </div>
      </div>

        <pagination :pageData="service_user"></pagination>

      <div class="row">
        <update-service-user></update-service-user>
      </div>
  </div>
</template>

<script>
import { EventBus } from "../../../vue-asset";
import mixin from "../../../mixin";

import UpdateServiceUser from "./UpdateServiceUser.vue";
import Pagination  from '../../pagination/pagination.vue';

export default {
  mixins: [mixin],

  components: {
    "pagination": Pagination,
    'update-service-user': UpdateServiceUser
  },

  data() {
    return {
      service_user: [],
      id: '',
      name: '',
      address: '',
      phone: '',
      email: '',
      code: '',
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

    EventBus.$on("service-user-added", function() {
      _this.getData();
    });
  },

  methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "service-user-list?page="+
            page+
            "&id=" +
            this.id +
            "&name=" +
            this.name
        )
        .then(response => {
          //console.log(response.data);

          this.service_user = response.data;
          this.isLoading = false;
        })
        .catch(error => {
          console.log(error);
        });
    },

    // edit vendor

    editServiceUser(id) {
      EventBus.$emit("service-user-edit", id);
    },
    assignSystem(id) {
      EventBus.$emit("assign-system", id);
    },
    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
    sendInfo(value) {
        this.selectedUser = value;
    },
    deleteServiceUser (id) {
      axios.delete(base_url + "service-user/" + id)
        .then(({data}) => {
            location.reload();
            this.$toast.success('Service User Deleted Successfully !', 'Success',this.notificationSystem.options.success);
        });       
    },
  },

  computed: {

    show() {
      return this.service_user.data.length >= 1 ? true: false
    }

  }
};
</script>