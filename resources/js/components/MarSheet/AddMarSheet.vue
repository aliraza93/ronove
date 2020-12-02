<template>
    <!-- Add MAR Sheet Modal -->
    <div id="add-mar-sheet" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add MAR Sheet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" v-if="errors">
                    <ul>
                        <li v-for="error in errors" :key="error">{{ error[0] }}</li>
                    </ul>
                    </div>
                <form>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Medicine Name</label>
                                <select class="select form-control" v-model="mar.medicine">
                                  <!--
                                    <option value="" disabled selected>Please Choose Medicine Name</option>
                                    <option v-for="(value,index) in medicines" :key="index">
                                        {{ value.name }}
                                    </option>
                                  -->
                                    <option value="" disabled selected>Choose Medicine</option>
                                    <option value="Test">Test</option>
                                    <option value="Test2">Test2</option>
                                    <option value="Test3">Test3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Dosage</label>
                                    <select class="select form-control" v-model="mar.dosage">
                                    <!--
                                    <option value="" disabled selected>Please Choose Dosage</option>
                                    <option v-for="(value,index) in dosages" :key="index">
                                        {{ value.dosage }}
                                    </option>
                                    -->
                                    <option value="" disabled selected>Choose Medicine</option>
                                    <option value="Dosage">Dosage</option>
                                    <option value="Dosage2">Dosage2</option>
                                    <option value="Dosage3">Dosage3</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Start Date</label>
                                <datepicker style="width: 100%;" :disabled-dates="state.disabledDates" placeholder="Please Select Start Date" :bootstrap-styling="true" v-model="mar.start_date"></datepicker>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">End Date</label>
                                <datepicker style="width: 100%;" :disabled-dates="state.disabledDates" placeholder="Please Select End Date" :bootstrap-styling="true" v-model="mar.end_date"></datepicker>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Route</label>
                                <!--
                                    <select class="select form-control" v-model="mar.route">
                                    <option value="" disabled selected>Please Choose Route</option>
                                    <option v-for="(value,index) in routes" :key="index">
                                        {{ value.routes }}
                                    </option>
                                    </select>
                                -->
                                <select class="select form-control" v-model="mar.route">
                                    <!--
                                    <option value="" disabled selected>Please Choose Dosage</option>
                                    <option v-for="(value,index) in dosages" :key="index">
                                        {{ value.dosage }}
                                    </option>
                                    -->
                                    <option value="" disabled selected>Choose Route</option>
                                    <option value="Route">Route</option>
                                    <option value="Route2">Route2</option>
                                    <option value="Route3">Route3</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Time To Give</label>
                                <select class="multi selectpicker form-control" multiple data-live-search="true" v-model="mar.time">
                                    <option value="" disabled selected>Please Choose Time</option>
                                    <option value="AM">AM</option>
                                    <option value="Lunch">Lunch</option>
                                    <option value="PM">PM</option>
                                    <option value="Dinner">Dinner</option>
                                </select>  
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Days To Give</label>
                                <select class="multi selectpicker form-control" multiple data-live-search="true" v-model="mar.days">
                                    <option value="" disabled selected>Please Choose Days</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" v-model="mar.instructions" placeholder="Instructions"></textarea>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button type="button" @click="addMar()" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
          </div>
      </div>
  </div>
</template>
<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";
import Datepicker from 'vuejs-datepicker';

export default {
  mixins: [mixin],
  props: ['user'],
  components: {
      Datepicker,
  },
  mounted: function () {
      //console.log('Component Mounted')
      //this.showMessage('Component mounted')
      
  },
  data() {
    return {
      mar: {
          medicine: '',
          dosage: '',
          start_date: '',
          end_date: '',
          route: '',
          time: [],
          days: [],
          instructions: '',
          added_by: ''    
      },
      state: {
        disabledDates: {
            to: new Date(), // Disable all dates up to specific date
            // Disable Saturday's and Sunday's
            // a custom function that returns true if the date is disabled
            // this can be used for wiring you own logic to disable a date if none
            // of the above conditions serve your purpose
            // this function should accept a date and return true if is disabled
            customPredictor: function() {
                // disables the date if it is a multiple of 5
                //if(this.day[i]Time.mon_start_time == '' || this.dayTime.mon_end_time == ''){
                //    return true
                //}
            }
        }
      },
      errors: null,
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
    this.mar.added_by = this.user.id
  },
  methods: {
    addMar() {
      axios
        .post(base_url + "mar-sheet", this.mar)

        .then(response => {
          $("#add-mar-sheet").modal("hide");
          EventBus.$emit("mar-added");
          location.reload();
          this.showMessage(response.data);
          this.mar = {
              medicine: '',
              dosage: '',
              start_date: '',
              end_date: '',
              route: '',
              time: [],
              days: [],
              instructions: '',
              added_by: ''    
          };
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
  },

  // end of method section

  
};
</script>