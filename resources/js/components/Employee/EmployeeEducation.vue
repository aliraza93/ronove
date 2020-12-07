<template>
    <!-- bank_details_modal -->
    <div id="employee-education-modal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Education Details</h5>
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
                                        <label class="col-form-label">Institution <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.institution" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Subject <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.subject" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Start Date <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.start_date" type="Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">End Date <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.end_date" type="Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Degree <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.degree" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Grade <span class="text-danger">*</span></label>
                                        <input class="form-control" v-model="employee.grade" type="text">
                                    </div>
                                </div>
                            </div>    
                            
                        <div class="submit-section">
                                <button type="button" @click="addEducationDetails()" class="btn btn-primary submit-btn">Submit</button>
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
          institution: '',
          subject: '',
          start_date: '',
          end_date: '',
          degree: '',
          grade: '',
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
   
    addEducationDetails() {
        axios
        .post(base_url + "employee-education-details/"+this.id, this.employee)

        .then(response => {
          $("#employee-education-modal").modal("hide");
          EventBus.$emit("employee-added");
          this.showMessage(response.data);
          location.reload()
          this.employee = {
            institution: '',
            subject: '',
            start_date: '',
            end_date: '',
            degree: '',
            grade: '',   
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