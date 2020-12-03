<?php

namespace App\Http\Controllers;

use App\Models\EmployeePersonalDetails;
use App\Models\Employee;
use App\Models\EmployeeBankDetails;
use App\Models\User;
use App\Models\System;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\EmployeeHealth;
use Session;
use Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::where('organization_id', Session::get('OrganizationId'));
        return view('organization.employee', compact('employees'));
    }

    public function EmployeeList(Request $request){
        $id = $request->id;
        $name = $request->name;
        $employee = Employee::where('organization_id', Session::get('OrganizationId'))->orderBy('created_at','desc');
        if($name != ''){
            $employee->where('first_name','LIKE','%'.$name.'%');
        }
        if($id != ''){
            $employee->where('id','LIKE','%'.$id.'%');
        }
        $employee = $employee->paginate(10);
        return $employee;
    }

    public function PermissionsList(Request $request){
        //$permissions = Permission::all();
        $ids = array();
        $system = System::where('id', Session::get('system_id'))->first();
        $employee = Employee::where('id', $request->id)->first();
        $user = User::where('employee_id', $employee->id)->first();
        $permissions = $system->getAllPermissions();
        foreach ($permissions as $key => $value) {
            if($user->hasPermissionTo($value)) {
                if($user != null) {
                    $ids[$key] = $value->id;
                }
            }
        }
        return response()->json([
            'permissions' => $permissions,
            'ids' => $ids
        ]);
    }

    public function assignPermission(Request $request, $id)
    {
        $array = explode(',', $request->id);
        $permissions = Permission::all();
        $employee = Employee::where('id', $id)->first();
        $user = User::where('employee_id', $employee->id)->first();
        foreach ($permissions as $key => $value) {
            if($user->hasPermissionTo($value->id)) {
                $user->revokePermissionTo($value->id);    
            }
        }
        try{
            foreach ($array as $key => $value) {
                $user->givePermissionTo(Permission::find($value)->id);
            }
            return response()->json(['status'=>'success','message'=>'Permissions Granted Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProfile($id)
    {
        $employee = Employee::where('id', $id)->first();
        return view('organization.User.show_employee', compact('employee'));
    }

    public function showDashboard()
    {
        return view('dashboard');
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => 'required',
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:employees'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'post_code' => 'required',
            'gender' => 'required',
            
            ]);
            //dd($request);
        try{
            $employee = new Employee;
            $employee->first_name = $request->first_name;
            $employee->last_name = $request->last_name;
            $employee->address = $request->address;
            $employee->phone = $request->phone;
            $employee->email = $request->email;
            $employee->password = Hash::make($request->password);
            $employee->post_code = $request->post_code;
            $employee->gender = $request->gender;
            $employee->organization_id = Session::get('OrganizationId');
            /*if ($request->has('image')) {
                $employee->clearMediaCollection('employees');
    
                $employee->addMedia($request->image)
                        ->toMediaCollection('employees');
            }
            */
            $employee->save();
            $type = $request->type;
            $user = new User();
            $user->email = $request->email;
            $user->name = $request->first_name . ' ' .$request->last_name;
            $user->password = Hash::make($request->password);
            $user->employee_id = $employee->id;
            if(!Role::where('name', $type)->first()) {
                $role = Role::create(['name' => $type]);
                $user->assignRole($role);
            }
            else{
                $role = Role::where('name', $type)->first();
                $user->assignRole($role);    
            }
            $user->save();
            return response()->json(['status'=>'success','message'=>'Employee Added Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);

        }
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEmployeeBankDetails(Request $request, $id)
    {   
        $request->validate([
            'account_name' => 'required',
            'sort_code' => 'required',
            'account_number' => 'required',
            
            ]);
        try{
            $employee = new EmployeeBankDetails ;
            $employee->account_name = $request->account_name;
            $employee->sort_code = $request->sort_code;
            $employee->account_number = $request->account_number;
            $employee->employee_id = $id;
            
            $employee->save();
            return response()->json(['status'=>'success','message'=>'Employee Bank Details Added Successfully !']);
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
    public function edit(Employee $employee)
    {
        return $employee;
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => 'required',
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:employees'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'post_code' => 'required',
            'gender' => 'required',
            'image' => 'mimes:jpeg,jpg,png|required|max:10000' // max 10000kb
        ]);
        try{
            $employee = Employee::find($id);
            $employee->first_name = $request->first_name;
            $employee->last_name = $request->last_name;
            $employee->address = $request->address;
            $employee->phone = $request->phone;
            $employee->email = $request->email;
            $employee->password = Hash::make($request->password);
            $employee->post_code = $request->post_code;
            $employee->gender = $request->gender;
            $employee->organization_id = Session::get('OrganizationId');
            $employee->update();
            $type = $request->type;
            $user = new User();
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->employee_id = $employee->id;
            if(!Role::where('name', $type)) {
                $role = Role::create(['name' => $type]);
                $user->assignRole($role);
            }
            else{
                $role = Role::where('name', $type)->first();
                $user->assignRole($role->id);    
            }
            $user->update();
            return response()->json(['status'=>'success','message'=>'Employee Updated Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>'Something Went Wrong']);

        }
    }

    public function assignSystem(Request $request, $id)
    {
        $array = explode(',', $request->id);
        $employee = Employee::find($id);
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
                //dd($employee->systems());
                //$employee->systems->save($system);
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
    public function destroy(Employee $employee)
    {
        $user = User::where('employee_id', $employee->id)->first();
        if($user != null) {
            $user->delete();
        }

        //$employee->removeRole('organization');
        //$employee->delete();
    }



    public function storeEmployeeHealth(Request $request, $id)
    {

        // dd($request->arrangements_details);

        $request->validate([
                'ask' => 'required',
                'disability_details' => 'required',
                'what' => 'required',
                'arrangements_details' => 'required',
                'state_number' => 'required',
                'days' => 'required'
                
                

            ]);
            
                $employee = new EmployeeHealth;
                $employee->disability = $request->ask;
                $employee->disability_details = $request->disability_details;
                $employee->arrangements = $request->what;
                $employee->arrangements_details = $request->arrangements_details;
                $employee->days = $request->days;
                $employee->state_number = $request->state_number;
                $employee->employee_id = $id; 
               

                $employee->save();
                return redirect()->back() ->with('alert', 'Employee Health Added Successfully');
                
            
        
    }


   

    public function personalDetails(Request $request, $id)
    {
        //dd($request->ask);
        $request->validate([
            'home_tel_no' => 'required',
            'day_tel_no' => 'required',
            'national_no' => 'required',
            'email_address' => 'required',
        ]);
        $employee = new EmployeePersonalDetails;
        
        $employee->home_tel_no = $request->home_tel_no;
        $employee->day_tel_no = $request->day_tel_no;
        $employee->national_no = $request->national_no;
        $employee->email_address = $request->email_address;
        $employee->contact_at_work = $request->ask;
        $employee->are_you_free = $request->ask1;
        $employee->are_you_applying = $request->ask2;
        $employee->driving_license = $request->ask3;
        $employee->license_category = $request->ask4;
        $employee->employee_id = $id;
        
        $employee->save();
        
        return redirect()->back() ->with('alert', 'Employee Personal Details Updated Succesfully!');

        


    }
}
