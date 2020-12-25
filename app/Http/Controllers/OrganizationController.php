<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\System;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\EmployeeNextKin;
use App\Models\EmployeeHealth;
use App\Models\EmployeeBankDetails;
use App\Models\EmployeeEducationDetails;
use App\Models\EmployeePresentDetails;
use App\Models\EmployeeTrainingDetails;
use Spatie\Permission\Models\Permission;
use App\Models\EmployeeSchedule;
use App\Models\EmployeePersonalDetails;
use Hash;
use DB;

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
        foreach ($organization->systems as $key => $value) {
            $ids[$key] = $value->id;
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
        $systems = System::whereIn('id', $array)->get();
        if(count($organization->systems) > 0) {
            DB::table('organization_system')->whereIn('system_id', $array)->where('organization_id', $id)->delete();
        }
        try{
            $organization->systems()->sync($array);
            return response()->json(['status'=>'success','message'=>'System Assigned Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        // $employees = Employee::where('organization_id', $organization->id);
        // $user = User::where('organization_id', $organization->id)->first();
        // if(!empty($employees)){
        //     foreach ($employees->get() as $key => $employee) {
        //         $users = User::where('employee_id', $employee->id);
        //         $users->delete();
        //         $employee_bank_details = EmployeeBankDetails::where('employee_id', $employee->id);
        //         if(!empty($employee_bank_details)) {
        //             $employee_bank_details->delete();
        //         }
        //         $employee_personal_details = EmployeePersonalDetails::where('employee_id', $employee->id);
        //         if(!empty($employee_personal_details)) {
        //             $employee_personal_details->delete();
        //         }
        //         $employee_education_details = EmployeeEducationDetails::where('employee_id', $employee->id);
        //         if(!empty($employee_education_details)) {
        //             $employee_education_details->delete();
        //         }
        //         $employee_health = EmployeeHealth::where('employee_id', $employee->id);
        //         if(!empty($employee_health)) {
        //             $employee_health->delete();
        //         }
        //         $employee_next_kin = EmployeeNextKin::where('employee_id', $employee->id);
        //         if(!empty($employee_next_kin)) {
        //             $employee_next_kin->delete();
        //         }
        //         $employee_present_details = EmployeePresentDetails::where('employee_id', $employee->id);
        //         if(!empty($employee_present_details)) {
        //             $employee_present_details->delete();
        //         }
        //         $employee_training_details = EmployeeTrainingDetails::where('employee_id', $employee->id);
        //         if(!empty($employee_training_details)) {
        //             $employee_training_details->delete();
        //         }
        //     }
        //     $employees->delete();
        //     $user->delete();
        //     $organization->roles()->detach();
        //     $organization->permissions()->detach();
        //     // $organization->employees()->detach();
        //     $organization->delete();
        // }
        // else{
        //     $user->delete();
        //     $organization->roles()->detach();
        //     $organization->permissions()->detach();
        //     // $organization->employees()->detach();
        //     $organization->delete();
        // }
        $organization->delete();
    }
}
