<template>

    <!-- Education_experiense_modal -->
    <div id="employee-training-modal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Training Details</h5>
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
                                <button type="button" @click="addTrainingEducationDetails()" class="btn btn-primary submit-btn">Submit</button>
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
  props: ['id'],
  data() {
    return {
      employee: {
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

  methods: {
   
    addTrainingEducationDetails() {
        axios
        .post(base_url + "employee-training-details/"+this.id, this.employee)

        .then(response => {
          $("#employee-training-modal").modal("hide");
          EventBus.$emit("employee-added");
          this.showMessage(response.data);
          location.reload()
          this.employee = {
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

  // end of method section

  created() {}
};
</script>