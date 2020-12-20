<?php

namespace App\Http\Controllers;

use App\Models\Dosage;
use Illuminate\Http\Request;
use Session;

class DosageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosage = Dosage::latest()->get()->first();
        return view('organization.setting.dosage', compact('dosage'));
    }

    public function DosageList(Request $request){
        $name = $request->name;
        $dosage = Dosage::where('organization_id', Session::get('OrganizationId'))->orderBy('created_at','desc');
        if($name != ''){
            $dosage->where('name','LIKE','%'.$name.'%');
        }
        $dosage = $dosage->paginate(10);
        return $dosage;
    }

    public function PermissionsList(Request $request){
        $permissions = Permission::all();
        $ids = array();
        $dosage = Dosage::where('id', $request->id)->first();
        foreach ($permissions as $key => $value) {
            if($dosage->hasPermissionTo($value)) {
                if($dosage != null) {
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
        ]);
        try{
            $dosage = new Dosage;
            $dosage->name = $request->name;
            $dosage->organization_id = Session::get('OrganizationId');
            $dosage->save();

            return response()->json(['status'=>'success','message'=>'Dosage Added Successfully !']);
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
    public function edit(Dosage $dosage)
    {
        return $dosage;
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
            $dosage = Dosage::find($id);
            $dosage->name = $request->name;
            $dosage->update();

            return response()->json(['status'=>'success','message'=>'Dosage Updated Successfully !']);
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
    public function destroy(Dosage $dosage)
    {
        $dosage->delete();
        
    }
}