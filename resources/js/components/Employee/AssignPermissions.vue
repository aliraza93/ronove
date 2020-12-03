<template>
  <div class="wrap">
    <div class="modal fade" id="assign-permissions" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-name" id="defaultModalLabel">Assign Permissions</h4>
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
                        <div class="table-responsive">
                            <table class="table table-condensed table-hover">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Permission Names</th>
                                    <th>
                                        Select All
                                        <input type="checkbox" @click="selectAll" v-model="allSelected">
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(value,index) in permissions" v-bind:key="index">
                                        <td>{{ index+1 }}</td>
                                        <td>{{ value.name }}</td>
                                        <td><input type="checkbox" v-model="permission_ids" @click="select" :value="value.id"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>              
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <br>
            <button @click="assignPermissions" type="button" class="btn btn-success waves-effect">Save</button>
            <button  @click="resetForm()" type="button" class="btn btn-default waves-effect" data-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { EventBus } from "../../vue-asset";
import { ToggleButton } from 'vue-js-toggle-button'
import mixin from "../../mixin";

export default {
  name : 'assign-permissions',  
  mixins: [mixin],
  components: {
    "toggle-button": ToggleButton
  },
  data() {
    return {
      permissions: {},
      perm: '',
      employee_id: '',
      permission_ids: [],
      selected: [],
      allSelected: false,
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
       
     EventBus.$on('assign-permissions',function(id){
       
       _this.employee_id = id;

       _this.getEditData(id);

       $('#assign-permissions').modal('show');


 
     });

      $('#assign-permissions').on('hidden.bs.modal', function(){
            _this.resetForm();
        });

  },

  methods: {
    
    getEditData(id){
     
     axios.get(base_url+'assign-permissions/'+id)

     .then(response => {
         this.permissions = response.data.permissions
         //this.permission_idsresponse.data.ids
         //console.log(response.data.ids)
         for (var ids in response.data.ids) {
            this.permission_ids.push(response.data.ids[ids]);
        }
     })

    },
    selectAll: function() {
        this.permission_ids = [];

        if (!this.allSelected) {
            for (var permission in this.permissions) {
                this.permission_ids.push(this.permissions[permission].id);
            }
        }
    },
    select: function() {
        this.allSelected = false;
    },
    assignPermissions() {
        if(this.permission_ids != '') {
            //axios.post(base_url + "assign/update/"+this.employee_id+'/'+this.permission_ids, this.permissions)
            axios.post(base_url + "assign-permissions/update/"+this.employee_id+'/'+this.permission_ids)
            .then(response => {
                console.log(this.employee_id)
                $("#assign-permissions").modal("hide");
                EventBus.$emit("employee-added");
                this.showMessage(response.data)
            })
            .catch(err => {
            if (err.response) {
                this.errors = err.response.data.errors;
                this.showMessage(err.response.data)
                //this.$toast.error("Something Went Wrong", 'Error', { timeout: 3000 } );
            }
            });
        }
        else{
            this.$toast.info('Please Assign At Least One Permission', "Error Alert", this.notificationSystem.options.error);
        }
    },
    showMessage(data) {
      if (data.status  == "success") {
          this.$toast.success(data.message, 'Success Alert', this.notificationSystem.options.success );
      } else {
          this.$toast.error(data.message, "Error Alert", this.notificationSystem.options.error);
      }
    },
    resetForm(){
    
      this.permissions = {
        id: '',
        name: "",
      };
      this.errors = null; 

    },

  },
};
</script>