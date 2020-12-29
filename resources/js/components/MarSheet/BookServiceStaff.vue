<template>
  <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
          <b-form-timepicker @input="getData()" placeholder="Search By Start Time" v-model="start_time" locale="en"></b-form-timepicker>
        </div>
        <div class="col-md-6">
          <b-form-timepicker @input="getData()" placeholder="Search By End Time" v-model="end_time" locale="en"></b-form-timepicker> 
        </div>
      </div>
      <div class="loading" v-if="isLoading">
          <h2 style="text-align:center">Loading.......</h2>
      </div>

      <div class="table-responsive" v-else>
        <table class="table table-condensed table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Employee Name</th>
              <th>Day</th>
              <th>Start Time</th>
              <th>End Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(value,index) in service_staff.data" v-bind:key="index">
              <td>{{ index+1 }}</td>
              <td>{{ value.name }}</td>
              <td>{{ value.day }}</td>
              <td>{{ value.start_time | moment }}</td>
              <td>{{ value.end_time | moment }}</td>
              <td><button @click="book(value.employee_id, value.id)" class="btn btn-primary btn-sm">Preffered Staff</button></td>
            </tr>
          </tbody>
        </table>
      </div>

        <pagination :pageData="service_staff"></pagination>
  </div>
</template>

<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";
import Pagination  from '../pagination/pagination.vue';

export default {
  props: ['service_user'],
  mixins: [mixin],
  components: {
    "pagination": Pagination,
  },
  data() {
    return {
      service_staff: [],
      data: [],
      start_time: '',
      end_time: '',
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
  },

  methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "service-staff-list?page="+
            page+
            "&start_time=" +
            this.start_time +
            "&end_time=" +
            this.end_time
        )
        .then(response => {
          this.service_staff = response.data
          this.isLoading = false;
        })
        .catch(error => {
          console.log(error);
        });
    },
    book(employee_id, id) {
      axios
        .post(base_url + "book-service-staff/" + employee_id + '/' + id + '/' + this.service_user.id, this.service_staff)

        .then(response => {
          EventBus.$emit("booking-added");
          location.reload();
          this.showMessage(response.data);
          this.service_staff = [];
          this.errors = null;
          
        })
        .catch(err => {
          if (err.response) {
            this.errors = err.response.data.errors;
            this.showMessage(err.response.data)
          }
        });
    },
    showMessage(data) {
      if (data.status  == "success") {
          this.$toast.success(data.message, 'Success Alert', this.notificationSystem.options.success );
      } else {
          this.$toast.error(data.message, "Error Alert", this.notificationSystem.options.error);
      }
    },

    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
  },
  moment: function (formatTime) {
    if(formatTime) {
      const parts = formatTime.split(":");
      var hours = parts[0]
      var mid = 'AM';
      if(hours == 0){ //At 00 hours we need to show 12 am
        hours = 12;
      }
      else if(hours > 12)
      {
        hours = hours % 12;
        mid = 'PM';
      }
      return + hours + ":" + parts[1] + ' ' + mid;
    } else {
      return "unknown"
    }
  },
  computed: {

    show() {
      return this.service_staff.data.length >= 1 ? true: false
    }

  }
};
</script>