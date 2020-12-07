<template>
    <!-- Employee_educaiton_update_details_modal -->
    <div id="employee-present-update" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Present & Pervious Experience</h5>
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
                                            <label class="col-form-label">Company Name  <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.company_name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Company Address<span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.company_address" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Job Position <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.job_position" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Period From <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.period_from" type="Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Period To <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.period_to" type="Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Is this your current job? <span class="text-danger">*</span></label>
                                        <input  v-model="employee.job_current" type="checkbox">
                                    </div>
                                </div>
                            </div>    
                            
                        <div class="submit-section">
                                <button type="button" @click="updatePresentEducation()" class="btn btn-primary submit-btn">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>

</template>
<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";

export default {
  mixins: [mixin],
  props: ['employee_present'],
  data() {
    return {
      employee: {
          id:'',
          company_name: '',
          company_address: '',
          job_position: '',
          period_from: '',
          period_to: '',
          job_current: '',
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
        this.getEditData()
      
    },
  methods: {
   getEditData(){
     
        this.employee = {
        id : this.employee_present.id,   
        company_name: this.employee_present.company_name,
        company_address: this.employee_present.company_address,
        job_position: this.employee_present.job_position,
        period_from: this.employee_present.period_from,
        period_to: this.employee_present.period_to,
        job_current: this.employee_present.job_current,
        
        }
    },
    updatePresentEducation() {
        axios
        .post(base_url + "employee-present-update/"+this.employee_present.id, this.employee)

        .then(response => {
          $("#employee-present-update").modal("hide");
          EventBus.$emit("employee-added");
          this.showMessage(response.data);
          location.reload()
          this.employee = {
            company_name: '',
            company_address: '',
            job_position: '',
            period_from: '',
            period_to: '',
            job_current: '',
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
};
</script>