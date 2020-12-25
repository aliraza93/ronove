<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use Session;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine = Medicine::latest()->get()->first();
        return view('organization.setting.medicines', compact('medicine'));
    }

    public function MedicineList(Request $request){
        $name = $request->name;
        $medicine = Medicine::where('organization_id', Session::get('OrganizationId'))->where('system_id', Session::get('system_id'))->orderBy('created_at','desc');
        if($name != ''){
            $medicine->where('name','LIKE','%'.$name.'%');
        }
        $medicine = $medicine->paginate(10);
        return $medicine;
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
        ]);
        try{
            $medicine = new Medicine;
            $medicine->name = $request->name;
            $medicine->organization_id = Session::get('OrganizationId');
            $medicine->system_id = Session::get('system_id');
            $medicine->save();

            return response()->json(['status'=>'success','message'=>'Medicine Added Successfully !']);
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
    public function edit(Medicine $medicine)
    {
        return $medicine;
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
        ]);
        try{
            $medicine = Medicine::find($id);
            $medicine->name = $request->name;
            $medicine->update();

            return response()->json(['status'=>'success','message'=>'Medicine Updated Successfully !']);
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
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
    }
}