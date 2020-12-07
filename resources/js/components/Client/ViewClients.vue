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
        <div class="loading" v-if="isLoading">
                    <h2 style="text-align:center">Loading.......</h2>
        </div>
        <div class="row staff-grid-row" v-else>
          <div v-for="(value,index) in client.data" v-bind:key="index" class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
              <div class="profile-widget">
                  <div class="profile-img">
                      <a href="profile" class="avatar"><img src="img/profiles/avatar-02.jpg" alt=""></a>
                  </div>
                  <div class="dropdown profile-action">
                      <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#" @click="editClient(value.id)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                      </div>
                      <!-- Delete Employee Modal -->
                        <div class="modal custom-modal fade" id="delete_client" role="dialog">
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
                                                    <a href="javascript:void(0);" @click="deleteClient(value.id)" class="btn btn-primary continue-btn">Delete</a>
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
              <h4>No Clients Found</h4>
          </div>
      </div>

        <pagination :pageData="client"></pagination>

      <div class="row">
        <update-client></update-client>
        <assign-system></assign-system>
      </div>
  </div>
</template>

<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";

import UpdateClient from "./UpdateClient.vue";
import AssignSystem from "./AssignSystem.vue";
import Pagination  from '../pagination/pagination.vue';

export default {
  mixins: [mixin],

  components: {
    "update-client": UpdateClient,
    "assign-system": AssignSystem,
    "pagination": Pagination,
  },

  data() {
    return {
      client: [],
      id: '',
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

    EventBus.$on("client-added", function() {
      _this.getData();
    });
  },

  methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "client-list?page="+
            page+
            "&id=" +
            this.id +
            "&name=" +
            this.name
        )
        .then(response => {
          // console.log(response.data);

          this.client = response.data;
          this.isLoading = false;
        })
        .catch(error => {
          console.log(error);
        });
    },

    // edit vendor

    editClient(id) {
      EventBus.$emit("client-edit", id);
    },

    assignPermissions(id) {
      EventBus.$emit("assign-permissions", id);
    },
    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
    deleteClient (id) {
      axios.delete(base_url + "client/" + id)
        .then(({data}) => {
            location.reload();
            this.$toast.success('Client Deleted Successfully !', 'Success',this.notificationSystem.options.success);
        });
    },
  },

  computed: {

    show() {
      return this.client.data.length >= 1 ? true: false
    }

  }
};
</script>
