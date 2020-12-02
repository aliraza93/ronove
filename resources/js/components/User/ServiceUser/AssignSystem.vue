<template>
  <div class="wrap">
    <div class="modal fade" id="assign-system" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-name" id="defaultModalLabel">Assign System</h4>
          </div>
          <div class="modal-body">
            <div class="alert alert-danger" v-if="errors">
              <ul>
                <li v-for="error in errors" :key="error">{{ error[0] }}</li>
              </ul>
            </div>
            <form>
                <div class="row" id="row" v-for="(value,index) in systems" v-bind:key="index">
                    <div class="col-md-10">
                        <a>
                            <h4><i class="fa fa-align-justify  m-r-5"></i>{{value.name}}</h4>
                        </a>
                    </div>
                    <input type="text" hidden="" value="32" name="system0">
                    <div class="col-md-2">
                        <label class="switch">
                            <input type="checkbox" :value="value.id" v-model="system_ids" checked>
                            <span class="slider round"></span>
                          </label>
                    </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <br>
            <button @click="assignSystem" type="button" class="btn btn-success waves-effect">Save</button>
            <button  @click="resetForm()" type="button" class="btn btn-default waves-effect" data-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { EventBus } from "../../../vue-asset";
import { ToggleButton } from 'vue-js-toggle-button'
import mixin from "../../../mixin";

export default {
  name : 'assign-system',  
  mixins: [mixin],
  components: {
    "toggle-button": ToggleButton
  },
  data() {
    return {
      systems: {},
      organization_id: '',
      system_ids: [],
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
       
     EventBus.$on('assign-system',function(id){
       
       _this.organization_id = id;

       _this.getEditData(id);

       $('#assign-system').modal('show');


 
     });

      $('#assign-system').on('hidden.bs.modal', function(){
            _this.resetForm();
        });

  },

  methods: {
    
    getEditData(id){
     
     axios.get(base_url+'assign/'+id)

     .then(response => {
         this.systems = response.data.systems
         //this.system_idsresponse.data.ids
         //console.log(response.data.ids)
         for (var ids in response.data.ids) {
            this.system_ids.push(response.data.ids[ids]);
        }
     })

    },
    assignSystem() {
        if(this.system_ids != '') {
            //axios.post(base_url + "assign/update/"+this.organization_id+'/'+this.system_ids, this.systems)
            axios.post(base_url + "assign/update/"+this.organization_id+'/'+this.system_ids)
            .then(response => {
                console.log(this.organization_id)
                $("#assign-system").modal("hide");
                EventBus.$emit("system-added");
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
            this.$toast.info('Please Assign At Least One Sytsem', "Error Alert", this.notificationSystem.options.error);
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
    
      this.systems = {
        id: '',
        name: "",
      };
      this.errors = null; 

    },

  },
};
</script>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
