<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\System;
use App\Models\Organization;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user_id = $user->id;
            if ($user->getRoleNames()->first() === 'admin' || $user->getRoleNames()->first() === 'Service Staff' || $user->getRoleNames()->first() === 'Service User') {
                return redirect()->route('index');
            } else {
                Session::put('OrganizationId', $user->organization_id);
                $organization = Organization::find($user->organization_id);
                $systems = $organization->systems;
                if($systems->count() > 0) {
                    return view('frontend.myOrganization', compact('systems', 'organization'));
                }
                else{
                    return view('frontend.error.noSystem');    
                }
                
            }
        }else{
            Session::flash('message', 'These credentials do not match with our record!'); 
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function AccessOrganizationAndSystems(Request $request)
    {
        $organization_id = $request->organization_id;
        $system_id = $request->system_id;
        Session::put('system_id', $system_id);
        $system = System::where('id', $system_id)->first();
        if(Session::get('OrganizationId') == $organization_id){
            if($system->hasRole('system')) {
                $permissions = $system->getAllPermissions();
                if(count($permissions) > 0){
                    return view('frontend.index', compact('organization_id', 'system_id', 'permissions'));
                }
            }
            else{
                return view('frontend.error.systemError');
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
