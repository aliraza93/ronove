<template>
<div class="file-cont-wrap" style="width: 100%">
    <div class="file-cont-inner">
        <div class="file-cont-header row">
            <div class="file-options">
                <a href="javascript:void(0)" id="file_sidebar_toggle" class="file-sidebar-toggle">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <span>File Manager</span>
            <div class="file-options col-md-6" v-if="folder.id">
                <span class="btn-file">
                    <a href="#" class="btn add-btn btn-sm" data-toggle="modal" data-target="#add-folder"><i class="fa fa-plus"></i> Create Folder</a>
                </span>
                <span class="btn-file">
                    <a href="#" class="btn add-btn btn-sm" data-toggle="modal" data-target="#upload-files"><i class="fa fa-upload"></i> Upload Files</a>
                </span>
            </div>
        </div>
        <div class="file-content">
            <form class="file-search">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <i class="fa fa-search"></i>
                    </div>
                    <input
                        type="text"
                        class="form-control"
                        v-on:keyup="getData()"
                        placeholder="Serach By Name"
                            name=""
                        v-model="name"
                    >
                </div>
            </form>
            <div class="file-body">
                <div class="file-scroll">
                    <div class="file-content-inner">
                        <h4>Files & Folders</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="margin-top: 20px;" class="loading" v-if="isLoading">
                                    <h2 style="text-align:center">Loading.......</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row row-sm" v-if="show">
                            <div v-for="(children,index) in children" v-bind:key="index" class="col-md-4">
                                <div class="card card-file">
                                    <div class="dropdown-file">
                                        <a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" @click="showFolderContents(children)" class="dropdown-item">View Details</a>
                                            <a href="#" @click="sendFolderInfo(children)" class="dropdown-item" data-toggle="modal" data-target="#rename-folder">Rename</a>
                                            <a href="#" @click="deleteFolder(children)" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                    <div class="card-file-thumb">
                                        <a href="#" @click="showFolderContents(children)">
                                            <i class="fa fa-folder"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6><a href="#" @click="showFolderContents(children)">{{ children.name }}</a></h6>
                                    </div>
                                    <div class="card-footer">
                                        <vue-moments-ago prefix="Created" suffix="ago" :date="children.created_at"></vue-moments-ago>
                                    </div>
                                </div>
                            </div>
                            <div v-for="(file,index) in files" v-bind:key="index + Math.random()" class="col-md-4">
                                <div class="card card-file">
                                    <div class="dropdown-file">
                                        <a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">View Details</a>
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a :href="'download-file/' + file.id" class="dropdown-item">Download</a>
                                            <a class="dropdown-item" href="#" @click="sendInfo(file)" data-toggle="modal" data-target="#rename-file">Rename</a>
                                            <a href="#" @click="deleteFile(file)" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                    <div class="card-file-thumb">
                                        <img v-if="file.mime_type === 'image/png' || 'image/jpeg' " :src="file.thumbnail" alt="">
                                        <i v-else :class="file.mime_type === 'image/png' ?  'fa fa-file-image-o' : 'fa fa-file' "></i>
                                    </div>
                                    <div class="card-body">
                                        <h6><a href="">{{ file.file_name }}</a></h6>
                                        <span>{{file.size | prettyBytes}}</span>
                                    </div>
                                    <div class="card-footer">
                                        <vue-moments-ago prefix="Uploaded" suffix="ago" :date="file.created_at"></vue-moments-ago>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row" v-if="!show">
                            <div class="col-md-12">
                                <div class="text-center" style="margin-top: 15px;">
                                    <h4>No Files Avaialble</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <add-folder></add-folder>
            <upload-files></upload-files>
            <div class="modal custom-modal fade" id="rename-file" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Rename File</h5>
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
                                        <label>File Name:</label>
                                        <input type="text" placeholder="Name of the File here..." class="form-control" v-model="file_name">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button @click="renameFile(selectedFile)" type="button" class="btn btn-primary submit-btn">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal custom-modal fade" id="rename-folder" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Rename Folder</h5>
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
                                        <label>Folder Name:</label>
                                        <input type="text" placeholder="Name of the Folder here..." class="form-control" v-model="folder_name">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button @click="renameFolder(selectedFolder)" type="button" class="btn btn-primary submit-btn">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";
