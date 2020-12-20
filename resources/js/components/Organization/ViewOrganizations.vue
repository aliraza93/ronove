<template>
  <div class="col-md-12">
      <input
        type="text"
        class="form-control"
        v-on:keyup="getData()"
        placeholder="Serach By Name"
            name=""
        v-model="name"
        style="margin-bottom: 1px;"
      >
        <div class="loading" v-if="isLoading">
                    <h2 style="text-align:center">Loading.......</h2>
        </div>

      <div class="table-responsive" v-else>
        <table class="table table-striped custom-table datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Organization Code</th>
              <th>status</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody v-if="show">
            <tr v-for="(value,index) in organization.data" v-bind:key="index">
              <td>{{ index+1 }}</td>
              <td>{{ value.name }}</td>
              <td>{{ value.address }}</td>
              <td>{{ value.phone }}</td>
              <td>{{ value.email }}</td>
              <td>{{ value.code }}</td>
              <td>{{ value.status }}</td>
              <td class="text-center">
                <div class="dropdown dropdown-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(65px, -2px, 0px);">
                        <a class="dropdown-item" href="#" @click="editOrganization(value.id)"><i class="la la-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_organization"><i class="la la-trash-o m-r-5"></i> Delete</a>
                        <a class="dropdown-item" href="#" @click="assignSystem(value.id)"><i class="la la-check-circle m-r-5"></i> Assign System To Organization</a>
                    </div>
                </div>
            </td>
            <!-- Delete Organization Modal -->
              <div class="modal custom-modal fade" id="delete_organization" role="dialog">
                  <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                          <div class="modal-body">
                              <div class="form-header">
                                  <h3>Delete Organization</h3>
                                  <p>Are you sure want to delete?</p>
                              </div>
                              <div class="modal-btn delete-action">
                                  <div class="row">
                                      <div class="col-6">
                                          <a @click="deleteOrganization(value.id)" href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
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
              <!-- /Delete Organization Modal -->
            </tr>
          </tbody>
        </table>
        <div class="text-center" style="margin-top: 15px;" v-if="!show">
            <h4>No Organizations Avaialble</h4>
        </div>
      </div>

        <pagination :pageData="organization"></pagination>

      <div class="row">
        <update-organization></update-organization>
        <assign-system></assign-system>
      </div>
  </div>
</template>

<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";

import UpdateOrganization from "./UpdateOrganization.vue";
import AssignSystem from "./AssignSystem.vue";
import Pagination  from '../pagination/pagination.vue';

export default {
  mixins: [mixin],

  components: {
    "assign-system": AssignSystem,
    "pagination": Pagination,
  },

  data() {
    return {
      organization: [],
      name: '',
      address: '',
      phone: '',
      email: '',
      code: '',
      status: '',
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

    EventBus.$on("organization-added", function() {
      _this.getData();
    });
  },

  methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "organization-list?page="+
            page+
            "&name=" +
            this.name
        )
        .then(response => {
          // console.log(response.data);

          this.organization = response.data;
          this.isLoading = false;
        })
        .catch(error => {
          console.log(error);
        });
    },

    // edit vendor

    editOrganization(id) {
      EventBus.$emit("organization-edit", id);
    },
    assignSystem(id) {
      EventBus.$emit("assign-system", id);
    },
    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
    deleteOrganization (id) {
      axios.delete(base_url + "organization/" + id)
        .then(({data}) => {
            EventBus.$emit("organization-added");
            $("#delete_organization").modal("hide");
            this.$toast.success('Organization Deleted Successfully !', 'Success',this.notificationSystem.options.success);
        });       
    },
  },

  computed: {

    show() {
      return this.organization.data.length >= 1 ? true: false
    }

  }
};
</script>