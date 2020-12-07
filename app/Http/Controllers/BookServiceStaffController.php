<?php

namespace App\Http\Controllers;

use App\Models\BookServiceStaff;
use Illuminate\Http\Request;
use Auth;

class BookServiceStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.booking');
    }

    public function BookingList(Request $request){
        $booking_status = $request->name;
        $system = BookServiceStaff::where('employee_id', Auth::user()->employee_id)->orderBy('created_at','desc');
        if($booking_status != ''){
            $system->where('booking_status','LIKE','%'.$booking_status.'%');
        }
        $system = $system->paginate(10);
        return $system;
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
    public function store(Request $request, $employee_id, $id, $service_user_id)
    {
        try{
            $bookServiceStaff = new BookServiceStaff;
            $bookServiceStaff->employee_id = $employee_id;
            $bookServiceStaff->service_user_id = $service_user_id;
            $bookServiceStaff->schedule_id = $id;
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
