<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Folder;
use Illuminate\Http\Request;
use Session;
use Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function ProjectsList(Request $request){
        $id = $request->id;
        $name = $request->name;
        if(Session::get('system_id') != null) {
            $project = Project::whereHas('users', function($query) {
                $query->where('id', Auth::user()->id);
            })->orderBy('created_at','desc');
        }
        else {
            $project = Project::whereHas('users', function($query) {
                $query->where('id', Auth::user()->id);
            })->orderBy('created_at','desc');
        }
        if($name != ''){
            $project->where('name','LIKE','%'.$name.'%');
        }
        $project = $project->paginate(10);
        return $project;
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
            'name' => ['required', 'string', 'max:255'],
        ]);
        try{
            $project = new Project;
            $project->name = $request->name;
            $project->save();
            $project->folders()->create([
                'name' => 'Parent Directory'
            ]);
            $project->users()->sync(Auth::user());
            return response()->json(['status'=>'success','message'=>'Project Added Successfully !']);
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
        $project = Project::whereHas('users', function($query) {
            $query->where('id', auth()->id());
        })->findOrFail($id);
        if (!$project->parentDirectory) {
            return back();
        }
        $folder = Folder::with('project')
                ->whereHas('project.users', function($query) {
                    $query->where('id', auth()->id());
                })->findOrFail($project->parentDirectory->id);
        return response()->json([
            'children' => $folder->children,
            'folder' => $folder
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return $project;
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
            'name' => ['required', 'string', 'max:255'],
        ]);
        try{
            $project = Project::find($id);
            $project->name = $request->name;
            $project->update();
            return response()->json(['status'=>'success','message'=>'Project Updated Successfully !']);
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
    public function destroy(Project $project)
    {
        $project->delete();
    }
}
