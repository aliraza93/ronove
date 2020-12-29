<template>
  <div class="col-md-12">
      <input
        type="text"
        class="form-control"
        v-on:keyup="getData()"
        placeholder="Serach By Day"
            name=""
        v-model="day"
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
                    <th>Day</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Employee</th>
                </tr>
            </thead>
            <tbody v-if="show">
             s <tr v-for="(value,index) in schedule.data" v-bind:key="index">
                <td>{{ index+1 }}</td>
                <td>{{ value.day }}</td>
                <td>{{ value.start_time | moment}}</td>
                <td>{{ value.end_time | moment}}</td>
                <td>{{ employee.first_name }}  {{ employee.last_name }}</td>
              </tr>
            </tbody>
        </table>
          <div class="text-center" style="margin-top: 15px;" v-if="!show">
            <h4>No Schedules Avaialble</h4>
        </div>
    </div>

        <pagination :pageData="schedule"></pagination>
  </div>
</template>

<script>
import { EventBus } from "../../../vue-asset";
import mixin from "../../../mixin";
import Pagination  from '../../pagination/pagination.vue';
import moment from 'moment';

export default {
  mixins: [mixin],
  props: ['employee'],
  components: {
    "pagination": Pagination,
  },

  data() {
    return {
      schedule: [],
      day: '',
      status: '',
      selectedUser: '',
      notificationSchedule: {
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

    EventBus.$on("schedule-added", function() {
      _this.getData();
    });
  },

  methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "employee-schedule-list?page="+
            page+
            "&day=" +
            this.day +
            "&employee_id=" +
            this.employee.id
        )
        .then(response => {
          this.schedule = response.data;
          this.isLoading = false;
        })
        .catch(error => {
          console.log(error);
        });
    },
    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
  },

  computed: {

    show() {
      return this.schedule.data.length >= 1 ? true: false
    }

  },
  filters: {
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
      }
    }
};
</script>