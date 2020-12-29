<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeNextKin;
use App\Models\EmployeeHealth;
use App\Models\User;
use App\Models\EmployeeBankDetails;
use App\Models\EmployeeEducationDetails;
use App\Models\EmployeePresentDetails;
use App\Models\EmployeeTrainingDetails;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Session;
use Hash;
use App\Models\EmployeeSchedule;
use App\Models\EmployeePersonalDetails;
use App\Models\System;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::where('organization_id', Session::get('OrganizationId'))->where('system_id', Session::get('system_id'));
        return view('organization.employee', compact('employees'));
    }

    public function EmployeeList(Request $request){
        $id = $request->id;
        $name = $request->name;
        $employee = Employee::where('organization_id', Session::get('OrganizationId'))->where('system_id', Session::get('system_id'))->orderBy('created_at','desc');
        if($name != ''){
            $employee->where('first_name','LIKE','%'.$name.'%');
        }
        if($id != ''){
            $employee->where('id','LIKE','%'.$id.'%');
        }
        $employee = $employee->paginate(10);
        return $employee;
    }

    public function EmployeeScheduleList(Request $request)
    {
        $day = $request->day;
        $employee = EmployeeSchedule::  where('employee_id', $request->employee_id)->orderBy('day','asc');
        if($day != ''){
            $employee->where('day','LIKE','%'.$day.'%');
        }
        $employee = $employee->paginate(10);
        return $employee;
    }

    public function PermissionsList(Request $request, $id){
        $ids = array();
        $system = System::where('id', Session::get('system_id'))->first();
        $employee = Employee::where('id', $id)->first();
        $user = User::where('employee_id', $employee->id)->first();
        $permissions = $system->getAllPermissions();
        foreach ($permissions as $key => $value) {
            if($user->hasPermissionTo($value->id)) {
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
        $system = System::where('id', Session::get('system_id'))->first();
        $permissions = $system->getAllPermissions();
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
        $employee_schedule = EmployeeSchedule::where('employee_id', $id)->first();
        $employeeNextkin = EmployeeNextKin::where('employee_id', $id)->first();
        $employeeHealth = EmployeeHealth::where('employee_id', $id)->first();
        $personaldetails = EmployeePersonalDetails::where('employee_id', $id)->first();
        $employee_education = EmployeeEducationDetails::where('employee_id', $id)->first();
        $employee_present = EmployeePresentDetails::where('employee_id', $id)->first();
        $employee_bank_details = EmployeeBankDetails::where('employee_id', $id)->first();
        $employee_training = EmployeeTrainingDetails::where('employee_id', $id)->first();
        return view('organization.User.show_employee', compact('employee', 'employeeNextkin', 'employee_bank_details','employee_education', 'employee_present', 'employee_training', 'employeeHealth', 'personaldetails', 'employee_schedule'));
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
            $employee->system_id = Session::get('system_id');
            $employee->save();
            $type = $request->type;
            $user = new User();
            $user->email = $request->email;
            $user->name = $request->first_name . ' ' .$request->last_name;
            $user->password = Hash::make($request->password);
            $user->employee_id = $employee->id;
            $user->employee_organization_id = Session::get('OrganizationId');
            $user->employee_system_id = Session::get('system_id');
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

            return response()->json(['status'=>'error','message'=>'Something went wrong!']);

        }
    }

    public function updateAvatar(Request $request, Employee $employee){
        $request->validate([
            'image' => 'image',
        ]);
        if ($request->hasFile('image')) {
            $employee->clearMediaCollection('EmployeeAvatars');

            $employee->addMediaFromRequest('image')
                    ->toMediaCollection('EmployeeAvatars');
        }
        return redirect()->back() ->with('alert', 'Profile Image Uploaded Successfully!');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editEmployeeSchedule(Employee $employee)
    {
        return EmployeeSchedule::where('employee_id', $employee->id)->get();
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
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'post_code' => 'required',
            'gender' => 'required',
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
            $employee->update();
            $user = User::where('employee_id', $id)->first();
            $user->email = $request->email;
            $user->name = $request->first_name . ' ' . $request->last_name;
            $user->password = Hash::make($request->password);
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
                $system->save();
            }
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
    public function destroy(Employee $employee)
    {
        $employee->roles()->detach();
        $employee->delete();
    }
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

    public function updateEmployeeBankDetails(Request $request, $id)
    {   
        $request->validate([
            'account_name' => 'required',
            'sort_code' => 'required',
            'account_number' => 'required',
            
            ]);
        try{
            $employee = EmployeeBankDetails::find($id);
            $employee->account_name = $request->account_name;
            $employee->sort_code = $request->sort_code;
            $employee->account_number = $request->account_number;
            $employee->update();
            return response()->json(['status'=>'success','message'=>'Employee Bank Details Updated Successfully !']);
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
    public function storeEmployeeEducationDetails(Request $request, $id)
    {   
        $request->validate([
            'institution' => 'required',
            'subject' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'degree' => 'required',
            'grade' => 'required',
            
            ]);
        try{
            $employee = new EmployeeEducationDetails;
            $employee->institution = $request->institution;
            $employee->subject = $request->subject;
            $employee->start_date = $request->start_date;
            $employee->end_date = $request->end_date;
            $employee->degree = $request->degree;
            $employee->grade = $request->grade;
            $employee->employee_id = $id;
            
            $employee->save();
            return response()->json(['status'=>'success','message'=>'Employee Education Details Added Successfully !']);
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
    public function UpdateEmployeeEducationDetails(Request $request, $id)
    {   
        $request->validate([
            'institution' => 'required',
            'subject' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'degree' => 'required',
            'grade' => 'required',
            
        ]);
        try{
            $employee = EmployeeEducationDetails::find($id);
            $employee->institution = $request->institution;
            $employee->subject = $request->subject;
            $employee->start_date = $request->start_date;
            $employee->end_date = $request->end_date;
            $employee->degree = $request->degree;
            $employee->grade = $request->grade;
            
            $employee->update();
            return response()->json(['status'=>'success','message'=>'Employee Education Details Updated Successfully !']);
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
    public function storeEmployeePresentDetails(Request $request, $id)
    {   
        $request->validate([
            'company_name' => 'required',
            'company_address' => 'required',
            'job_position' => 'required',
            'period_from' => 'required',
            'period_to' => 'required',
            'job_current' => 'required',
            
            ]);
        try{
            $employee = new EmployeePresentDetails;
            $employee->company_name = $request->company_name;
            $employee->company_address = $request->company_address;
            $employee->job_position = $request->job_position;
            $employee->period_from = $request->period_from;
            $employee->period_to = $request->period_to;
            $employee->job_current = $request->job_current;
            $employee->employee_id = $id;
            
            $employee->save();
            return response()->json(['status'=>'success','message'=>'Employee Education Present Details Added Successfully !']);
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
    public function UpdateEmployeePresentDetails(Request $request, $id)
    {   
        $request->validate([
            'company_name' => 'required',
            'company_address' => 'required',
            'job_position' => 'required',
            'period_from' => 'required',
            'period_to' => 'required',
            'job_current' => 'required',
            
        ]);
        try{
            $employee = EmployeePresentDetails::find($id);
            $employee->company_name = $request->company_name;
            $employee->company_address = $request->company_address;
            $employee->job_position = $request->job_position;
            $employee->period_from = $request->period_from;
            $employee->period_to = $request->period_to;
            $employee->job_current = $request->job_current;
            
            $employee->update();
            return response()->json(['status'=>'success','message'=>'Employee Present Education Details Updated Successfully !']);
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
    public function storeEmployeeTrainingDetails(Request $request, $id)
    {   
        $request->validate([
            'companies_name' => 'required',
            'company_location' => 'required',
            'training_course' => 'required',
            'periods_from' => 'required',
            'periods_to' => 'required',
            
            ]);
           
        try{
            $employee = new EmployeeTrainingDetails;
            $employee->companies_name = $request->companies_name;
            $employee->company_location = $request->company_location;
            $employee->training_course = $request->training_course;
            $employee->periods_from = $request->periods_from;
            $employee->periods_to = $request->periods_to;
            $employee->employee_id = $id;
            
            $employee->save();
            return response()->json(['status'=>'success','message'=>'Employee Education Present Details Added Successfully !']);
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
    public function updateEmployeeTrainingDetails(Request $request, $id)
    {   
        $request->validate([
            'companies_name' => 'required',
            'company_location' => 'required',
            'training_course' => 'required',
            'periods_from' => 'required',
            'periods_to' => 'required',
            
        ]);
        try{
            $employee = EmployeeTrainingDetails::find($id);
            $employee->companies_name = $request->companies_name;
            $employee->company_location = $request->company_location;
            $employee->training_course = $request->training_course;
            $employee->periods_from = $request->periods_from;
            $employee->periods_to = $request->periods_to;
            
            $employee->update();
            return response()->json(['status'=>'success','message'=>'Employee Training Education Details Updated Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);
        }
    }

    public function storeEmployeeHealth(Request $request, $id)
    {
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

    public function storeEmployeeSchedule(Request $request, $id)
    {   
        $schedules = json_decode($request->getContent() , true);
        foreach ($schedules as $key => $schedule) {
            
            //If The Array has Monday Timings, Store them
            if(!empty($schedule['monday_start_time']) || !empty($schedule['monday_end_time'])) {
                $employee = new EmployeeSchedule;
                $employee->day = 'Monday';
                $employee->start_time = $schedule['monday_start_time'];
                $employee->end_time = $schedule['monday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();    
            }

            //If The Array has Tuesday Timings, Store them
            if(!empty($schedule['tuesday_start_time']) && !empty($schedule['tuesday_end_time'])) {
                $employee = new EmployeeSchedule;
                $employee->day = 'Tuesday';
                $employee->start_time = $schedule['tuesday_start_time'];
                $employee->end_time = $schedule['tuesday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();    
            }

            //If The Array has Wednesday Timings, Store them
            if(!empty($schedule['wednesday_start_time']) && !empty($schedule['wednesday_end_time'])) {
                $employee = new EmployeeSchedule;
                $employee->day = 'Wednesday';
                $employee->start_time = $schedule['wednesday_start_time'];
                $employee->end_time = $schedule['wednesday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();    
            }

            //If The Array has Thursday Timings, Store them
            if(!empty($schedule['thursday_start_time']) && !empty($schedule['thursday_end_time'])) {
                $employee = new EmployeeSchedule;
                $employee->day = 'Thursday';
                $employee->start_time = $schedule['thursday_start_time'];
                $employee->end_time = $schedule['thursday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();    
            }

            //If The Array has Friday Timings, Store them
            if(!empty($schedule['friday_start_time']) && !empty($schedule['friday_end_time'])) {
                $employee = new EmployeeSchedule;
                $employee->day = 'Friday';
                $employee->start_time = $schedule['friday_start_time'];
                $employee->end_time = $schedule['friday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();    
            }

            //If The Array has Saturday Timings, Store them
            if(!empty($schedule['saturday_start_time']) && !empty($schedule['saturday_end_time'])) {
                $employee = new EmployeeSchedule;
                $employee->day = 'Saturday';
                $employee->start_time = $schedule['saturday_start_time'];
                $employee->end_time = $schedule['saturday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();    
            }

            //If The Array has Sunday Timings, Store them
            if(!empty($schedule['sunday_start_time']) && !empty($schedule['sunday_end_time'])) {
                $employee = new EmployeeSchedule;
                $employee->day = 'Sunday';
                $employee->start_time = $schedule['sunday_start_time'];
                $employee->end_time = $schedule['sunday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();    
            }

        }
        try{
            return response()->json(['status'=>'success','message'=>'Employee Schedule Added Successfully !']);
        }
        catch(\Exception $e)
        {
        
            return response()->json(['status'=>'error','message'=>'Something Went Wrong !']);

        }
    }

    public function updateEmployeeSchedule(Request $request, $id)
    {
        $schedules = json_decode($request->getContent() , true);
        foreach ($request->all() as $key => $schedule) {
            
            //If The Array has Monday Timings, Store them
            if(isset($schedule['monday_start_time']) && isset($schedule['id']) && isset($schedule['monday_end_time'])) {
                $employee = EmployeeSchedule::find($schedule['id']);
                $employee->start_time = $schedule['monday_start_time'];
                $employee->end_time = $schedule['monday_end_time'];
                $employee->update();    
            }
            else if(isset($schedule['monday_start_time']) && isset($schedule['monday_end_time'])) {
                $employee = new EmployeeSchedule;
                $employee->day = 'Monday';
                $employee->start_time = $schedule['monday_start_time'];
                $employee->end_time = $schedule['monday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();
            }

            
            //If The Array has Tuesday Timings, Store them
            if(isset($schedule['tuesday_start_time']) && isset($schedule['id']) && isset($schedule['tuesday_end_time'])) {
                $employee = EmployeeSchedule::find($schedule['id']);
                $employee->start_time = $schedule['tuesday_start_time'];
                $employee->end_time = $schedule['tuesday_end_time'];
                $employee->update();    
            }
            else if(isset($schedule['tuesday_start_time']) && isset($schedule['tuesday_end_time'])){
                $employee = new EmployeeSchedule;
                $employee->day = 'Tuesday';
                $employee->start_time = $schedule['tuesday_start_time'];
                $employee->end_time = $schedule['tuesday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();  
            }

            //If The Array has Wednesday Timings, Store them
            if(isset($schedule['wednesday_start_time']) && isset($schedule['id']) && isset($schedule['wednesday_end_time'])) {
                $employee = EmployeeSchedule::find($schedule['id']);
                $employee->start_time = $schedule['wednesday_start_time'];
                $employee->end_time = $schedule['wednesday_end_time'];
                $employee->update();    
            }
            else if(isset($schedule['wednesday_start_time']) && isset($schedule['wednesday_end_time'])){
                $employee = new EmployeeSchedule;
                $employee->day = 'Wednesday';
                $employee->start_time = $schedule['wednesday_start_time'];
                $employee->end_time = $schedule['wednesday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();
            }

            //If The Array has Thursday Timings, Store them
            if(isset($schedule['thursday_start_time']) && isset($schedule['id']) && isset($schedule['thursday_end_time'])) {
                $employee = EmployeeSchedule::find($schedule['id']);
                $employee->start_time = $schedule['thursday_start_time'];
                $employee->end_time = $schedule['thursday_end_time'];
                $employee->update();    
            }
            else if(isset($schedule['thursday_start_time']) && isset($schedule['thursday_end_time'])){
                $employee = new EmployeeSchedule;
                $employee->day = 'Thursday';
                $employee->start_time = $schedule['thursday_start_time'];
                $employee->end_time = $schedule['thursday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();
            }

            //If The Array has Friday Timings, Store them
            if(isset($schedule['friday_start_time']) && isset($schedule['id']) && isset($schedule['friday_end_time'])) {
                $employee = EmployeeSchedule::find($schedule['id']);
                $employee->start_time = $schedule['friday_start_time'];
                $employee->end_time = $schedule['friday_end_time'];
                $employee->update(); 
            }
            else if(isset($schedule['friday_start_time']) && isset($schedule['friday_end_time'])){
                $employee = new EmployeeSchedule;
                $employee->day = 'Friday';
                $employee->start_time = $schedule['friday_start_time'];
                $employee->end_time = $schedule['friday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();
            }

            //If The Array has Saturday Timings, Store them
            if(isset($schedule['saturday_start_time']) && isset($schedule['id']) && isset($schedule['saturday_end_time'])) {
                $employee = EmployeeSchedule::find($schedule['id']);
                $employee->start_time = $schedule['saturday_start_time'];
                $employee->end_time = $schedule['saturday_end_time'];
                $employee->update(); 
            }
            else if(isset($schedule['saturday_start_time']) && isset($schedule['saturday_end_time'])){
                $employee = new EmployeeSchedule;
                $employee->day = 'Saturday';
                $employee->start_time = $schedule['saturday_start_time'];
                $employee->end_time = $schedule['saturday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();
            }

            //If The Array has Sunday Timings, Store them
            if(isset($schedule['sunday_start_time']) && isset($schedule['id']) && isset($schedule['sunday_end_time'])) {
                $employee = EmployeeSchedule::find($schedule['id']);
                $employee->start_time = $schedule['sunday_start_time'];
                $employee->end_time = $schedule['sunday_end_time'];
                $employee->update();
            }
            else if(isset($schedule['sunday_start_time']) && isset($schedule['sunday_end_time'])){
                $employee = new EmployeeSchedule;
                $employee->day = 'Sunday';
                $employee->start_time = $schedule['sunday_start_time'];
                $employee->end_time = $schedule['sunday_end_time'];
                $employee->employee_id = $id; 
                $employee->save();
            }

        }
        try{
            return response()->json(['status'=>'success','message'=>'Employee Schedule Updated Successfully !']);
        }
        catch(\Exception $e)
        {
        
            return response()->json(['status'=>'error','message'=>'Something Went Wrong !']);

        }
    }
   
    public function nextKin(Request $request, $id){
        $request->validate([
            'country' => 'required',
            'first_name' => 'required', 
            'last_name' => 'required',
            'address_first_line' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'mobile' => 'required',
            'email' => 'required',
        ]);
        $employee = new EmployeeNextKin;           
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->address_first_line = $request->address_first_line;
        $employee->address_second_line = $request->address_second_line;
        $employee->city = $request->city;
        $employee->county = $request->county;
        $employee->country = $request->country;
        $employee->postcode = $request->postcode;
        $employee->home_tel = $request->home_tel;
        $employee->mobile = $request->mobile;
        $employee->email = $request->email;
        $employee->relationship = $request->relationship;
        $employee->employee_id = $id;
        
        $employee->save();
        return redirect()->back() ->with('alert', 'Employee Next Of Kin Added Successfully');
    }

    public function updateNextKin(Request $request, $id){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address_first_line' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postcode' => 'required',
            'mobile' => 'required',
            'email' => 'required',
        ]);
        $employee =  EmployeeNextKin::find($id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->address_first_line = $request->address_first_line;
        $employee->address_second_line = $request->address_second_line;
        $employee->city = $request->city;
        $employee->county = $request->county;
        $employee->country = $request->country;
        $employee->postcode = $request->postcode;
        $employee->home_tel = $request->home_tel;
        $employee->mobile = $request->mobile;
        $employee->email = $request->email;
        $employee->relationship = $request->relationship;
        $employee->update();
        return redirect()->back() ->with('alert', 'Employee Next Of Kin updated Successfully');
    }

    public function updateEmployeeHealth(Request $request, $id)
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

            $employee = EmployeeHealth::find($id);
            $employee->disability = $request->ask;
            $employee->disability_details = $request->disability_details;
            $employee->arrangements = $request->what;
            $employee->arrangements_details = $request->arrangements_details;
            $employee->days = $request->days;
            $employee->state_number = $request->state_number;
            $employee->save();
            return redirect()->back() ->with('alert', 'Employee Health Updated Successfully');



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

        return redirect()->back() ->with('alert', 'Employee Personal Details Save Successfully!');




    }

    public function updatePersonalDetails(Request $request, $id)
        {
        $request->validate([
            'home_tel_no' => 'required',
            'day_tel_no' => 'required',
            'national_no' => 'required',
            'email_address' => 'required',
            // 'contact_at_work' => 'required',
            // 'are_you_free' => 'required',
            // 'are_you_applying' => 'required',
            // 'driving_license' => 'required',
            // 'license_category' => 'required',
        ]);
            $employee = EmployeePersonalDetails::find($id);
            $employee->home_tel_no = $request->home_tel_no;
            $employee->day_tel_no = $request->day_tel_no;
            $employee->national_no = $request->national_no;
            $employee->email_address = $request->email_address;
            $employee->contact_at_work = $request->ask;
            $employee->are_you_free = $request->ask1;
            $employee->are_you_applying = $request->ask2;
            $employee->driving_license = $request->ask3;
            $employee->license_category = $request->ask4;
            $employee->save();
            return redirect()->back() ->with('alert', 'Employee Personal Details Updated Successfully!');
    }
}
