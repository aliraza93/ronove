<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;
use Session;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route = Route::latest()->get()->first();
        return view('organization.setting.route', compact('route'));
    }

    public function RouteList(Request $request){
        $name = $request->name;
        $route = Route::where('organizations_id', Session::get('OrganizationId'))->orderBy('created_at','desc');
        if($name != ''){
            $route->where('name','LIKE','%'.$name.'%');
        }
        $route = $route->paginate(10);
        return $route;
    }

    public function PermissionsList(Request $request){
        $permissions = Permission::all();
        $ids = array();
        $route = Route::where('id', $request->id)->first();
        foreach ($permissions as $key => $value) {
            if($route->hasPermissionTo($value)) {
                if($route != null) {
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
            $route = new Route;
            $route->name = $request->name;
            $route->organizations_id = Session::get('OrganizationId');
            $route->save();

            return response()->json(['status'=>'success','message'=>'Route Added Successfully !']);
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
    public function edit(Route $route)
    {
        return $route;
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
            $route = Route::find($id);
            $route->name = $request->name;
            $route->update();

            return response()->json(['status'=>'success','message'=>'Route Updated Successfully !']);
        }
        catch(\Exception $e)
        {

            return response()->json(['status'=>'error','message'=>'Something Went Wrong']);

        }
    }

    public function updatePermissions(Request $request, $id)
    {
        $array = explode(',', $request->id);
        $permissions = Permission::all();
        $route = Route::where('id', $id)->first();
        if(!Role::where('name', 'route')){
            //dd('No Route');
            $role = Role::create(['name' => 'route']);
            $route->assignRole($role);
        }
        elseif ($route->hasRole('route')) {
            //dd('Has Role');
            foreach ($permissions as $key => $value) {
                if($route->hasPermissionTo($value->id)) {
                    $route->revokePermissionTo($value->id);
                }
            }
            //$route->hasPermissionTo(1);
        }
        else{
            //dd('Assign');
            $role = Role::where(['name' => 'route'])->first();
            $route->assignRole($role);
        }
        try{
            foreach ($array as $key => $value) {
                $route->givePermissionTo(Permission::find($value)->id);
            }
            return response()->json(['status'=>'success','message'=>'Permissions Granted Successfully !']);
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
    public function destroy(Route $route)
    {
        $route->delete();
    }
}