<template>
  <div class="wrap">
    <div class="modal fade" id="update-system" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-name" id="defaultModalLabel">Update System</h4>
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
                          <input type="text" placeholder="Name of the System here..." class="form-control" v-model="system.name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <select v-model="system.status" class="form-control">
                              <option value="" selected disabled>Please Select Status</option>
                              <option value="Active">Active</option>
                              <option value="Inactive">Inactive</option>
                          </select>
                        </div>
                    </div>              
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <br>
            <button @click="updateSystem" type="button" class="btn btn-success waves-effect">Update</button>
            <button  @click="resetForm()" type="button" class="btn btn-default waves-effect" data-dismiss="modal">CLOSE</button>
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
  name : 'update-system',  
  mixins: [mixin],
  data() {
    return {
      system: {
        id: '',
        name: "",
        status: "",
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
       
     EventBus.$on('system-edit',function(id){
       
       _this.system.id = id;

       _this.getEditData(id);

       $('#update-system').modal('show');


 
     });

      $('#update-system').on('hidden.bs.modal', function(){
            _this.resetForm();
        });

  },

  methods: {
    
    getEditData(id){
     
     axios.get(base_url+'system/'+id+'/edit')

     .then(response => {
      
       
           this.system = {
            id : response.data.id,   
            name: response.data.name,
            status: response.data.status,
          };

     })

    },
    updateSystem() {
        axios.post(base_url + "system/update/"+this.system.id, this.system)

        .then(response => {
          $("#update-system").modal("hide");
          EventBus.$emit("system-added");
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
    
      this.system = {
        id: '',
        name: "",
        status: "",
      };
      this.errors = null; 

    },

  },
};
</script>