<template>
    <!-- Add Client Modal -->
    <div id="add-client" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Client</h5>
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
                                    <input class="form-control" v-model="client.first_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="client.last_name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="client.email" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Address <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="client.address" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Company <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="client.company" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Company Registration Number <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="client.company_register" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Unique Tax Refference Number <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="client.unique_tax_reference" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Charity Number <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="client.charity" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Post Code <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="client.post_code" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone <span class="text-danger">*</span></label>
                                    <input class="form-control" v-model="client.phone" type="text">
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
                            <button type="button" @click="addClient()" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Client Modal -->
</template>
<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";

export default {
  mixins: [mixin],
  data() {
    return {
      client: {
          first_name: '',
          last_name: '',
          address: '',
          phone: '',
          email: '',
          company: '',
          post_code: '',
          company_register: '',
          unique_tax_reference: '',
          charity: ''
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
    addClient() {
        axios
        .post(base_url + "client", this.client)

        .then(response => {
          $("#add-client").modal("hide");
          EventBus.$emit("client-added");
          this.showMessage(response.data);
          this.client = {
            first_name: '',
            last_name: '',
            address: '',
            phone: '',
            email: '',
            company: '',
            post_code: '',
            company_register: '',
            charity: '',
            unique_tax_reference: '',
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