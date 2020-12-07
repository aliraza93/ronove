<template>
  <div class="col-md-12">
      <input
        type="text"
        class="form-control"
        v-on:keyup="getData()"
        placeholder="Serach By Booking Status"
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
              <th>Employee Id</th>
              <th>Booking status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody v-if="show">
            <tr v-for="(value,index) in booking.data" v-bind:key="index">
              <td>{{ index+1 }}</td>
              <td>{{ value.employee_id }}</td>
              <td>{{ value.booking_status }}</td>
              <td>
                <div class="dropdown dropdown-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(65px, -2px, 0px);">
                        <a class="dropdown-item" href="#" @click="editSystem(value.id)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" @click="deleteSystem(value.id)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        <a class="dropdown-item" href="#" @click="assignPermissions(value.id)"><i class="la la-check-circle m-r-5"></i> Permissions</a>
                    </div>
                </div>
            </td>
            </tr>
          </tbody>
        </table>
        <div class="text-center" style="margin-top: 15px;" v-if="!show">
            <h4>No Systems Avaialble</h4>
        </div>
      </div>

        <pagination :pageData="booking"></pagination>

      <div class="row">
      </div>
  </div>
</template>

<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";

import Pagination  from '../pagination/pagination.vue';

export default {
  mixins: [mixin],

  components: {
    "pagination": Pagination,
  },

  data() {
    return {
      booking: [],
      name: '',
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

    EventBus.$on("booking-added", function() {
      _this.getData();
    });
  },

  methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "booking-list?page="+
            page+
            "&name=" +
            this.name
        )
        .then(response => {
          // console.log(response.data);

          this.booking = response.data;
          this.isLoading = false;
        })
        .catch(error => {
          console.log(error);
        });
    },

    // edit vendor

    editSystem(id) {
      EventBus.$emit("booking-edit", id);
    },
    assignPermissions(id) {
      EventBus.$emit("assign-permissions", id);
    },
    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
    deleteSystem (id) {
      axios.delete(base_url + "booking/" + id)
        .then(({data}) => {
            EventBus.$emit("booking-added");
            this.$toast.success('System Deleted Successfully !', 'Success',this.notificationSystem.options.success);
        });       
    }
  },

  computed: {

    show() {
      return this.booking.data.length >= 1 ? true: false
    }

  }
};
</script>