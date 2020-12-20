<template>
  <div class="wrap">
    <div class="modal custom-modal fade" id="add-organization" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Organization</h5>
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
                    <div class="col-md-6">
                          <div class="form-group">
                            <label>Name of Organization:</label>
                            <input type="text" placeholder="Name" class="form-control" v-model="organization.name">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>Address</label>
                            <input type="text" placeholder="Address" class="form-control" v-model="organization.address">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>Phone:</label>
                            <input type="text" placeholder="Phone" class="form-control" v-model="organization.phone">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" placeholder="Email" class="form-control" v-model="organization.email">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>Password:</label>
                            <input type="password" placeholder="Password" class="form-control" v-model="organization.password">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>Confirm Password:</label>
                            <input type="password" placeholder="Password" class="form-control" v-model="organization.password_confirmation">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>Organization Code</label>
                            <input type="text" placeholder="Organization Code" class="form-control" v-model="organization.code">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>Status</label>

                            <div class="input-group">
                                <select v-model="organization.status" class="form-control">
                                    <option value="" selected disabled>Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                            <!-- /.input group -->
                          </div>
                      </div>
                  </div>
                  <div class="submit-section">
                      <button @click="addOrganization" type="button" class="btn btn-primary submit-btn">Submit</button>
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
  mixins: [mixin],
  data() {
    return {
      organization: {
          name: '',
          address: '',
          phone: '',
          email: '',
          password: '',
          code: '',
          status: '',
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
    addOrganization() {
      axios
        .post(base_url + "organization", this.organization)

        .then(response => {
          $("#add-organization").modal("hide");
          EventBus.$emit("organization-added");
          this.showMessage(response.data);
          this.organization = {
              name: '',
              address: '',
              phone: '',
              email: '',
              password: '',
              code: '',
              status: '',
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