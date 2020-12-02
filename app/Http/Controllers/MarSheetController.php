<?php

namespace App\Http\Controllers;

use App\Models\MarSheet;
use App\Models\ServiceUser;
use Illuminate\Http\Request;

class MarSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function MarSheetList(Request $request){
        //$id = $request->id;
        $name = $request->name;
        $mar_sheet = MarSheet::orderBy('created_at','desc');
        if($name != ''){
            $mar_sheet->where('medicine','LIKE','%'.$name.'%');
        }
        //if($id != ''){
        //    $mar_sheet->where('id','LIKE','%'.$id.'%');
        //}
        $mar_sheet = $mar_sheet->paginate(10);
        return $mar_sheet;
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
            'medicine' => 'required',
            'dosage' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'route' => 'required',
            'time' => 'required',
            'days' => 'required',
            'instructions' => 'required',
        ]);
        $added_by = ServiceUser::where('id', $request->added_by)->first();
        try {
            $exploded = explode('T', $request->start_date);
            $exploded2 = explode('T', $request->end_date);
            $mar_sheet = new MarSheet();
            $mar_sheet->medicine = $request->medicine;
            $mar_sheet->dosage = $request->dosage;
            $mar_sheet->start_date = $exploded[0];
            $mar_sheet->end_date = $exploded2[0];
            $mar_sheet->route = $request->route;
            $mar_sheet->time = serialize($request->time);
            $mar_sheet->days = serialize($request->days);
            $mar_sheet->instructions = $request->instructions;
            $mar_sheet->added_by = $added_by->first_name . ' ' . $added_by->last_name;
            $mar_sheet->service_user_id = $request->added_by;
            $mar_sheet->save();
            return response()->json(['status'=>'success','message'=>'MAR Sheet Added Successfully !']);
        } catch (\Throwable $th) {
            return response()->json(['status'=>'error','message'=>'Something Went Wrong !']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MarSheet  $marSheet
     * @return \Illuminate\Http\Response
     */
    public function show(MarSheet $marSheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MarSheet  $marSheet
     * @return \Illuminate\Http\Response
     */
    public function edit(MarSheet $marSheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MarSheet  $marSheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MarSheet $marSheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MarSheet  $marSheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarSheet $marSheet)
    {
        //
    }
}
