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
        <table class="table table-condensed table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody v-if="show">
            <tr v-for="(value,index) in dosage.data" v-bind:key="index">
              <td>{{ index+1 }}</td>
              <td>{{ value.name }}</td>
              <td>
                <div class="dropdown dropdown-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(65px, -2px, 0px);">
                        <a class="dropdown-item" href="#" @click="editDosage(value.id)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_dosage"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                    </div>
                      <!-- Delete Employee Modal -->
                        <div class="modal custom-modal fade" id="delete_dosage" role="dialog">
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
                                                    <a href="javascript:void(0);" @click="deleteDosage(value.id)" class="btn btn-primary continue-btn">Delete</a>
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
              </td>
            </tr>
          </tbody>
        </table>
        <div class="text-center" style="margin-top: 15px;" v-if="!show">
            <h4>No Systems Avaialble</h4>
        </div>
      </div>

        <pagination :pageData="dosage"></pagination>

      <div class="row">
        <update-dosage></update-dosage>
      </div>
  </div>
</template>

<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";

import UpdateDosage from "./UpdateDosage.vue";
import Pagination  from '../pagination/pagination.vue';

export default {
  mixins: [mixin],

  components: {
    "update-dosage": UpdateDosage,
    "pagination": Pagination,
  },

  data() {
    return {
      dosage: [],
      name: '',
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

    EventBus.$on("dosage-added", function() {
      _this.getData();
    });
  },


    methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "dosage-list?page="+
            page+
            "&name=" +
            this.name
        )
        .then(response => {
          // console.log(response.data);

          this.dosage = response.data;
          this.isLoading = false;
        })
        .catch(error => {
          console.log(error);
        });
    },


    // edit vendor

    editDosage(id) {
      EventBus.$emit("dosage-edit", id);
    },
    assignPermissions(id) {
      EventBus.$emit("assign-permissions", id);
    },
    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
    deleteDosage(id) {
       
      axios.delete(base_url + "dosage/" + id)
        .then(({data}) => {
            EventBus.$emit("dosage-added");
            location.reload();
            this.$toast.success('Dosage Deleted Successfully !', 'Success',this.notificationSystem.options.success);
            this.isLoading = true;
        });
    }
  },

  computed: {

    show() {

      return this.dosage.data.length >= 1 ? true: false
      this.isLoading = true;
    }

  }
};
</script>
