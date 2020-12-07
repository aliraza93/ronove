<template>
  <div class="col-md-12">
      <div class="row">
        <div class="col-md-3">
          <input
            type="date"
            class="form-control"
            @change="getData()"
            placeholder="Serach By Start Date"
                name=""
            v-model="start_date"
            style="margin-bottom: 1px;"
          >
        </div>
        <div class="col-md-3">
          <input
              type="date"
              class="form-control"
              @change="getData()"
              placeholder="Serach By End Date"
                  name=""
              v-model="end_date"
              style="margin-bottom: 1px;"
            >  
        </div>
        <div class="col-md-3">
          <input
            type="time"
            class="form-control"
            @change="getData()"
            placeholder="Serach By Start Time"
                name=""
            v-model="start_time"
            style="margin-bottom: 1px;"
          >
        </div>
        <div class="col-md-3">
          <input
              type="time"
              class="form-control"
              @change="getData()"
              placeholder="Serach By End Time"
                  name=""
              v-model="end_time"
              style="margin-bottom: 1px;"
            >  
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
              <th>Employee ID</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Start Time</th>
              <th>End Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(value,index) in service_staff" v-bind:key="index">
              <td>{{ index+1 }}</td>
              <td>{{ value.employee_id }}</td>
              <td>{{ value.start_date }}</td>
              <td>{{ value.end_date }}</td>
              <td>{{ value.start_time }}</td>
              <td>{{ value.end_time }}</td>
              <td><button @click="book(value.employee_id, value.id)" class="btn btn-primary btn-sm">Book Now</button></td>
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
      start_date: '',
      end_date: '',
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
            "&start_date=" +
            this.start_date +
            "&end_date=" +
            this.end_date +
            "&start_time=" +
            this.start_time +
            "&end_time=" +
            this.end_time
        )
        .then(response => {
          this.service_staff = []
          for (let i = 0; i < response.data.length; i++) {
            if(response.data[i].data[0]!=undefined)
            this.service_staff.push(response.data[i].data[0])
            //console.log(response.data[i].data)
          }
          //this.service_staff = response.data;
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
    // edit vendor

    editOrganization(id) {
      EventBus.$emit("service-user-edit", id);
    },
    assignSystem(id) {
      EventBus.$emit("assign-system", id);
    },
    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
    deleteOrganization (id) {
      axios.delete(base_url + "service-user/" + id)
        .then(({data}) => {
            location.reload();
            this.$toast.success('System Deleted Successfully !', 'Success',this.notificationSystem.options.success);
        });       
    },
  },

  computed: {

    show() {
      return this.service_staff.data.length >= 1 ? true: false
    }

  }
};
</script>