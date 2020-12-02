<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Session;
use Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::where('organization_id', Session::get('OrganizationId'));
        return view('organization.client', compact('clients'));
    }

    public function ClientList(Request $request){
        $id = $request->id;
        $name = $request->name;
        $client = Client::where('organization_id', Session::get('OrganizationId'))->orderBy('created_at','desc');
        if($name != ''){
            $client->where('first_name','LIKE','%'.$name.'%');
        }
        if($id != ''){
            $client->where('id','LIKE','%'.$id.'%');
        }
        $client = $client->paginate(10);
        return $client;
    }

    public function SystemsList(Request $request){
        $systems = System::all();
        $ids = array();
        $client = Client::where('id', $request->id)->first();
        foreach (Client::all() as $key => $value) {
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'company_register' => 'required',
            'post_code' => 'required',
            'unique_tax_reference' => 'required',
            'charity' => 'required'
            ]);
            //dd($request);
        try{
            $client = new Client;
            $client->first_name = $request->first_name;
            $client->last_name = $request->last_name;
            $client->address = $request->address;
            $client->company = $request->company;
            $client->phone = $request->phone;
            $client->email = $request->email;
            $client->company_register = $request->company_register;
            $client->unique_tax_reference = $request->unique_tax_reference;
            $client->post_code = $request->post_code;
            $client->charity = $request->charity;
            $client->organization_id = Session::get('OrganizationId');
            /*if ($request->has('image')) {
                $client->clearMediaCollection('clients');
    
                $client->addMedia($request->image)
                        ->toMediaCollection('clients');
            }
            */
            $client->save();
            return response()->json(['status'=>'success','message'=>'Client Added Successfully !']);
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
    public function edit(Client $client)
    {
        return $client;
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
            'company' => 'required',
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'company_register_number' => 'required',
            'post_code' => 'required',
            'unique_tax_reference' => 'required',
            'charity_number' => 'required'
        ]);
        try{
            $client = Client::find($id);
            $client->first_name = $request->first_name;
            $client->last_name = $request->last_name;
            $client->address = $request->address;
            $client->company = $request->company;
            $client->phone = $request->phone;
            $client->email = $request->email;
            $client->company_register_number = $request->company_register_number;
            $client->unique_tax_reference = $request->unique_tax_reference;
            $client->post_code = $request->post_code;
            $client->charity_number = $request->charity_number;
            $client->organization_id = Session::get('OrganizationId');
            $client->update();
            return response()->json(['status'=>'success','message'=>'Client Updated Successfully !']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>'Something Went Wrong']);

        }
    }

    public function assignSystem(Request $request, $id)
    {
        $array = explode(',', $request->id);
        $client = Client::find($id);
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
                //dd($client->systems());
                //$client->systems->save($system);
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
    public function destroy(Client $client)
    {
        $user = User::where('client_id', $client->id)->first();
        if($user != null) {
            $user->delete();
        }

        //$client->removeRole('organization');
        //$client->delete();
    }
}
