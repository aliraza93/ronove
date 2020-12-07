<template>
    <!-- Employee_educaiton_update_details_modal -->
    <div id="employee-training-update" class="modal custom-modal fade" role="dialog">
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
                                        <input class="form-control" v-model="employee.companies_name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Location<span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.company_location" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Training Course <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.training_course" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Period From <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.periods_from" type="Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Period To <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.periods_to" type="Date">
                                    </div>
                                </div>
                            </div>    
                            
                            <div class="submit-section">
                                <button type="button" @click="updateTrainingEducationDetails()" class="btn btn-primary submit-btn">Update</button>
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
  props: ['employee_training'],
  data() {
    return {
      employee: {
          id:'',
          companies_name: '',
          company_location: '',
          training_course: '',
          periods_from: '',
          periods_to: '',
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
        id : this.employee_training.id,   
        companies_name: this.employee_training.companies_name,
        company_location: this.employee_training.company_location,
        training_course: this.employee_training.training_course,
        periods_from: this.employee_training.periods_from,
        periods_to: this.employee_training.periods_to,
        }
    },
    updateTrainingEducationDetails() {
        axios
        .post(base_url + "employee-training-update/"+this.employee_training.id, this.employee)

        .then(response => {
          $("#employee-training-update").modal("hide");
          EventBus.$emit("employee-added");
          this.showMessage(response.data);
          location.reload()
          this.employee = {
            id:'',
            companies_name: '',
            company_location: '',
            training_course: '',
            periods_from: '',
            periods_to: '',
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