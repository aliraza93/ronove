<template>
    <div class="wrap">
    <div class="modal fade" id="add-system" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="defaultModalLabel">Add System</h4>
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
                          <label>Name of System:</label>
                          <input type="text" placeholder="Name of the System here..." class="form-control" v-model="system.name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label>Status</label>

                          <div class="input-group">
                              <select v-model="system.status" class="form-control">
                                  <option value="" selected disabled>Select Status</option>
                                  <option value="Active">Active</option>
                                  <option value="Inactive">Inactive</option>
                              </select>
                          </div>
                          <!-- /.input group -->
                        </div>
                    </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <br>
            <button @click="addSystem" type="button" class="btn btn-success waves-effect">SAVE</button>
            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">CLOSE</button>
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
      system: {
          name: '',
          status: '',
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
    addSystem() {
      axios
        .post(base_url + "system", this.system)

        .then(response => {
          $("#add-system").modal("hide");
          EventBus.$emit("system-added");
          this.showMessage(response.data)
          this.resetForm();
          location.reload()
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
    
    resetForm(){
    
      this.system = {
        name: "",
        status: "",
      };
      this.errors = null; 

    },
  },

  // end of method section

  created() {}
};
</script>