<template>
  <div class="wrap">
    <!-- Add ServiceUser Modal -->
    <div id="update-service-user" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Service User</h5>
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
                            <button type="button" @click="updateServiceUser()" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add ServiceUser Modal -->
  </div>
</template>

<script>
import { EventBus } from "../../../vue-asset";
import mixin from "../../../mixin";
import Datepicker from 'vuejs-datepicker';

export default {
  name : 'update-service-user',  
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

  
  created(){

      var _this = this;
       
     EventBus.$on('service-user-edit',function(id){
       
       _this.service_user.id = id;

       _this.getEditData(id);

       $('#update-service-user').modal('show');


 
     });

      $('#update-service-user').on('hidden.bs.modal', function(){
            _this.resetForm();
        });

  },

  methods: {
    
    getEditData(id){
     
     axios.get(base_url+'service-user/'+id+'/edit')

     .then(response => {
      
       
           this.service_user = {
            id : response.data.id,   
            salutation: response.data.salutation,
            first_name: response.data.first_name,
            last_name: response.data.last_name,
            address: response.data.address,
            phone: response.data.phone,
            email: response.data.email,
            dob: response.data.dob,
            post_code: response.data.post_code,
          };

     })

    },
    updateServiceUser() {
        axios.post(base_url + "service-user/update/"+this.service_user.id, this.service_user)

        .then(response => {
          $("#update-service-user").modal("hide");
          EventBus.$emit("service-user-added");
          this.showMessage(response.data)
          this.resetForm();
        })
        .catch(err => {
          if (err.response) {
            this.errors = err.response.data.errors;
            this.showMessage(err.response.data)
            //this.$toast.error("Something Went Wrong", 'Error', { timeout: 3000 } );
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
    resetForm(){
    
      this.service_user = {
        id: '',
        name: '',
        address: '',
        phone: '',
        email: '',
        password: '',
        code: '',
        status: '',
        password_confirmation: ''
      };
      this.errors = null; 

    },

  },
};
</script>