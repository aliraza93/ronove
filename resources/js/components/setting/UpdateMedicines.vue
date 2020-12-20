<template>
  <div class="wrap">
    <div class="modal custom-modal fade" id="update-medicine" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Medicine</h5>
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
                    <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" placeholder="Name of the Medicine here..." class="form-control" v-model="medicine.name">
                        </div>
                    </div>             
                </div>
                <div class="submit-section">
                    <button @click="updateMedicine" type="button" class="btn btn-primary submit-btn">Save</button>
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
  name : 'update-medicine',  
  mixins: [mixin],
  data() {
    return {
      medicine: {
        id: '',
        name: "",
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
       
     EventBus.$on('medicine-edit',function(id){
       
       _this.medicine.id = id;

       _this.getEditData(id);

       $('#update-medicine').modal('show');


 
     });

      $('#update-medicine').on('hidden.bs.modal', function(){
            _this.resetForm();
        });

  },

  methods: {
    
    getEditData(id){
     
     axios.get(base_url+'medicine/'+id+'/edit')

     .then(response => {
      
       
           this.medicine = {
            id : response.data.id,   
            name: response.data.name,
          };

     })

    },
    updateMedicine() {
        axios.post(base_url + "medicine/update/"+this.medicine.id, this.medicine)

        .then(response => {
          $("#update-medicine").modal("hide");
          EventBus.$emit("medicine-added");
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
    
      this.medicine = {
        id: '',
        name: "",
      };
      this.errors = null; 

    },

  },
};
</script>