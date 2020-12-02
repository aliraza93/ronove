<template>
    <div>
        <!-- /Header -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div class="sidebar-menu">
                    <ul>
                        <li> 
                            <a href="/"><i class="la la-home"></i> <span>Back to Home</span></a>
                        </li>
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
                        <li v-if="clients" class="menu-title">Clients</li>
                        <li v-for="(value,index) in clients" v-bind:key="index">
                            <a href="#" :color="(value.id==activeFriend)?'green':''" @click="activeFriend=value.id">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" alt="" src="img/profiles/avatar-02.jpg"><span class="status online"></span>
                                </span> 
                                <span class="chat-user"> {{ value.first_name }} {{ value.last_name }} </span> 
                                <!--
                                    <span class="badge badge-pill bg-danger">1</span>
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
                    <div class="col-lg-9 message-view task-view" ref="messagesContainer">
                        <div class="chat-window">
                            <div class="fixed-header">
                                <div class="navbar">
                                    <div class="user-details mr-auto">
                                        <div class="float-left user-img">
                                            <a class="avatar" href="profile" title="Mike Litorus">
                                                <img src="img/profiles/avatar-05.jpg" alt="" class="rounded-circle">
                                                <span class="status online"></span>
                                            </a>
                                        </div>
                                        <div class="user-info float-left">
                                            <a href="profile" title="Mike Litorus"><span>{{ client.first_name }} {{ client.last_name }}</span></a>
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
                                    <div class="chat-wrap-inner">
                                        <div class="chat-box">
                                            <div class="chats" v-for="(value,index) in allMessages" v-bind:key="index">
                                                <div v-if="user.id === value.user_id" class="chat chat-right">
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>{{ value.message }}</p>
                                                                <span class="chat-time">{{ value.created_at | moment }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div v-if="user.id != value.user_id" class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile" class="avatar">
                                                            <img alt="" src="img/profiles/avatar-05.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>{{ value.message }}</p>
                                                                <span class="chat-time">{{ value.created_at | moment }}</span>
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
                                                <textarea v-model="message" @keyup.enter="sendMessage" class="form-control" placeholder="Type message..."></textarea>
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
                                                            <img src="img/profiles/avatar-02.jpg" alt="">
                                                            <span class="change-img">Change Image</span>
                                                        </div>
                                                        <h3 class="user-name m-t-10 mb-0">{{ client.first_name }} {{ client.last_name }}</h3>
                                                        <small class="text-muted">{{ client.company }}</small>
                                                        <a href="javascript:void(0);" class="btn btn-primary edit-btn"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                    <div class="chat-profile-info">
                                                        <ul class="user-det-list">
                                                            <li>
                                                                <span>Username:</span>
                                                                <span class="float-right text-muted">{{ client.first_name }} {{ client.last_name }}</span>
                                                            </li>
                                                            <li>
                                                                <span>DOB:</span>
                                                                <span class="float-right text-muted">{{ client.dob }}</span>
                                                            </li>
                                                            <li>
                                                                <span>Email:</span>
                                                                <span class="float-right text-muted">{{ client.email }}</span>
                                                            </li>
                                                            <li>
                                                                <span>Phone:</span>
                                                                <span class="float-right text-muted">{{ client.phone }}</span>
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
    props: ['clients', 'user'],
    
    data () {
      return {
        message:null,
        client: [],
        activeFriend:null,
        typingFriend:{},
        onlineFriends:[],
        allMessages:[],
        typingClock:null,
        emoStatus:false,
        users:[],
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
      
      activeFriend(val){
        this.fetchMessages();
      },
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
          axios.post(base_url +  'private-messages/'+this.activeFriend, {message: this.message}).then(response => {
                    this.message=null;
                    this.allMessages.push(response.data.message)
                            scrollToEnd()
          });
      },
      scrollToEnd: function () {
        var content = this.$refs.messagesContainer;
        content.scrollTop = content.scrollHeight
        alert("scroll height is " + content.scrollHeight + " scroll Top is " +  content.scrollTop);
    },
      fetchMessages() {
         if(!this.activeFriend){
          return alert('Please select friend');
        }
            axios.get(base_url + 'private-messages/'+this.activeFriend).then(response => {
                this.allMessages = response.data;
                    scrollToEnd()
            });
            axios.get(base_url + 'active-friend/'+this.activeFriend).then(response => {
                this.client = response.data;
                     scrollToEnd()
            });
        },
      scrollToEnd(){
        document.getElementById('privateMessageBox').scrollTo(0,99999);
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
        Echo.private('privatechat.'+this.user.id)
        .listen('PrivateMessageSent',(e)=>{
            console.log('pmessage sent')
            this.activeFriend=e.message.user_id;
            this.allMessages.push(e.message)
                scrollToEnd()
        })
        .listenForWhisper('typing', (e) => {
            if(e.user.id==this.activeFriend){
                this.typingFriend=e.user;
                
            if(this.typingClock) clearTimeout();
                this.typingClock=setTimeout(()=>{
                                    this.typingFriend={};
                                },9000);
            }
            
    });
    },
    
    filters: {
        moment: function (date) {
            return moment(date).format('YYYY-MM-DD');
        }
    }
    
  }
</script>

<style scoped>
.online-users,.messages{
    overflow-y:scroll;
    height:100vh;
}
</style>