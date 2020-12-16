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
use App\Models\Employee;
use App\Models\EmployeeSchedule;
use App\Models\ServiceCarePlan;
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

    public function ServiceStaffList(Request $request){
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $matchThese = array();
        $data = [];
        $employees = Employee::where('organization_id', Session::get('OrganizationId'))->get();
        foreach ($employees as $id => $value) {
            $matchThese[$id] = $value->id;
        }
        foreach ($matchThese as $key => $value) {
            $schedules[$key] = EmployeeSchedule::where('employee_id', $value)->orderBy('created_at','desc');    
        }
        foreach ($schedules as $key => $schedule) {
            if($start_date != ''){
                $schedule->where('start_date','>=',$start_date);
            }
            if($end_date != ''){
                $schedule->where('end_date','<=',$end_date);
            }
            if($start_time != ''){
                $schedule->where('start_time','>=', $start_time);
            }
            if($end_time != ''){
                $schedule->where('end_time','<=', $end_time);
            }
            $data[$key] = $schedule->paginate();
        }
        return $data;
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
    public function serviceCarePlan(Request $request, $id){
        $request->validate([
            'Salary_basic' => 'required',
            'salary_amount' => 'required', 
            'payment_type' => 'required',
            'emp_pf_rate' => 'required',
            'total_rate' => 'required',
            'em_esi_rate' => 'required',
            'additional_esi_rate' => 'required',
            'total_esi_rate' => 'required',
        ]);
        $service = new ServiceCarePlan();           
        $service->Salary_basic = $request->Salary_basic;
        $service->salary_amount = $request->salary_amount;
        $service->payment_type = $request->payment_type;
        $service->pf_cuntribution = $request->pf_cuntribution;
        $service->pf_no = $request->pf_no;
        $service->emp_pf_rate = $request->emp_pf_rate;
        $service->additional_rate = $request->additional_rate;
        $service->total_rate = $request->total_rate;
        $service->emp_pf_rate2 = $request->emp_pf_rate2;
        $service->additional_rate2 = $request->additional_rate2;
        $service->total_rate2 = $request->total_rate2;
        $service->esi_contribution = $request->esi_contribution;
        $service->esi_no = $request->esi_no;
        $service->em_esi_rate = $request->em_esi_rate;
        $service->additional_esi_rate = $request->additional_esi_rate;
        $service->total_esi_rate = $request->total_esi_rate;

        $service->service_user_id = $id;
        
        $service->save();
        return redirect()->back() ->with('alert', 'Services Care Added Successfully');
   }
   public function updateserviceCarePlan(Request $request, $id){
    $request->validate([
        'Salary_basic' => 'required',
        'salary_amount' => 'required', 
        'payment_type' => 'required',
        'emp_pf_rate' => 'required',
        'total_rate' => 'required',
        'em_esi_rate' => 'required',
        'additional_esi_rate' => 'required',
        'total_esi_rate' => 'required',
    ]);
    $service =serviceCarePlan::find($id);          
    $service->Salary_basic = $request->Salary_basic;
    $service->salary_amount = $request->salary_amount;
    $service->payment_type = $request->payment_type;
    $service->pf_cuntribution = $request->pf_cuntribution;
    $service->pf_no = $request->pf_no;
    $service->emp_pf_rate = $request->emp_pf_rate;
    $service->additional_rate = $request->additional_rate;
    $service->total_rate = $request->total_rate;
    $service->emp_pf_rate2 = $request->emp_pf_rate2;
    $service->additional_rate2 = $request->additional_rate2;
    $service->total_rate2 = $request->total_rate2;
    $service->esi_contribution = $request->esi_contribution;
    $service->esi_no = $request->esi_no;
    $service->em_esi_rate = $request->em_esi_rate;
    $service->additional_esi_rate = $request->additional_esi_rate;
    $service->total_esi_rate = $request->total_esi_rate;

    $service->update();
    
    $service->save();
    return redirect()->back() ->with('alert', 'Services Care Updated Successfully');
    }

}
