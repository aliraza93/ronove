<template>
<div class="modal custom-modal fade" id="add-folder" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Folder</h5>
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
                            <label>Name of Folder:</label>
                            <input type="text" placeholder="Name of the Folder here..." class="form-control" v-model="folder.name">
                          </div>
                      </div>
                  </div>
                  <div class="submit-section">
                      <button @click="addFolder" type="button" class="btn btn-primary submit-btn">Submit</button>
                  </div>
              </form>
            </div>
        </div>
      </div>
</div>
</template>
<script>
import { EventBus } from "../../../vue-asset";
import mixin from "../../../mixin";

export default {
  mixins: [mixin],
  data() {
    return {
      folder: {
          name: '',
      },
      folder_id: '',
      parent_id: '',
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
    EventBus.$on('create-folder',function(id, folder_id){
      _this.parent_id = id;
      _this.folder_id = folder_id;
     });
  },

  methods: {
    addFolder() {
      axios
        .post(base_url + "folders/" + this.parent_id, this.folder)

        .then(response => {
          $("#add-folder").modal("hide");
          EventBus.$emit("show-files", this.folder_id);
          this.showMessage(response.data)
          this.resetForm();
          //location.reload()
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
    
      this.folder = {
        name: "",
      };
      this.errors = null; 

    },
  },
};
</script>