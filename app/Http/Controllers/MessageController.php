<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Client;
use App\Models\Employee;
use App\Models\User;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Events\PrivateMessageSent;
use Spatie\Permission\Models\Role;
use Session;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function privateMessages(Client $client)
    {
        $privateCommunication= Message::with('client')
        ->where(['user_id'=> auth()->id(), 'receiver_id'=> $client->id])
        ->orWhere(function($query) use($client){
            $query->where(['user_id' => $client->id, 'receiver_id' => auth()->id()]);
        })
        ->get();
        return $privateCommunication;
    }

    public function getActiveFriend(Client $client) {
        return $client;
    }

    public function sendPrivateMessage(Request $request, Client $client)
    {
        $input = $request->all();
        $input['receiver_id'] = $client->id;
        $message = auth()->user()->messages()->create($input);

        broadcast(new PrivateMessageSent($message->load('client')))->toOthers();
        
        return response(['status'=>'Message private sent successfully','message'=>$message]);

    }

    public function showChat() {
        //$service_staff = Employee::where('organization_id', Session::get('OrganizationId'));
        //$service_users = Employee::where('organization_id', Session::get('OrganizationId'));
        $clients = Client::where('organization_id', Session::get('OrganizationId'))->get();
        return view('organization.chat.chat', compact('clients'));
    }
}
