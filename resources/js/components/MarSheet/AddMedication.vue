<template>
    <!-- Add Medication Modal -->
    <div id="add-medication" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Medication</h5>
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
                        <span class="text-center">R = Refused, D = Destroyed, S = Sleeping, N = Nausea/Vomiting, O = Other F=Family X=not required</span>
                        <table class="table table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>Details</th>
                                    <th>Time</th>
                                    <th v-for="(value,index) in dayz" v-bind:key="index">{{ value }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(value,index) in time" v-bind:key="index">
                                    <td>{{ mar_sheet.medicine }} <br> {{ mar_sheet.route }} <br> {{ mar_sheet.dosage }}</td>
                                    <td>{{ value }}</td>
                                    <td v-for="(value,index2) in dayz" v-bind:key="index2">
                                        <select v-model="medication" class="form-control">
                                            <option value="">Select</option>
                                            <option value="R">R</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                            <option value="N">N</option>
                                            <option value="O">O</option>
                                            <option value="F">F</option>
                                            <option value="X">X</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="submit-section">
                        <button type="button" @click="addMedication()" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
          </div>
      </div>
  </div>
</template>
<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";
import moment from 'moment';

export default {
  name : 'add-medication',  
  mixins: [mixin],
  data() {
    return {
      mar: {
          id: '',
          name: '',
          address: '',
          phone: '',
          email: '',
          password: '',
          code: '',
          status: '',
          password_confirmation: ''
      },
      mar_sheet: {
          medicine: '',
          dosage: '',
          start_date: '',
          end_date: '',
          route: '',
          instructions: '',
          added_by: ''
      },
      time: '',
      days: '',
      dayz: 0,  
      medication: [],
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
       
     EventBus.$on('show-medication',function(value, time, days){
         _this.time = time.split(',');
         _this.days = days.split(',');
       _this.mar_sheet = value;
       _this.mar.id = value.id;

       _this.getEditData(value.id);

       $('#add-medication').modal('show');

        var a = moment(value.end_date);
        var b = moment(value.start_date);
       // _this.dayz = a.diff(b, 'days')   // =1
        _this.dayz = 10;
     });

      $('#add-medication').on('hidden.bs.modal', function(){
            _this.resetForm();
        });

  },

  methods: {
    
    getEditData(id){
     axios.get(base_url+'medication/'+id+'/edit')

     .then(response => {
      
       
           this.mar = {
            id : response.data.id,   
            name: response.data.name,
            status: response.data.status,
            address: response.data.address,
            phone: response.data.phone,
            email: response.data.email,
            password: response.data.password,
            code: response.data.code,
            password_confirmation: response.data.password
          };

     })

    },
    updateOrganization() {
        axios.post(base_url + "medication/update/"+this.mar.id, this.mar)

        .then(response => {
          $("#add-medication").modal("hide");
          EventBus.$emit("medication-added");
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
    
      this.mar = {
        id: '',
        name: '',
        address: '',
        phone: '',
        email: '',
        password: '',
        code: '',
        status: '',
        password_confirmation: ''
      };
      this.errors = null; 

    },

  },
};
</script>