import UploadFiles from './UploadFiles.vue';
import VueMomentsAgo from 'vue-moments-ago'

export default {
  components: { UploadFiles, VueMomentsAgo },  
  mixins: [mixin],
  data() {
    return {
      folder: [],
      files: [],
      children: [],
      file_id: '',
      file_name: '',
      folder_name: '',
      name: '',
      selectedFile: '',
      selectedFolder: '',
      errors: null,
      isLoading: null,
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
    
    EventBus.$on('show-files',function(id){
       _this.file_id = id;
       _this.getFiles(id);
 
     });
  },

  methods: {
    getData(page = 1) {
      this.isLoading = true;
      axios
        .get(
          base_url +
            "files-list?page="+
            page+
            "&name=" +
            this.name
        )
        .then(response => {
          // console.log(response.data.data);

          this.project = response.data;
          this.isLoading = false;
        })
        .catch(error => {
          console.log(error);
        });
    },
    getFiles(id){
        this.isLoading = true;
        axios.get(base_url+'files-show/'+id)

        .then(response => {
            this.folder = response.data.folder
            this.children = response.data.children
            this.files = response.data.folder.files
            this.isLoading = false;
            this.sendId(this.folder.project_id, this.folder.id)
        })

    },
    showFolderContents(child) {
        this.isLoading = true;
        axios.get(base_url+'folder-content-show/'+child.id)

        .then(response => {
            this.folder = response.data.folder
            this.children = response.data.children
            this.files = response.data.folder.files
            this.isLoading = false;
            this.sendId(this.folder.project_id, this.folder.id)
        })
    },
    sendInfo(value) {
        this.selectedFile = value;
    },
    sendFolderInfo(value) {
        this.selectedFolder = value;
    },
    renameFile(file) {
      axios
        .post(base_url + "rename-file/" + file.id + '/' + this.file_name, file)

        .then(response => {
          $("#rename-file").modal("hide");
          EventBus.$emit("show-files", this.file_id);
          this.showMessage(response.data)
          this.resetForm();
          //location.reload()
          this.selectedFile = ''
          this.errors = null;
          
        })
        .catch(err => {
          if (err.response) {
            this.errors = err.response.data.errors;
            this.showMessage(err.response.data)
          }
        });
    },
    deleteFile(file) {
        axios
        .delete(base_url + "delete-file/" + file.id, file)

        .then(response => {
          EventBus.$emit("show-files", this.file_id);
          this.$toast.success('File has been deleted successfully!', 'Success Alert', this.notificationSystem.options.success );
          this.errors = null;
          
        })
        .catch(err => {
          if (err.response) {
            this.errors = err.response.data.errors;
            this.showMessage(err.response.data)
          }
        });
    },
    
    //FOlder
    renameFolder(folder) {
      axios
        .post(base_url + "rename-folder/" + folder.id + '/' + this.folder_name, folder)

        .then(response => {
          $("#rename-folder").modal("hide");
          EventBus.$emit("show-files", this.file_id);
          this.showMessage(response.data)
          this.resetForm();
          //location.reload()
          this.selectedFolder = ''
          this.errors = null;
          
        })
        .catch(err => {
          if (err.response) {
            this.errors = err.response.data.errors;
            this.showMessage(err.response.data)
          }
        });
    },
    deleteFolder(folder) {
        axios
        .delete(base_url + "delete-folder/" + folder.id, folder)

        .then(response => {
          EventBus.$emit("show-files", this.file_id);
          this.$toast.success('Folder has been deleted successfully!', 'Success Alert', this.notificationSystem.options.success );
          this.errors = null;
          
        })
        .catch(err => {
          if (err.response) {
            this.errors = err.response.data.errors;
            this.showMessage(err.response.data)
          }
        });
    },

    sendId(id, folder_id) {
        EventBus.$emit("create-folder", folder_id, id);
    },
    showMessage(data) {
      if (data.status  == "success") {
          this.$toast.success(data.message, 'Success Alert', this.notificationSystem.options.success );
      } else {
          this.$toast.error(data.message, "Error Alert", this.notificationSystem.options.error);
      }
    },
  },
  computed: {
    show() {
        return this.folder.id ? true: false
        this.isLoading = true;
    }
  }
};
</script>