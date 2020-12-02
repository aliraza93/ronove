<template>
    <div class="col-md-12">
      <input
        type="text"
        class="form-control"
        v-on:keyup="getData()"
        placeholder="Serach By Medicine Name"
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
              <th>Medication Name</th>
              <th>Dosage</th>
              <th>Start Date</th>
              <th>End date</th>
              <th>Route</th>
              <th>Instructions</th>
              <th>Time To Give</th>
              <th>Days To Give</th>
              <th>Added By</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody v-if="show">
            <tr v-for="(value,index) in mars" v-bind:key="index">
              <td>{{ index+1 }}</td>
              <td>{{ value.medicine }}</td>
              <td>{{ value.dosage }}</td>
              <td>{{ value.start_date }}</td>
              <td>{{ value.end_date }}</td>
              <td>{{ value.route }}</td>
              <td>{{ value.instructions }}</td>
              <td>{{ time }}</td>
              <td>{{ days }}</td>
              <td>{{ value.added_by }}</td>
              <td>
                <div class="dropdown dropdown-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(65px, -2px, 0px);">
                        <a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" @click="showMedication(value, time, days)"><i class="fa fa-plus"></i> Add Medication</a>
                        <a class="dropdown-item" href="#" @click="assignPermissions(value.id)"><i class="la la-check-circle m-r-5"></i> Permissions</a>
                    </div>
                </div>
            </td>
            </tr>
          </tbody>
        </table>
        <div class="text-center" style="margin-top: 15px;" v-if="!show">
            <h4>No MAR Sheets Avaialble</h4>
        </div>
      </div>

        <pagination :pageData="mar"></pagination>

      <div class="row">
        <add-medication></add-medication>
      </div>
  </div>
</template>
<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";

import AddMedication from "./AddMedication.vue";
import Pagination  from '../pagination/pagination.vue';

export default {
  mixins: [mixin],
  props: ['mars', 'time', 'days'],
  components: {
    'add-medication' : AddMedication,
    "pagination": Pagination,
  },

  data() {
    return {
      mar: [],
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
  mounted() {

  },
  created() {
    var _this = this;
    this.getData();

    EventBus.$on("mar-added", function() {
      _this.getData();
    });
  },

  methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "mar-sheet-list?page="+
            page+
            "&name=" +
            this.name
        )
        .then(response => {
          // console.log(response.data);

          this.mar = response.data;
          this.isLoading = false;
        })
        .catch(error => {
          console.log(error);
        });
    },

    // edit vendor

    editSystem(id) {
      EventBus.$emit("mar-edit", id);
    },
    showMedication(value, time, days) {
      EventBus.$emit("show-medication", value, time, days);
    },
    pageClicked(pageNo) {
      var vm = this;
      vm.getData(pageNo);
    },
    deleteSystem (id) {
      axios.delete(base_url + "mar-sheet/" + id)
        .then(({data}) => {
            EventBus.$emit("mar-added");
            this.$toast.success('System Deleted Successfully !', 'Success',this.notificationSystem.options.success);
        });       
    }
  },

  computed: {

    show() {
      return this.mar.data.length >= 1 ? true: false
    }

  }
};
</script>