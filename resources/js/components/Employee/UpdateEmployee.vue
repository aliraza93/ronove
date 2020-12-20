<template>
  <div class="wrap">
    <div class="modal custom-modal fade" id="update-employee" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Employee</h5>
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
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="employee.first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="employee.last_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="employee.email" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Address <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="employee.address" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Password <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="employee.password" type="password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Confirm Password <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="employee.password_confirmation" type="password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Post Code <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="employee.post_code" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="employee.phone" type="text">
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Employee Type <span class="text-danger">*</span></label>
                                    <select v-model="employee.type" class="form-control">
                                        <option value="">Select Employee Type</option>
                                        <option value="Service Staff">Service Staff</option>
                                        <option value="Service User">Service User</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender <span class="text-danger">*</span></label>
                                    <select v-model="employee.gender" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
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
                            <button type="button" @click="updateEmployee()" class="btn btn-primary submit-btn">Update</button>
                        </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";

export default {
  name : 'update-employee',
  mixins: [mixin],
  data() {
    return {
      employee: {
          id:'',
          first_name: '',
          last_name: '',
          email: '',
          address: '',
          password: '',
          password_confirmation: '',
          phone: '',
          post_code: '',
         gender: '',
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

     EventBus.$on('employee-edit',function(id){

       _this.employee.id = id;

       _this.getEditData(id);

       $('#update-employee').modal('show');



     });

      $('#update-employee').on('hidden.bs.modal', function(){
            _this.resetForm();
        });

  },

  methods: {

    getEditData(id){

     axios.get(base_url+'employee/'+id+'/edit')

     .then(response => {



           this.employee = {
            id : response.data.id,
            first_name: response.data.first_name,
            last_name: response.data.last_name,
            email: response.data. email,
            address: response.data.address,
            post_code: response.data.post_code,
            phone: response.data.phone,
            employee_type: response.data.employee_type,
            gender: response.data.gender
          };

     })

    },
    updateEmployee() {
        axios.post(base_url + "employee/update/"+this.employee.id, this.employee)

        .then(response => {
          $("#update-employee").modal("hide");
          EventBus.$emit("employee-added");
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

      this.employee = {
          id:'',
          first_name: '',
          last_name: '',
          email: '',
          address: '',
          password: '',
          password_confirmation: '',
          phone: '',
          post_code: '',
          employee_type:'',
         gender: '',
      };
      this.errors = null;

    },

  },
};
</script>
