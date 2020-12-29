<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Models\Client;
use App\Models\Employee;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Events\PrivateMessageSent;
use Spatie\Permission\Models\Role;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Organization;

class MessageController extends Controller
{
    public function getEmployees()
    {
        $users = [];
        if(Auth::user()->getRoleNames()->first() === 'organization') {
            $employee_system_ids = Employee::where('system_id', Auth::user()->employee_system_id)->pluck('system_id');
            $users = DB::table('employees')
            ->where('employee_organization_id', '=', Session::get('OrganizationId'))
            ->where('employee_system_id', '=', Session::get('system_id'))
            ->join('users', 'employees.id', '=', 'users.employee_id')
            ->get();
        }
        elseif (Auth::user()->getRoleNames()->first() === 'Service Staff' || Auth::user()->getRoleNames()->first() === 'Service User') {
            $employee_organization_ids = Employee::where('organization_id', Auth::user()->employee_organization_id)->pluck('organization_id');
            $employee_system_ids = Employee::where('system_id', Auth::user()->employee_system_id)->pluck('system_id');
            $users = DB::table('employees')
                ->whereIn('employee_organization_id', $employee_organization_ids)
                ->whereIn('employee_system_id', $employee_system_ids)
                ->where('employee_id', '!=', Auth::user()->employee_id)
                ->join('users', 'employees.id', '=', 'users.employee_id')
                ->get();
        }
        return $users;
    }

    public function getEmployee(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user_id = null;
        if($user->employee_id != null) {
            $user_id = $user->employee_id;
            // $data = User::where('employee_id', $user_id)->first();
            $data = Employee::where('id', $user_id)->first();
        }
        elseif ($user->organization_id != null) {
            $user_id = $user->organization_id;
            $data = User::where('organization_id', $user_id)->first();
        }
        return $data;
    }

    public function getEmployeeOrganization(Request $request)
    {
        $user = Auth::user();
        if($user->employee_organization_id != null) {
            $organization_id = $user->employee_organization_id;
            $organization = Organization::where('id', $organization_id)->first();
            $user = DB::table('organizations')
                ->where('organization_id', $organization->id)
                ->join('users', 'organizations.id', '=', 'users.organization_id')
                ->get();
        }
        return $user;
    }

    public function privateMessages(User $user)
    {
        $privateCommunication= Message::with('user')
        ->where(['user_id'=> auth()->id(), 'receiver_id'=> $user->id])
        ->orWhere(function($query) use($user){
            $query->where(['user_id' => $user->id, 'receiver_id' => auth()->id()]);
        })
        ->get();
        return $privateCommunication;
    }

    public function getActiveFriend(User $user) {
        return $user;
    }

    public function sendPrivateMessage(Request $request, User $user)
    {
        $input = $request->all();
        $input['receiver_id'] = $user->id;
        $message = auth()->user()->messages()->create($input);
        broadcast(new PrivateMessageSent($message->load('user')))->toOthers();
        return response(['status'=>'Message private sent successfully','message'=>$message]);

    }

    public function showChat() {
        $users = User::where('employee_id', '!=', null)->get();
        return view('organization.apps.chat', compact('users'));
    }
}
