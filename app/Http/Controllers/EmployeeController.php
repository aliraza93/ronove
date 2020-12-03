<?php

namespace App\Http\Controllers;

use App\Models\EmployeePersonalDetails;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
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

    public function SystemsList(Request $request){
        $systems = System::all();
        $ids = array();
        $employee = Employee::where('id', $request->id)->first();
        foreach (Employee::all() as $key => $value) {
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
            if(!Role::where('name', $type)) {
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
