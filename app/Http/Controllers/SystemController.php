<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $system = System::latest()->get()->first();
        return view('admin.systems', compact('system'));
    }

    public function SystemList(Request $request){
        $name = $request->name;
        $system = System::orderBy('created_at','desc');
        if($name != ''){
            $system->where('name','LIKE','%'.$name.'%');
        }
        $system = $system->paginate(10);
        return $system;
    }

    public function PermissionsList(Request $request){
        $permissions = Permission::all();
        $ids = array();
        $system = System::where('id', $request->id)->first();
        foreach ($permissions as $key => $value) {
            if($system->hasPermissionTo($value)) {
                if($system != null) {
                    $ids[$key] = $value->id;
                }
            }
        }
        return response()->json([
            'permissions' => $permissions,
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
        //
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
            'name' => 'required',
            'status' => 'required'
        ]);
        try{
            $system = new System;
            $system->name = $request->name;
            $system->status = $request->status;
            $system->save();

            return response()->json(['status'=>'success','message'=>'System Added Successfully !']);
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
    public function edit(System $system)
    {
        return $system;
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
            'name' => 'required',
            'status' => 'required'
        ]);
        try{
            $system = System::find($id);
            $system->name = $request->name;
            $system->status = $request->status;
            $system->update();

            return response()->json(['status'=>'success','message'=>'System Updated Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>'Something Went Wrong']);

        }
    }

    public function updatePermissions(Request $request, $id)
    {
        $array = explode(',', $request->id);
        $permissions = Permission::all();
        $system = System::where('id', $id)->first();
        if(!Role::where('name', 'system')->first()){
            $role = Role::create(['name' => 'system']);
            $system->assignRole($role);
            foreach ($permissions as $key => $value) {
                if($system->hasPermissionTo($value->id)) {
                    $system->revokePermissionTo($value->id);    
                }
            }
        }
        elseif ($system->hasRole('system')) {
            foreach ($permissions as $key => $value) {
                if($system->hasPermissionTo($value->id)) {
                    $system->revokePermissionTo($value->id);    
                }
            }
        }
        else{
            $role = Role::where(['name' => 'system'])->first();
            $system->assignRole($role);
            foreach ($permissions as $key => $value) {
                if($system->hasPermissionTo($value->id)) {
                    $system->revokePermissionTo($value->id);    
                }
            }
        }
        try{
            foreach ($array as $key => $value) {
                $system->givePermissionTo(Permission::find($value)->id);
            }
            return response()->json(['status'=>'success','message'=>'Permissions Granted Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>'Something Went Wrong']);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(System $system)
    {
        $system->roles()->detach();
        $system->delete();
    }
}
