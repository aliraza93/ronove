<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use Session;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class FolderController extends Controller
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

    public function FilesList(Request $request){
        $id = $request->id;
        $name = $request->name;
        $folder = Folder::with('project')
            ->whereHas('project.users', function($query) {
                $query->where('id', auth()->id());
            })->get();
        if($name != ''){
            $folder->files->where('name','LIKE','%'.$name.'%');
        }
        $folder = $folder->paginate(10);
        return $folder;
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
    public function store(Request $request, $parent_id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        try{
            $folder = Folder::with('project')
                ->whereHas('project.users', function($query) {
                    $query->where('id', auth()->id());
                })->findOrFail($parent_id);

            $newFolder = Folder::create([
                'parent_id' => $parent_id,
                'name' => $request->name,
                'project_id' => $folder->project_id,
            ]);
            return response()->json(['status'=>'success','message'=>'Folder Created Successfully!']);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);

        }
    }

    public function storeMedia(Request $request)
    {
        // Validates file size
        try{
            if (request()->has('size')) {
                $this->validate(request(), [
                    'file' => 'max:' . request()->input('size') * 1024,
                ]);
            }
    
            // If width or height is preset - we are validating it as an image
            if (request()->has('width') || request()->has('height')) {
                $this->validate(request(), [
                    'file' => sprintf(
                        'image|dimensions:max_width=%s,max_height=%s',
                        request()->input('width', 100000),
                        request()->input('height', 100000)
                    ),
                ]);
            }
            $folder = Folder::with('project')
                ->whereHas('project.users', function($query) {
                    $query->where('id', auth()->id());
                })->findOrFail($request->folder_id);
            $folder->addMediaFromRequest('file')->toMediaCollection('files');
            return response()->json(['status'=>'success','message'=>'Files have been uploaded successfully!']);
        }
        catch(\Exception $e) {
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);
        }
    }

    public function downloadFile(Request $request, Media $media)
    {
        try{
            return $media;
        }
        catch(\Exception $e) {
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);
        }
    }

    public function renameFile(Request $request, Media $media, $name)
    {
        try{
            $media->file_name = $name . '.' . $media->extension;
            $media->save();
        }
        catch(\Exception $e) {
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);
        }
    }

    public function deleteFile(Request $request, Media $media)
    {
        $media->delete();
    }

    public function renameFolder(Request $request, Folder $folder, $name)
    {
        try{
            $folder->name = $name;
            $folder->save();
        }
        catch(\Exception $e) {
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);
        }
    }

    public function deleteFolder(Request $request, Folder $folder)
    {
        $folder->delete();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Folders  $folders
     * @return \Illuminate\Http\Response
     */
    public function show(Folder $folder, $id)
    {
        $folder = Folder::with('project')
                ->whereHas('project.users', function($query) {
                    $query->where('id', auth()->id());
                })->findOrFail($id);
        return response()->json([
            'children' => $folder->children,
            'folder' => $folder
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Folders  $folders
     * @return \Illuminate\Http\Response
     */
    public function edit(Folders $folders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Folders  $folders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Folders $folders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Folders  $folders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Folders $folders)
    {
        //
    }
}
