<template>
<div class="modal custom-modal fade" id="upload-files" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Files</h5>
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
                          <vue-dropzone ref="myVueDropzone" v-on:vdropzone-sending="sendingEvent" id="dropzone" :options="dropzoneOptions"></vue-dropzone>
                      </div>
                  </div>
                  <div class="submit-section">
                      <button @click="triggerSend" type="button" class="btn btn-primary submit-btn">Submit</button>
                  </div>
              </form>
            </div>
        </div>
      </div>
</div>
</template>
<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

export default {
  mixins: [mixin],
    components: {
    vueDropzone: vue2Dropzone
  },
  data() {
    return {
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
      dropzoneOptions: {
          autoProcessQueue: false,
          url: base_url + 'files-upload',
          thumbnailWidth: 150,
          maxFilesize: 5,
          headers: {
                "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
               }
      }
    };
  },
  created(){
    var _this = this;
    EventBus.$on('create-folder',function(id){
       _this.parent_id = id;
     });
  },

  methods: {
    triggerSend() {
      this.$refs.myVueDropzone.processQueue();
      $('#upload-files').modal('hide');
      this.$toast.success('Your files have been uploaded successfully!', 'Success Alert', this.notificationSystem.options.success );
      //EventBus.$emit("show-files", this.parent_id);
    },
    sendingEvent(file, xhr, formData) {
      formData.append("folder_id", this.parent_id);
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