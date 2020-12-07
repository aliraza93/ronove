<template>
  <div class="wrap">
    <div class="modal fade" id="update-client" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-name" id="defaultModalLabel">Update client</h4>
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
                            <button type="button" @click="updateClient()" class="btn btn-primary submit-btn">Submit</button>
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
  name : 'update-client',
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


  created(){

      var _this = this;

     EventBus.$on('client-edit',function(id){

       _this.client.id = id;

       _this.getEditData(id);

       $('#update-client').modal('show');



     });

      $('#update-client').on('hidden.bs.modal', function(){
            _this.resetForm();
        });

  },

  methods: {

    getEditData(id){

     axios.get(base_url+'client/'+id+'/edit')

     .then(response => {



           this.client = {
            id : response.data.id,
            first_name: response.data.first_name,
            last_name: response.data.last_name,
            email: response.data. email,
            address: response.data.address,
            post_code: response.data.post_code,
            phone: response.data.phone,
            company: response.data.company,
            company_register: response.data.company_register,
            unique_tax_reference: response.data.unique_tax_reference,
            charity: response.data.charity
          };

     })

    },
    updateClient() {
        axios.post(base_url + "client/update/"+this.client.id, this.client)

        .then(response => {
          $("#update-client").modal("hide");
          EventBus.$emit("client-added");
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

      this.client= {
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
      this.errors = null;

    },

  },
};
</script>
