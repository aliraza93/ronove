<template>
  <div class="col-md-12">
      <!--
          <input
          type="text"
          class="form-control"
          v-on:keyup="getData()"
          placeholder="Serach By Name"
              name=""
          v-model="name"
          style="margin-bottom: 1px;"
        >
      -->
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
      <!-- Search Filter -->
        <div class="loading" v-if="isLoading">
          <h2 style="text-align:center">Loading.......</h2>
        </div>
        <div class="row staff-grid-row" v-else>
          <div v-for="(value,index) in employee.data" v-bind:key="index" class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
              <div class="profile-widget">
                  <div class="profile-img">
                      <a :href="'employee-show/' + value.id" class="avatar">
                        <img style="height: inherit;" :src="value.avatar ? value.avatar : 'img/profiles/avatar-02.jpg' " alt="">
                      </a>
                  </div>
                  <div class="dropdown profile-action">
                      <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#" @click="editEmployee(value.id)"><i class="la la-pencil m-r-5"></i> Edit</a>
                          <a class="dropdown-item" href="#" @click="sendInfo(value)" data-toggle="modal" data-target="#delete_employee"><i class="la la-trash-o m-r-5"></i> Delete</a>
                          <a class="dropdown-item" href="#" @click="assignPermissions(value.id)" data-toggle="modal" data-target="#assign-permissions"><i class="la la-pencil m-r-5"></i> Assign Permissions</a>
                            
                      </div>
                      <!-- Delete Employee Modal -->
                        <div class="modal custom-modal fade" id="delete_employee" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="form-header">
                                            <h3>Delete Employee</h3>
                                            <p>Are you sure want to delete?</p>
                                        </div>
                                        <div class="modal-btn delete-action">
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="javascript:void(0);" @click="deleteEmployee(selectedUser.id)" class="btn btn-primary continue-btn">Delete</a>
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
                        <!-- /Delete Employee Modal -->
                  </div>
                  <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile">{{ value.first_name }} {{ value.last_name }}</a></h4>
                  <!--
                    <div class="small text-muted">Web Designer</div>
                  -->
              </div>
          </div>
          <div class="col-md-12 text-center" style="margin-top: 15px;" v-if="!show">
              <h4>No Employees Found</h4>
          </div>
      </div>

        <pagination :pageData="employee"></pagination>

      <div class="row">
        <update-employee></update-employee>
        <assign-system></assign-system>
        <assign-permissions></assign-permissions>
      </div>
  </div>
</template>

<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";

import UpdateEmployee from "./UpdateEmployee.vue";
import AssignPermissions from "./AssignPermissions.vue";
import AssignSystem from "./AssignSystem.vue";
import Pagination  from '../pagination/pagination.vue';

export default {
  mixins: [mixin],

  components: {
    "assign-permissions": AssignPermissions,
    "assign-system": AssignSystem,
    "pagination": Pagination,
  },

  data() {
    return {
      employee: [],
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

    EventBus.$on("employee-added", function() {
      _this.getData();
    });
  },

  methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "employee-list?page="+
            page+
            "&id=" +
            this.id +
            "&name=" +
            this.name
        )
        .then(response => {
          // console.log(response.data);

          this.employee = response.data;
          this.isLoading = false;
        })
        .catch(error => {
          console.log(error);
        });
    },

    // edit vendor

   editEmployee(id) {
      EventBus.$emit("employee-edit", id);
    },

    assignPermissions(id) {
      EventBus.$emit("assign-permissions", id);
    },
    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
    sendInfo(value) {
        this.selectedUser = value;
    },
    deleteEmployee (id) {
      axios.delete(base_url + "employee/" + id)
        .then(({data}) => {
            EventBus.$emit("employee-added");
            $('#delete_employee').modal('hide');
            // location.reload();
            this.$toast.success('Employee Deleted Successfully !', 'Success',this.notificationSystem.options.success);
        });
    },
  },

  computed: {

    show() {
      return this.employee.data.length >= 1 ? true: false
    }

  }
};
</script>
