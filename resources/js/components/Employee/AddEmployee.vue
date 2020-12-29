<template>
    <!-- Add Employee Modal -->
    <div id="add-employee" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Employee</h5>
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Employee Type <span class="text-danger">*</span></label>
                                    <select v-model="employee.type" class="form-control">
                                        <option value="">Select Employee Type</option>
                                        <option value="Service Staff">Service Staff</option>
                                        <option value="Service User">Service User</option>
                                    </select>
                                </div>
                            </div>
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
                            <button type="button" @click="addEmployee()" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Employee Modal -->
</template>
<script>

import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";

export default {
  mixins: [mixin],
  data() {
    return {
      employee: {
          first_name: '',
          last_name: '',
          address: '',
          phone: '',
          email: '',
          password: '',
          post_code: '',
          gender: '',
          image: '',
          type: '',
          password_confirmation: ''
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
    onImageChange(e) {
        let file = e.target.files[0];
        let reader = new FileReader();

        if(file['size'] < 2111775)
        {
            reader.onloadend = (file) => {
            //console.log('RESULT', reader.result)
                //this.employee.image = reader.result;
            }
            console.log(this.employee.image)
            this.employee.image = reader.readAsDataURL(file);
        }else{
            alert('File size can not be bigger than 2 MB')
        }
    },
    createImage(file) {
        let reader = new FileReader();
        let vm = this;
        reader.onload = (e) => {
            vm.employee.image = e.target.result;
            console.log(vm.employee.image)
        };
        reader.readAsDataURL(file);
    },
    addEmployee() {
        axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
        axios
        .post(base_url + "employee", this.employee)

        .then(response => {
          $("#add-employee").modal("hide");
          EventBus.$emit("employee-added");
          this.showMessage(response.data);
          this.employee = {
            first_name: '',
            last_name: '',
            address: '',
            phone: '',
            email: '',
            password: '',
            post_code: '',
            gender: '',
            image: '',
            type: '',
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
