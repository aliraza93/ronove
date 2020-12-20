<template>
  <div class="wrap">
    <div class="modal custom-modal fade" id="update-route" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Route</h5>
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
                          <input type="text" placeholder="Name of the Route here..." class="form-control" v-model="route.name">
                        </div>
                    </div>
                </div>
                <div class="submit-section">
                    <button @click="updateRoute" type="button" class="btn btn-primary submit-btn">Save</button>
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
  name : 'update-route',
  mixins: [mixin],
  data() {
    return {
      route: {
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

     EventBus.$on('route-edit',function(id){

       _this.route.id = id;

       _this.getEditData(id);

       $('#update-route').modal('show');



     });

      $('#update-route').on('hidden.bs.modal', function(){
            _this.resetForm();
        });

  },

  methods: {

    getEditData(id){

     axios.get(base_url+'routes/'+id+'/edit')

     .then(response => {


           this.route = {
            id : response.data.id,
            name: response.data.name,
          };

     })

    },
    updateRoute() {
        axios.post(base_url + "routes/update/"+this.route.id, this.route)

        .then(response => {
          $("#update-route").modal("hide");
          EventBus.$emit("route-added");
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

      this.route = {
        id: '',
        name: "",
      };
      this.errors = null;

    },

  },
};
</script>
