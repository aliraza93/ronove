<template>
    <div>
        <!-- /Header -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div class="sidebar-menu">
                    <ul>
                        <!---
                            <li class="menu-title"><span>Chat Groups</span> <a href="#" data-toggle="modal" data-target="#add_group"><i class="fa fa-plus"></i></a></li>
                            <li> 
                                <a href="chat">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" alt="" src="img/user.jpg">
                                    </span> 
                                    <span class="chat-user">#General</span>
                                </a>
                            </li>
                            <li> 
                                <a href="chat">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" alt="" src="img/user.jpg">
                                    </span> 
                                    <span class="chat-user">#Video Responsive Survey</span>
                                </a>
                            </li>
                            <li> 
                                <a href="chat">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" alt="" src="img/user.jpg">
                                    </span> 
                                    <span class="chat-user">#500rs</span>
                                </a>
                            </li>
                            <li> 
                                <a href="chat">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" alt="" src="img/user.jpg">
                                    </span> 
                                    <span class="chat-user">#warehouse</span>
                                </a>
                            </li>
                        --->
                        <li v-if="users" class="menu-title">Employees</li>
                        <li v-for="(value,index) in users" v-bind:key="index">
                            <a href="#" :color="(value.id==activeFriend)?'green':''" @click="activeFriend=value.id" v-if="user.id != value.id">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" alt="" src="img/profiles/avatar-02.jpg"><span :class="onlineFriends.find(onlineFriend=>onlineFriend.id===value.id) ? 'status online' : 'status offline'"></span>
                                </span> 
                                <span class="chat-user"> {{ value.name }} </span> 
                                <!--
                                    <span :style="onlineFriends.find(onlineFriend=>onlineFriend.id===value.id) ? 'background: #28B62C;' : 'background: grey;'" class="indicator online"></span>
                                -->
                            </a>
                        </li>
                        <li v-if="organization">
                            <a href="#" :color="(organization.id==activeFriend)?'green':''" @click="activeFriend=organization.id" v-if="user.id != organization.id">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" alt="" src="img/profiles/avatar-02.jpg"><span :class="onlineFriends.find(onlineFriend=>onlineFriend.id===organization.id) ? 'status online' : 'status offline'"></span>
                                </span> 
                                <span class="chat-user"> {{ organization.name }} </span> 
                                <!--
                                    <span :style="onlineFriends.find(onlineFriend=>onlineFriend.id===value.id) ? 'background: #28B62C;' : 'background: grey;'" class="indicator online"></span>
                                -->
                            </a>
                        </li>
                        <hr>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
        <!-- Page Wrapper -->
        <div class="page-wrapper">
        
            <!-- Chat Main Row -->
            <div class="chat-main-row row">
            
                <!-- Chat Main Wrapper -->
                <div class="chat-main-wrapper">
                
                    <!-- Chats View -->
                    <div class="col-lg-9 message-view task-view">
                        <div class="chat-window">
                            <div class="fixed-header">
                                <div class="navbar">
                                    <div class="user-details mr-auto">
                                        <div class="float-left user-img">
                                            <a v-if="employee.name" class="avatar" href="#" :title="employee.name">
                                                <img style="height: inherit;" :src="employee.avatar ? employee.avatar : 'img/profiles/avatar-05.jpg'" alt="" class="rounded-circle">
                                                <span :class="onlineFriends.find(onlineFriend=>onlineFriend.id===activeFriend)? 'status online' : 'status offline'"></span>
                                            </a>
                                            <a v-else class="avatar" href="#" :title="employee.first_name + ' ' + employee.last_name">
                                                <img style="height: inherit;" :src="employee.avatar ? employee.avatar : 'img/profiles/avatar-05.jpg'" alt="" class="rounded-circle">
                                                <span :class="onlineFriends.find(onlineFriend=>onlineFriend.id===activeFriend)? 'status online' : 'status offline'"></span>
                                            </a>
                                        </div>
                                        <div class="user-info float-left">
                                            <a v-if="employee.name" href="#" :title="employee.name">
                                                <span>{{ employee.name }}</span>
                                                <i v-if="typingFriend.name" class="typing-text">Typing...</i>
                                            </a>
                                            <a v-else href="#" :title="employee.name">
                                                <span>{{ employee.first_name }} {{ employee.last_name }}</span>
                                                <i v-if="typingFriend.name" class="typing-text">Typing...</i>
                                            </a> 
                                            <span class="last-seen">{{ onlineFriends.find(onlineFriend=>onlineFriend.id===activeFriend) ? 'Active now': '' }}</span>
                                        </div>
                                    </div>
                                    <div class="search-box">
                                        <div class="input-group input-group-sm">
                                            <input type="text" placeholder="Search" class="form-control">
                                            <span class="input-group-append">
                                                <button type="button" class="btn"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="nav custom-menu">
                                        <li class="nav-item">
                                            <a class="nav-link task-chat profile-rightbar float-right" id="task_chat" href="#task_window"><i class="fa fa-user"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="voice-call" class="nav-link"><i class="fa fa-phone"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="video-call" class="nav-link"><i class="fa fa-video-camera"></i></a>
                                        </li>
                                        <li class="nav-item dropdown dropdown-action">
                                            <a aria-expanded="false" data-toggle="dropdown" class="nav-link dropdown-toggle" href=""><i class="fa fa-cog"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item">Delete Conversations</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Settings</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-contents">
                                <div class="chat-content-wrap">
                                    <div class="chat-wrap-inner" id="privateMessageBox" ref="messagesContainer">
                                        <div class="chat-box">
                                            <div class="chats" v-for="(value,index) in allMessages" v-bind:key="index">
                                                <div class="chat chat-right" v-if="user.id == value.user_id">
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div v-if="value.message" class="chat-content" style="background: #007bff">
                                                                <p style="color: white;" text-color="white">
                                                                    {{value.message}}
                                                                </p>
                                                                <span style="color: white;" class="chat-time">{{ value.SentMessageOnHumanReadable }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left" v-if="user.id != value.user_id">
                                                    <div class="chat-avatar">
                                                        <a href="profile" class="avatar">
                                                            <img alt="" style="height: inherit;" :src="employee.avatar ? employee.avatar : 'img/profiles/avatar-05.jpg'">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div v-if="value.message" class="chat-content" style="background: #00c5fb">
                                                                <p style="color: white;" text-color="white">
                                                                    {{value.message}}
                                                                </p>
                                                                <span style="color: white;" class="chat-time">{{ value.SentMessageOnHumanReadable }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-footer">
                                <div class="message-bar">
                                    <div class="message-inner">
                                        <div class="message-area">
                                            <div class="input-group">
                                                <textarea v-model="message" @keydown="onTyping" @keyup.enter="sendMessage" class="form-control" placeholder="Type message..."></textarea>
                                                <span class="input-group-append">
                                                    <button @click="sendMessage" class="btn btn-custom" type="button"><i class="fa fa-send"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Chats View -->
                    
                    <!-- Chat Right Sidebar -->
                    <div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="task_window">
                        <div class="chat-window video-window">
                            <div class="fixed-header">
                                <ul class="nav nav-tabs nav-tabs-bottom">
                                    <li class="nav-item"><a class="nav-link" href="#calls_tab" data-toggle="tab">Calls</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="#profile_tab" data-toggle="tab">Profile</a></li>
                                </ul>
                            </div>
                            <div class="tab-content chat-contents">
                                <div class="content-full tab-pane" id="calls_tab">
                                    <div class="chat-wrap-inner">
                                        <div class="chat-box">
                                            <div class="chats">
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile" class="avatar">
                                                            <img alt="" src="img/profiles/avatar-02.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="task-chat-user">You</span> <span class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">phone_missed</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <span class="call-description">Jeffrey Warden missed the call</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile" class="avatar">
                                                            <img alt="" src="img/profiles/avatar-02.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="task-chat-user">John Doe</span> <span class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">call_end</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details"><span class="call-description">This call has ended</span></div>
                                                                        <div class="call-timing">Duration: <strong>5 min 57 sec</strong></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-line">
                                                    <span class="chat-date">January 29th, 2019</span>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile" class="avatar">
                                                            <img alt="" src="img/profiles/avatar-05.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="task-chat-user">Richard Miles</span> <span class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">phone_missed</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <span class="call-description">You missed the call</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile" class="avatar">
                                                            <img alt="" src="img/profiles/avatar-02.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="task-chat-user">You</span> <span class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">ring_volume</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <a href="#" class="call-description call-description--linked" data-qa="call_attachment_link">Calling John Smith ...</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-full tab-pane show active" id="profile_tab">
                                    <div class="display-table">
                                        <div class="table-row">
                                            <div class="table-body">
                                                <div class="table-content">
                                                    <div class="chat-profile-img">
                                                        <div class="edit-profile-img">
                                                            <img style="height: inherit;" :src="employee.image ? employee.image : 'img/profiles/avatar-02.jpg'" alt="">
                                                            <span class="change-img">Change Image</span>
                                                        </div>
                                                        <h3 class="user-name m-t-10 mb-0"></h3>
                                                        <small class="text-muted"></small>
                                                        <a href="javascript:void(0);" class="btn btn-primary edit-btn"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                    <div class="chat-profile-info">
                                                        <ul class="user-det-list">
                                                            <li v-if="employee.name">
                                                                <span>Username:</span>
                                                                <span class="float-right text-muted">{{ employee.name }} </span>
                                                            </li>
                                                            <li v-else>
                                                                <span>Username:</span>
                                                                <span class="float-right text-muted">{{ employee.first_name }} {{ employee.last_name }} </span>
                                                            </li>
                                                            <li>
                                                                <span>Email:</span>
                                                                <span class="float-right text-muted">{{ employee.email }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Chat Right Sidebar -->
                    
                </div>
                <!-- /Chat Main Wrapper -->
                
            </div>
            <!-- /Chat Main Row -->
            
        </div>
        <!-- /Page Wrapper -->
    </div>
        
</template>

<script>
import { EventBus } from "../../vue-asset";
import mixin from "../../mixin";
import moment from 'moment';
export default {
    props: ['user'],
    data () {
      return {
        message: null,
        files: [],
        activeFriend: null,
        typingFriend: {},
        onlineFriends: [],
        allMessages: [],
        typingClock: null,
        emoStatus: false,
        users: [],
        employee: [],
        organization: [],
        token:document.head.querySelector('meta[name="csrf-token"]').content
      }
    },
    computed:{
      friends(){
        return this.users.filter((user)=>{
          return user.id !==this.user.id;
        })
      }
    },
    watch:{
      files:{
        deep:true,
        handler(){
          let success=this.files[0].success;
          if(success){
            this.fetchMessages();
          }
        }
      },
      activeFriend(val){
        this.fetchMessages();
        this.fetchUser()
      },
      '$refs.upload'(val){
        console.log(val);
      }
    },
    methods:{
      onTyping(){
        Echo.private('privatechat.'+this.activeFriend).whisper('typing',{
          user:this.user
        });
      },
      sendMessage(){
        //check if there message
        if(!this.message){
          return alert('Please enter message');
        }
        if(!this.activeFriend){
          return alert('Please select friend');
        }
          axios.post(base_url + 'private-messages/'+this.activeFriend, {message: this.message}).then(response => {
                    this.message=null;
                    this.allMessages.push(response.data.message)
                    setTimeout(this.scrollToEnd,100);
          });
      },
      fetchMessages() {
         if(!this.activeFriend){
          return alert('Please select friend');
        }
            axios.get( base_url + 'private-messages/'+this.activeFriend).then(response => {
                this.allMessages = response.data;
              setTimeout(this.scrollToEnd,100);
            });
        },
      fetchUsers() {
        axios.get( base_url + 'users').then(response => {
            this.users = response.data;
            console.log(this.users)
            if(this.friends.length>0){
                this.activeFriend = this.friends[0].id;
            }
        });
      },
      fetchOrganization() {
        axios.get( base_url + 'employee-organization').then(response => {
            this.organization = response.data[0];
        });
      },
      fetchUser() {
            axios.get( base_url + 'user/' + this.activeFriend).then(response => {
                this.employee = response.data;
            });
      },
      scrollToEnd(){
        document.getElementById('privateMessageBox').scrollTo(0,99999);
      },
      toggleEmo(){
        this.emoStatus= !this.emoStatus;
      },
      onInput(e){
        if(!e){
          return false;
        }
        if(!this.message){
          this.message=e.native;
        }else{
          this.message=this.message + e.native;
        }
        this.emoStatus=false;
      },
      onResponse(e){
        console.log('onrespnse file up',e);
      }
    
    },
    mounted(){
    },
    created(){
        this.fetchUsers();
        this.fetchOrganization();
        Echo.join(`chat`)
        .here((users) => {
            this.onlineFriends = users
        })
        .joining((user) => {
            this.onlineFriends.push(user)
        })
        .leaving((user) => {
            this.onlineFriends.splice(this.onlineFriends.indexOf(user), 1)
        });
        Echo.private('privatechat.'+this.user.id)
        .listenForWhisper('typing',(e)=>{
            if(this.activeFriend == e.user.id) {
                this.typingFriend = e.user
                setTimeout(this.scrollToEnd,100);
                if(this.typingClock) clearTimeout()
                this.typingClock = setTimeout(() => {
                    this.typingFriend = {}
                }, 3000);
            }
        })
        .listen('PrivateMessageSent',(e)=>{
            this.activeFriend = e.message.user_id;
            this.allMessages.push(e.message)
            setTimeout(this.scrollToEnd,100);
        })
    },
    filters: {
        moment: function (date) {
            return moment(date).format('MMMM Do YYYY, h:mm:ss a');
        }
    }

    
  }
</script>
<style scoped>
    .indicator.online {
        width: 0.5em;
        height: 0.5em;
        border-radius: 50%;
        -webkit-animation: pulse-animation 2s infinite linear;
    }

</style>