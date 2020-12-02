<?php

namespace App\Http\Controllers;

use App\Models\ServiceUser;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Session;
use Hash;
use App\Models\MarSheet;


class ServiceUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_users = ServiceUser::where('organization_id', Session::get('OrganizationId'));
        return view('organization.User.service_user', compact('service_users'));
    }

    public function ServiceUserList(Request $request){
        $name = $request->name;
        $id = $request->id;
        $service_user = ServiceUser::where('organization_id', Session::get('OrganizationId'))->orderBy('created_at','desc');
        if($name != ''){
            $service_user->where('first_name','LIKE','%'.$name.'%');
        }
        if($id != ''){
            $service_user->where('id','LIKE','%'.$id.'%');
        }
        $service_user = $service_user->paginate(10);
        return $service_user;
    }

    public function SystemsList(Request $request){
        $systems = System::all();
        $ids = array();
        $service_user = ServiceUser::where('id', $request->id)->first();
        foreach (ServiceUser::all() as $key => $value) {
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
            'salutation' => 'required',
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => 'required',
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:service_users'],
            'post_code' => 'required',
            'dob' => 'required',
            ]);
            //dd($request);
        try{
            $dob = explode('T', $request->dob);
            $service_user = new ServiceUser;
            $service_user->salutation = $request->salutation;
            $service_user->first_name = $request->first_name;
            $service_user->last_name = $request->last_name;
            $service_user->address = $request->address;
            $service_user->phone = $request->phone;
            $service_user->email = $request->email;
            $service_user->post_code = $request->post_code;
            $service_user->dob = $dob[0];
            $service_user->organization_id = Session::get('OrganizationId');
            /*if ($request->has('image')) {
                $service_user->clearMediaCollection('service_users');
    
                $service_user->addMedia($request->image)
                        ->toMediaCollection('service_users');
            }
            */
            $service_user->save();
            return response()->json(['status'=>'success','message'=>'Service User Added Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);

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
    public function showProfile($id)
    {
        $service_user = ServiceUser::where('id', $id)->first();
        $mar_sheets = MarSheet::where('service_user_id', $id)->get();
        return view('organization.User.show_service_user', compact('service_user', 'mar_sheets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceUser $service_user)
    {
        return $service_user;
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
            'salutation' => 'required',
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => 'required',
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:service_users'],
            'post_code' => 'required',
            'dob' => 'required',
        ]);
        try{
            $service_user = ServiceUser::find($id);
            $service_user->salutation = $request->salutation;
            $service_user->first_name = $request->first_name;
            $service_user->last_name = $request->last_name;
            $service_user->address = $request->address;
            $service_user->phone = $request->phone;
            $service_user->email = $request->email;
            $service_user->post_code = $request->post_code;
            $service_user->dob = $request->dob;
            $service_user->update();
            return response()->json(['status'=>'success','message'=>'ServiceUser Updated Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>'Something Went Wrong']);

        }
    }

    public function assignSystem(Request $request, $id)
    {
        $array = explode(',', $request->id);
        $service_user = ServiceUser::find($id);
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
                //dd($service_user->systems());
                //$service_user->systems->save($system);
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
    public function destroy(ServiceUser $service_user)
    {
        $user = User::where('service_user_id', $service_user->id)->first();
        if($user != null) {
            $user->delete();
        }

        //$service_user->removeRole('organization');
        //$service_user->delete();
    }
}
