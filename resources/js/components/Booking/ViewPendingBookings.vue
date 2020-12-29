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
        <table class="table table-striped custom-table datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Employee Name</th>
              <th>Service User Name</th>
              <th>Day & Time</th>
              <th>Booking status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody v-if="show">
            <tr v-for="(value,index) in booking.data" v-bind:key="index">
              <td>{{ index+1 }}</td>
              <td>{{ value.employee_name }}</td>
              <td>{{ value.service_user_name }}</td>
              <td>{{ value.employee_schedule_day_and_time }}</td>
              <td>{{ value.booking_status }}</td>
              <td class="text-left">
                <button @click="approveBooking(value.id)" class="btn btn-success btn-sm">Approve</button>
                <button @click="rejectBooking(value.id)" class="btn btn-danger btn-sm">Reject</button>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="text-center" style="margin-top: 15px;" v-if="!show">
            <h4>No More Pending Bookings Avaialble</h4>
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

    EventBus.$on("booking-changed", function() {
      _this.getData();
    });
  },

  methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "pending-bookings-list?page="+
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

    approveBooking(id) {
      axios
        .post(base_url + "approve-service-staff-booking/" + id)

        .then(response => {
        $("#add-schedule").modal("hide");
        EventBus.$emit("booking-changed");
        this.showMessage(response.data);
        this.errors = [];
        //location.reload()
        })
        .catch(err => {
        if (err.response) {
            this.errors = err.response.data.errors;
            this.showMessage(err.response.data)
        }
      });
    },

    rejectBooking(id) {
      axios
        .post(base_url + "reject-service-staff-booking/" + id)

        .then(response => {
        $("#add-schedule").modal("hide");
        EventBus.$emit("booking-changed");
        this.showMessage(response.data);
        this.errors = [];
        //location.reload()
        })
        .catch(err => {
        if (err.response) {
            this.errors = err.response.data.errors;
            this.showMessage(err.response.data)
        }
      });
    },

    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
    showMessage(data) {
      if (data.status  == "success") {
          this.$toast.success(data.message, 'Success Alert', this.notificationSystem.options.success );
      } else {
          this.$toast.error(data.message, "Error Alert", this.notificationSystem.options.error);
      }
    },
  },

  computed: {

    show() {
      return this.booking.data.length >= 1 ? true: false
    }

  }
};
</script>