<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\System;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organization = Organization::latest()->get()->first();
        return view('admin.organizations', compact('organization'));
    }

    public function OrganizationList(Request $request){
        $name = $request->name;
        $organization = Organization::orderBy('created_at','desc');
        if($name != ''){
            $organization->where('name','LIKE','%'.$name.'%');
        }
        $organization = $organization->paginate(10);
        return $organization;
    }

    public function SystemsList(Request $request){
        $systems = System::all();
        $ids = array();
        $organization = Organization::where('id', $request->id)->first();
        foreach (Organization::all() as $key => $value) {
            $system = System::where('organization_id', $request->id)->get();
            foreach ($system as $key => $value) {
                if($system != null) {
                    $ids[$key] = $value->id;
                }        
            }
        }
        return response()->json([
            'systems' => $systems,
            'ids' => $ids
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $systems = System::all();
        return view('frontend.myOrganization', compact('systems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'status' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:organizations'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'code' => 'required',
        ]);
        try{
            $organization = new Organization;
            $organization->name = $request->name;
            $organization->status = $request->status;
            $organization->address = $request->address;
            $organization->phone = $request->phone;
            $organization->email = $request->email;
            $organization->password = Hash::make($request->password);
            $organization->code = $request->code;
            $organization->save();
            $user = new User();
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->organization_id = $organization->id;
            if(!Role::where('name', 'organization')) {
                $role = Role::create(['name' => 'organization']);
                $user->assignRole($role);
            }
            else{
                $role = Role::where('name', 'organization')->first();
                $user->assignRole($role->id);    
            }
            $user->save();
            return response()->json(['status'=>'success','message'=>'Organization Added Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>'Something Went Wrong !']);

        }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        return $organization;
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
        $request->validate([
            'status' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'code' => 'required',
        ]);
        try{
            $organization = Organization::find($id);
            $organization->name = $request->name;
            $organization->status = $request->status;
            $organization->address = $request->address;
            $organization->phone = $request->phone;
            $organization->email = $request->email;
            $organization->password = Hash::make($request->password);
            $organization->code = $request->code;
            $organization->update();
            User::updateOrInsert(['email'=>$request->email],[
                'name'=>$request->name,
                'password'=>Hash::make($request->password),
                'organization_id'=> $organization->id
            ]);
            return response()->json(['status'=>'success','message'=>'Organization Updated Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>'Something Went Wrong']);

        }
    }

    public function assignSystem(Request $request, $id)
    {
        $array = explode(',', $request->id);
        $organization = Organization::find($id);
        $systemss = System::all();
        foreach ($systemss as $key => $value) {
            $value->organization_id = null;
            $value->save();
        }
        try{
            foreach ($array as $key => $value) {
                $system = System::where('id', $value)->first();
                $system->organization_id = $id;
                //dd($system->organization_id);
                //dd($organization->systems());
                //$organization->systems->save($system);
                $system->save();
            }
            return response()->json(['status'=>'success','message'=>'System Assigned Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);

        }
        /*$array = explode(',', $request->id);
        $permissions = Permission::all();
        $system = System::find($id)->first();
        if(!$system->hasRole('system')){
            $role = Role::create(['name' => 'system']);
            $system->assignRole($role);
        }
        foreach ($permissions as $key => $value) {
            $system->revokePermissionTo($value->id);
        }
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        $user = User::where('organization_id', $organization->id)->first();
        if($user != null) {
            $user->delete();
        }
        $organization->removeRole('organization');
        $organization->delete();
    }
}
