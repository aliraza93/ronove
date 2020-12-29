<?php

namespace App\Http\Controllers;

use App\Models\BookServiceStaff;
use App\Models\Employee;
use App\Models\EmployeeSchedule;
use App\Models\ServiceUser;
use Illuminate\Http\Request;
use Auth;

class BookServiceStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PendingBookings()
    {
        return view('employee.pending-bookings');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ApprovedBookings()
    {
        return view('employee.approved-bookings');
    }

    public function PendingBookingsList(Request $request){
        $booking_status = $request->name;
        $schedules = BookServiceStaff::where('employee_id', Auth::user()->employee_id)->where('booking_status', 'pending')->orderBy('booking_status','asc');
        if($booking_status != ''){
            $schedules->where('booking_status','LIKE','%'.$booking_status.'%');
        }
        $schedules = $schedules->paginate(10);
        return $schedules;
    }

    public function ApprovedBookingsList(Request $request){
        $booking_status = $request->name;
        $schedules = BookServiceStaff::where('employee_id', Auth::user()->employee_id)->where('booking_status', 'approved')->orderBy('booking_status','asc');
        if($booking_status != ''){
            $schedules->where('booking_status','LIKE','%'.$booking_status.'%');
        }
        $schedules = $schedules->paginate(10);
        return $schedules;
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
    public function store(Request $request, Employee $employee, EmployeeSchedule $employee_schedule, ServiceUser $service_user)
    {
        try{
            $bookServiceStaff = new BookServiceStaff;
            $bookServiceStaff->employee_id = $employee->id;
            $bookServiceStaff->service_user_id = $service_user->id;
            $bookServiceStaff->schedule_id = $employee_schedule->id;
            $bookServiceStaff->booking_status = 'Pending';
            $bookServiceStaff->save();
            return response()->json(['status'=>'success','message'=>'Service Staff Booked Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>'Something Went Wrong!']);

        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookServiceStaff  $bookServiceStaff
     * @return \Illuminate\Http\Response
     */
    public function approveServiceStaffBooking(Request $request, BookServiceStaff $bookServiceStaff)
    {
        try{
            $bookServiceStaff->booking_status = 'approved';
            $bookServiceStaff->update(); 
            return response()->json(['status'=>'success','message'=>'Booking marked as approved Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>'Something Went Wrong!']);

        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookServiceStaff  $bookServiceStaff
     * @return \Illuminate\Http\Response
     */
    public function rejectServiceStaffBooking(Request $request, BookServiceStaff $bookServiceStaff)
    {
        try{
            $bookServiceStaff->booking_status = 'rejected';
            $bookServiceStaff->update(); 
            return response()->json(['status'=>'success','message'=>'Booking marked as rejected Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>'Something Went Wrong!']);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookServiceStaff  $bookServiceStaff
     * @return \Illuminate\Http\Response
     */
    public function show(BookServiceStaff $bookServiceStaff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookServiceStaff  $bookServiceStaff
     * @return \Illuminate\Http\Response
     */
    public function edit(BookServiceStaff $bookServiceStaff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookServiceStaff  $bookServiceStaff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookServiceStaff $bookServiceStaff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookServiceStaff  $bookServiceStaff
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookServiceStaff $bookServiceStaff)
    {
        //
    }
}
