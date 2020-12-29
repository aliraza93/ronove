<template>
  <div class="wrap">
    <div class="modal custom-modal fade" id="update-schedule" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" v-if="errors != ''">
                    <ul>
                        <li v-for="error in errors" :key="error">{{ error }}</li>
                    </ul>
                </div>
                <form>
                    <div class="row" v-for="(value,index) in timing" v-bind:key="index">
                        <div v-show="value.monday_start_time != null" class="col-md-2">
                            <div class="form-check">
                                <input value="monday" v-model="monday" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Monday</label>
                            </div>
                        </div>
                        <div v-show="value.monday_start_time != null" class="col-md-4">

                            <div class="form-group">
                                <b-form-timepicker :disabled="!monday" v-model="value.monday_start_time" placeholder="Choose Start Time" local="en"></b-form-timepicker>
                            </div>
                        </div>

                        <div v-show="value.monday_start_time != null" class="col-md-4">
                            <div class="form-group">
                                <b-form-timepicker :disabled="!monday" v-model="value.monday_end_time" placeholder="Choose End Time" local="en"></b-form-timepicker>
                            </div>
                        </div>
                        <div v-show="value.monday_start_time != null" class="col-md-2">
                            <div class="form-group">
                                <button type="button" @click="addMonday()" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                                <button v-show="monday_count > 1" type="button" @click="remove(index, 1)" class="btn btn-primary btn-sm"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-for="(value,index) in timing" :key="`A-${index}`">
                        <div v-show="value.tuesday_start_time != null" class="col-md-2">
                            <div class="form-check">
                                <input v-model="tuesday" type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">Tuesday</label>
                            </div>
                        </div>
                        <div v-show="value.tuesday_start_time != null" class="col-md-4">

                            <div class="form-group">
                                <b-form-timepicker :disabled="!tuesday" v-model="value.tuesday_start_time" placeholder="Choose Start Time" local="en"></b-form-timepicker>
                            </div>
                        </div>

                        <div v-show="value.tuesday_start_time != null" class="col-md-4">
                            <div class="form-group">
                                <b-form-timepicker :disabled="!tuesday" v-model="value.tuesday_end_time" placeholder="Choose End Time" local="en"></b-form-timepicker>
                            </div>
                        </div>
                        <div v-show="value.tuesday_start_time != null" class="col-md-2">
                            <div class="form-group">
                                <button type="button" @click="addTuesday()" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                                <button v-show="tuesday_count > 1" type="button" @click="remove(index, 2)" class="btn btn-primary btn-sm"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-for="(value,index) in timing" :key="`B-${index}`">
                        <div v-show="value.wednesday_start_time != null" class="col-md-2">
                            <div class="form-check">
                                <input v-model="wednesday" type="checkbox" class="form-check-input" id="exampleCheck3">
                                <label class="form-check-label" for="exampleCheck3">Wednesday</label>
                            </div>
                        </div>
                        <div v-show="value.wednesday_start_time != null" class="col-md-4">

                            <div class="form-group">
                                <b-form-timepicker :disabled="!wednesday" v-model="value.wednesday_start_time" placeholder="Choose Start Time" local="en"></b-form-timepicker>
                            </div>
                        </div>

                        <div v-show="value.wednesday_start_time != null" class="col-md-4">
                            <div class="form-group">
                                <b-form-timepicker :disabled="!wednesday" v-model="value.wednesday_end_time" placeholder="Choose End Time" local="en"></b-form-timepicker>
                            </div>
                        </div>
                        <div v-show="value.wednesday_start_time != null" class="col-md-2">
                            <div class="form-group">
                                <button type="button" @click="addWednesday()" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                                <button v-show="wednesday_count > 1" type="button" @click="remove(index, 3)" class="btn btn-primary btn-sm"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-for="(value,index) in timing" :key="`C-${index}`">
                        <div v-show="value.thursday_start_time != null" class="col-md-2">
                            <div class="form-check">
                                <input v-model="thursday" type="checkbox" class="form-check-input" id="exampleCheck4">
                                <label class="form-check-label" for="exampleCheck4">Thursday</label>
                            </div>
                        </div>
                        <div v-show="value.thursday_start_time != null" class="col-md-4">

                            <div class="form-group">
                                <b-form-timepicker :disabled="!thursday" v-model="value.thursday_start_time" placeholder="Choose Start Time" local="en"></b-form-timepicker>
                            </div>
                        </div>

                        <div v-show="value.thursday_start_time != null" class="col-md-4">
                            <div class="form-group">
                                <b-form-timepicker :disabled="!thursday" v-model="value.thursday_end_time" placeholder="Choose End Time" local="en"></b-form-timepicker>
                            </div>
                        </div>
                        <div v-show="value.thursday_start_time != null" class="col-md-2">
                            <div class="form-group">
                                <button type="button" @click="addThursday()" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                                <button v-show="thursday_count > 1" type="button" @click="remove(index, 4)" class="btn btn-primary btn-sm"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-for="(value,index) in timing" :key="`D-${index}`">
                        <div v-show="value.friday_start_time != null" class="col-md-2">
                            <div class="form-check">
                                <input v-model="friday" type="checkbox" class="form-check-input" id="exampleCheck5">
                                <label class="form-check-label" for="exampleCheck5">Friday</label>
                            </div>
                        </div>
                        <div v-show="value.friday_start_time != null" class="col-md-4">

                            <div class="form-group">
                                <b-form-timepicker :disabled="!friday" v-model="value.friday_start_time" placeholder="Choose Start Time" local="en"></b-form-timepicker>
                            </div>
                        </div>

                        <div v-show="value.friday_start_time != null" class="col-md-4">
                            <div class="form-group">
                                <b-form-timepicker :disabled="!friday" v-model="value.friday_end_time" placeholder="Choose End Time" local="en"></b-form-timepicker>
                            </div>
                        </div>
                        <div v-show="value.friday_start_time != null" class="col-md-2">
                            <div class="form-group">
                                <button type="button" @click="addFriday()" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                                <button v-show="friday_count > 1" type="button" @click="remove(index, 5)" class="btn btn-primary btn-sm"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-for="(value,index) in timing" :key="`E-${index}`">
                        <div v-show="value.saturday_start_time != null" class="col-md-2">
                            <div class="form-check">
                                <input v-model="saturday" type="checkbox" class="form-check-input" id="exampleCheck6">
                                <label class="form-check-label" for="exampleCheck6">Saturday</label>

                            </div>
                        </div>
                        <div v-show="value.saturday_start_time != null" class="col-md-4">

                            <div class="form-group">
                                <b-form-timepicker :disabled="!saturday" v-model="value.saturday_start_time" placeholder="Choose Start Time" local="en"></b-form-timepicker>
                            </div>
                        </div>

                        <div v-show="value.saturday_start_time != null" class="col-md-4">
                            <div class="form-group">
                                <b-form-timepicker :disabled="!saturday" v-model="value.saturday_end_time" placeholder="Choose End Time" local="en"></b-form-timepicker>
                            </div>
                        </div>
                        <div v-show="value.saturday_start_time != null" class="col-md-2">
                            <div class="form-group">
                                <button type="button" @click="addSaturday()" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                                <button v-show="saturday_count > 1" type="button" @click="remove(index, 6)" class="btn btn-primary btn-sm"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-for="(value,index) in timing" :key="`F-${index}`">
                        <div v-show="value.sunday_start_time != null" class="col-md-2">
                            <div class="form-check">
                                <input v-model="sunday" type="checkbox" class="form-check-input" id="exampleCheck7">
                                <label class="form-check-label" for="exampleCheck7">Sunday</label>
                            </div>
                        </div>
                        <div v-show="value.sunday_start_time != null" class="col-md-4">

                            <div class="form-group">
                                <b-form-timepicker :disabled="!sunday" v-model="value.sunday_start_time" placeholder="Choose Start Time" local="en"></b-form-timepicker>
                            </div>
                        </div>

                        <div v-show="value.sunday_start_time != null" class="col-md-4">
                            <div class="form-group">
                                <b-form-timepicker :disabled="!sunday" v-model="value.sunday_end_time" placeholder="Choose End Time" local="en"></b-form-timepicker>
                            </div>
                        </div>
                        <div v-show="value.sunday_start_time != null" class="col-md-2">
                            <div class="form-group">
                                <button type="button" @click="addSunday()" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                                <button v-show="sunday_count > 1" type="button" @click="remove(index, 7)" class="btn btn-primary btn-sm"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button type="button" @click="updateSchedule()" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>  
            </div>
          </div>
      </div>
    </div>
  </div>
