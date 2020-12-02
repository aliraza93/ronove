<template>
    <!-- Add ServiceUser Modal -->
    <div id="add-service-user" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Service User</h5>
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Salutation <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="service_user.salutation" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="service_user.first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="service_user.last_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="service_user.email" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Address <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="service_user.address" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Date Of Birth <span class="text-danger">*</span></label>
                                    <datepicker style="width: 100%;" :disabled-dates="state.disabledDates" placeholder="Enter Date of Birth" :bootstrap-styling="true" v-model="service_user.dob"></datepicker>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Post Code <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="service_user.post_code" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="service_user.phone" type="text">
                                </div>
                            </div>
                            
                        </div>
                        <!--
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="image" v-on:change="onImageChange" class="form-control">
                                </div>
                            </div>
                        -->
                        <div class="submit-section">
                            <button type="button" @click="addServiceUser()" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add ServiceUser Modal -->
</template>
<script>
import { EventBus } from "../../../vue-asset";
import mixin from "../../../mixin";
import Datepicker from 'vuejs-datepicker';

export default {
  mixins: [mixin],
  components: {
    Datepicker
  },
  data() {
    return {
      service_user: {
          salutation: '',
          first_name: '',
          last_name: '',
          address: '',
          phone: '',
          email: '',
          dob: '',
          post_code: '',
      },
        state: {
            disabledDates: {
                from: new Date(), // Disable all dates up to specific date
                days: [],
                dates: [
                    
                ], 
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

  methods: {
    addServiceUser() {
        axios
        .post(base_url + "service-user", this.service_user)

        .then(response => {
          $("#add-service-user").modal("hide");
          EventBus.$emit("service-user-added");
          this.showMessage(response.data);
          this.service_user = {
                salutation: '',
                first_name: '',
                last_name: '',
                address: '',
                phone: '',
                email: '',
                dob: '',
                post_code: ''
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

  created() {}
};
</script>