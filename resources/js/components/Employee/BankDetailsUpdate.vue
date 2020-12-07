<template>
    <!-- bank_details_modal -->
    <div id="bank-details-update-modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">UpdateBank Details</h5>
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
                    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Account Name</label>
                                    <input type="text" class="form-control" v-model="employee.account_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sort Code</label>
                                    <input type="text" class="form-control" v-model="employee.sort_code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Account Number</label>
                                    <input type="text" class="form-control" v-model="employee.account_number">
                                </div>
                            </div>
                            
                        
                    <div class="submit-section">
                            <button type="button" @click="updateBankDetails()" class="btn btn-primary submit-btn">Update</button>
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
  props: ['employee_bank_details'],
  data() {
    return {
      employee: {
          id: '',
          account_name: '',
          sort_code: '',
          account_number: '',
          
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
            id: this.employee_bank_details.id,
            account_name: this.employee_bank_details.account_name,
            sort_code: this.employee_bank_details.sort_code,
            account_number: this.employee_bank_details.account_number,
        }
    },
    updateBankDetails() {
        axios
    .post(base_url + "employee-bank-details-update/"+this.employee_bank_details.id, this.employee)

        .then(response => {
          $("#bank-details-update-modal").modal("hide");
          location.reload();
          this.showMessage(response.data);
          location.reload()
          this.employee = {
            id: '',
            account_name: '',
            sort_code: '',
            account_number: '',   
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