</template>

<script>
import { EventBus } from "../../../vue-asset";
import mixin from "../../../mixin";

export default {
  name : 'update-schedule',  
  mixins: [mixin],
  props: ['employee'],
  data() {
    return {
      monday_count: '',
      tuesday_count: '',
      wednesday_count: '',
      thursday_count: '',
      friday_count: '',
      saturday_count: '',
      sunday_count: '',
      monday: false,
      tuesday: false,
      wednesday: false,
      thursday: false,
      friday: false,
      saturday: false,
      sunday: false,  
      timing: [],
      errors: [],
      data: [],
      notificationSchedule: {
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
    this.timing.splice()
    _this.getEditData(this.employee.id);
  },

  methods: {
    
    getEditData(id){
        axios.get(base_url+'employee-schedule/'+id+'/edit')

        .then(response => {
            for (let i = 0; i < response.data.length; i++) {
                if(response.data[i].day == 'Monday') {
                    this.timing.push({
                        id: response.data[i].id,
                        monday_start_time : response.data[i].start_time,
                        monday_end_time : response.data[i].end_time
                    })
                    this.monday = true
                    this.monday_count = i + 1;
                }
                if(response.data[i].day == 'Tuesday') {
                    this.timing.push({
                        id: response.data[i].id,
                        tuesday_start_time : response.data[i].start_time,
                        tuesday_end_time : response.data[i].end_time
                    })
                    this.tuesday = true
                    this.tuesday_count = i + 1;
                }
                if(response.data[i].day == 'Wednesday') {
                    this.timing.push({
                        id: response.data[i].id,
                        wednesday_start_time : response.data[i].start_time,
                        wednesday_end_time : response.data[i].end_time
                    })
                    this.wednesday = true
                    this.wednesday_count = i + 1;
                }
                if(response.data[i].day == 'Thursday') {
                    this.timing.push({
                        id: response.data[i].id,
                        thursday_start_time : response.data[i].start_time,
                        thursday_end_time : response.data[i].end_time
                    })
                    this.thursday = true
                    this.thursday_count = i + 1;
                }
                if(response.data[i].day == 'Friday') {
                    this.timing.push({
                        id: response.data[i].id,
                        friday_start_time : response.data[i].start_time,
                        friday_end_time : response.data[i].end_time
                    })
                    this.friday = true
                    this.friday_count = i + 1;
                }
                if(response.data[i].day == 'Saturday') {
                    this.timing.push({
                        id: response.data[i].id,
                        saturday_start_time : response.data[i].start_time,
                        saturday_end_time : response.data[i].end_time
                    })
                    this.saturday = true
                    this.saturday_count = i + 1;
                }
                if(response.data[i].day == 'Sunday') {
                    this.timing.push({
                        id: response.data[i].id,
                        sunday_start_time : response.data[i].start_time,
                        sunday_end_time : response.data[i].end_time
                    })
                    this.sunday = true
                    this.sunday_count = i + 1;
                }
            }
            if(this.monday_count == 0) {
                this.timing.push({
                    id: '',
                    monday_start_time : '',
                    monday_end_time : ''
                })
                this.monday = false
                this.monday_count = 1;
            }
            if(this.tuesday_count == 0) {
                this.timing.push({
                    id: '',
                    tuesday_start_time : '',
                    tuesday_end_time : ''
                })
                this.tuesday = false
                this.tuesday_count = 1;
            }
            if(this.wednesday_count == 0) {
                this.timing.push({
                    id: '',
                    wednesday_start_time : '',
                    wednesday_end_time : ''
                })
                this.wednesday = false
                this.wednesday_count = 1;
            }
            if(this.thursday_count == 0) {
                this.timing.push({
                    id: '',
                    thursday_start_time : '',
                    thursday_end_time : ''
                })
                this.thursday = false
                this.thursday_count = 1;
            }
            if(this.friday_count == 0) {
                this.timing.push({
                    id: '',
                    friday_start_time : '',
                    friday_end_time : ''
                })
                this.friday = false
                this.friday_count = 1;
            }
            if(this.saturday_count == 0) {
                this.timing.push({
                    id: '',
                    saturday_start_time : '',
                    saturday_end_time : ''
                })
                this.saturday = false
                this.saturday_count = 1;
            }
            if(this.sunday_count == 0) {
                this.timing.push({
                    id: '',
                    sunday_start_time : '',
                    sunday_end_time : ''
                })
                this.sunday = false
                this.sunday_count = 1;
            }
     })

    },
    addMonday () {
        this.timing.push({
            monday_start_time: '',
            monday_end_time: ''
        })
        this.monday_count = this.monday_count + 1
    },
    remove (index, day) {
      this.timing.splice(index, 1)
      if(day == 1) {
          this.monday_count = this.monday_count - 1
      }
      else if(day == 2) {
          this.tuesday_count = this.tuesday_count - 1
      }
      else if(day == 3) {
          this.wednesday_count = this.wednesday_count - 1    
      }
      else if(day == 4) {
          this.thursday_count = this.thursday_count - 1
      }
      else if(day == 5) {
           this.friday_count = this.friday_count - 1
      }
      else {
          this.sunday_count = this.sunday_count - 1
      }
    },

    addTuesday () {
      this.timing.push({
        tuesday_start_time: '',
        tuesday_end_time: ''
      })
      this.tuesday_count = this.tuesday_count + 1
    },
    addWednesday () {
      this.timing.push({
        wednesday_start_time: '',
        wednesday_end_time: ''
      })
      this.wednesday_count = this.wednesday_count + 1
    },
    addThursday () {
      this.timing.push({
        thursday_start_time: '',
        thursday_end_time: ''
      })
      this.thursday_count = this.thursday_count + 1
    },
    addFriday () {
      this.timing.push({
        friday_start_time: '',
        friday_end_time: ''
      })
      this.friday_count = this.friday_count + 1
    },
    addSaturday () {
      this.timing.push({
        saturday_start_time: '',
        saturday_end_time: ''
      })
      this.saturday_count = this.saturday_count + 1
    },
    addSunday () {
      this.timing.push({
        sunday_start_time: '',
        sunday_end_time: ''
      })
      this.sunday_count = this.sunday_count + 1
    },
    updateSchedule() {
        var pass = false
        for (let index = 0; index < this.timing.length; index++) {
            
            //Monday Validations
            if(this.monday == true) {
                if(this.timing[index].monday_start_time == '' && this.timing[index].monday_end_time == '') {
                    this.errors.push('Please Select Monday Timing!')
                }
                else if(this.timing[index].monday_start_time != '') {
                    this.errors.splice(index, 1)
                    if(this.timing[index].monday_end_time == '') {
                        this.errors.push('Please Select Monday End Time!')
                    }
                    else if(this.timing[index].monday_end_time != '') {
                        this.errors.splice(index, 1)
                        if(this.timing[index].monday_start_time >= this.timing[index].monday_end_time) {
                            this.errors.push('Monday End Time should be less than Monday Start Time!')
                        }
                        else {
                            pass = true
                        }
                    }
                }        
            }

            //Tuesday Validations
            if(this.tuesday == true) {
                if(this.timing[index].tuesday_start_time == '' && this.timing[index].tuesday_end_time == '') {
                    this.errors.push('Please Select Tuesday Timing!')
                }
                else if(this.timing[index].tuesday_start_time != '') {
                    this.errors.splice(index, 1)
                    if(this.timing[index].tuesday_end_time == '') {
                        this.errors.push('Please Select Tuesday End Time!')
                    }
                    else if(this.timing[index].tuesday_end_time != '') {
                        this.errors.splice(index, 1)
                        if(this.timing[index].tuesday_start_time >= this.timing[index].tuesday_end_time) {
                            this.errors.push('Tuesday End Time should be less than Tuesday Start Time!')
                        }
                        else {
                            pass = true
                        }
                    }
                }        
            }

            //Wednesday Validations
            if(this.wednesday == true) {
                if(this.timing[index].wednesday_start_time == '' && this.timing[index].wednesday_end_time == '') {
                    this.errors.push('Please Select Wednesday Timing!')
                }
                else if(this.timing[index].wednesday_start_time != '') {
                    this.errors.splice(index, 1)
                    if(this.timing[index].wednesday_end_time == '') {
                        this.errors.push('Please Select Wednesday End Time!')
                    }
                    else if(this.timing[index].wednesday_end_time != '') {
                        this.errors.splice(index, 1)
                        if(this.timing[index].wednesday_start_time >= this.timing[index].wednesday_end_time) {
                            this.errors.push('Wednesday End Time should be less than Wednesday Start Time!')
                        }
                        else {
                            pass = true
                        }
                    }
                }        
            }

            //Thursday Validations
            if(this.thursday == true) {
                if(this.timing[index].thursday_start_time == '' && this.timing[index].thursday_end_time == '') {
                    this.errors.push('Please Select Thursday Timing!')
                }
                else if(this.timing[index].thursday_start_time != '') {
                    this.errors.splice(index, 1)
                    if(this.timing[index].thursday_end_time == '') {
                        this.errors.push('Please Select Thursday End Time!')
                    }
                    else if(this.timing[index].thursday_end_time != '') {
                        this.errors.splice(index, 1)
                        if(this.timing[index].thursday_start_time >= this.timing[index].thursday_end_time) {
                            this.errors.push('Thursday End Time should be less than Thursday Start Time!')
                        }
                        else {
                            pass = true
                        }
                    }
                }        
            }

            //Friday Validations
            if(this.friday == true) {
                if(this.timing[index].friday_start_time == '' && this.timing[index].friday_end_time == '') {
                    this.errors.push('Please Select Friday Timing!')
                }
                else if(this.timing[index].friday_start_time != '') {
                    this.errors.splice(index, 1)
                    if(this.timing[index].friday_end_time == '') {
                        this.errors.push('Please Select Friday End Time!')
                    }
                    else if(this.timing[index].friday_end_time != '') {
                        this.errors.splice(index, 1)
                        if(this.timing[index].friday_start_time >= this.timing[index].friday_end_time) {
                            this.errors.push('Friday End Time should be less than Friday Start Time!')
                        }
                        else {
                            pass = true
                        }
                    }
                }        
            }

            //Saturday Validations
            if(this.saturday == true) {
                if(this.timing[index].saturday_start_time == '' && this.timing[index].saturday_end_time == '') {
                    this.errors.push('Please Select Saturday Timing!')
                }
                else if(this.timing[index].saturday_start_time != '') {
                    this.errors.splice(index, 1)
                    if(this.timing[index].saturday_end_time == '') {
                        this.errors.push('Please Select Saturday End Time!')
                    }
                    else if(this.timing[index].saturday_end_time != '') {
                        this.errors.splice(index, 1)
                        if(this.timing[index].saturday_start_time >= this.timing[index].saturday_end_time) {
                            this.errors.push('Saturday End Time should be less than Saturday Start Time!')
                        }
                        else {
                            pass = true
                        }
                    }
                }        
            }

            //Sunday Validations
            if(this.sunday == true) {
                if(this.timing[index].sunday_start_time == '' && this.timing[index].sunday_end_time == '') {
                    this.errors.push('Please Select Sunday Timing!')
                }
                else if(this.timing[index].sunday_start_time != '') {
                    this.errors.splice(index, 1)
                    if(this.timing[index].sunday_end_time == '') {
                        this.errors.push('Please Select Sunday End Time!')
                    }
                    else if(this.timing[index].sunday_end_time != '') {
                        this.errors.splice(index, 1)
                        if(this.timing[index].sunday_start_time >= this.timing[index].sunday_end_time) {
                            this.errors.push('Sunday End Time should be less than Sunday Start Time!')
                        }
                        else {
                            pass = true
                        }
                    }
                }        
            }
        }
        if(this.errors.length == 0) {
            axios.post(base_url + "employee-schedule-update/"+this.employee.id, this.timing)

            .then(response => {
            $("#update-schedule").modal("hide");
            EventBus.$emit("schedule-added");
            this.showMessage(response.data)
            this.resetForm();
            })
            .catch(err => {
            if (err.response) {
                this.showMessage(err.response.data)
                //this.$toast.error("Something Went Wrong", 'Error', { timeout: 3000 } );
            }
        });
        }
    },
    showMessage(data) {
      if (data.status  == "success") {
          this.$toast.success(data.message, 'Success Alert', this.notificationSchedule.options.success );
      } else {
          this.$toast.error(data.message, "Error Alert", this.notificationSchedule.options.error);
      }
    },

  },
};
</script>