<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @group  Document Management
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        return $documents;
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
     * @bodyParam  file string required The uploaded file.
     * @bodyParam  name string required The uploaded file name given by the user.
     *
     * @group  Document Management
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
      */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [  
            'name' => 'required',
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);
        
        if ($validator->fails()) {  
            return response()
                        ->json(["errors"=>$validator->errors()], 400);
        }

        $file = $request -> file('file');
        $originalName = $file->getClientOriginalName();
        $fileSize = $file->getSize();

        $filePath = "file/$originalName";
        Storage::disk('s3')->put($filePath, file_get_contents($file), [ 'visibility' => 'public']);

        $file = new document;
        $file->name = $request->name;
        $file->file_name = $originalName;
        $file->file_size = $fileSize;
        $file->file_url = $filePath;
        $file->save();
        return $file;
    }

    /**
     * Display the specified resource.
     *
     * @queryParam  id required The id of the Document data.
     *
     * @group  Document Management
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Document::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @queryParam  id required The id of the Document data.
     *
     * @group  Document Management
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Document::findOrFail($id); 
        $filePath = str_replace(env("MIX_ASSET_URL"),"",$document->file_url);

        if(!Storage::disk('s3')->exists($filePath)){
            return response()
            ->json(["message" => "Document on $filePath does not exist"], 404);
        }

        if(Storage::disk('s3')->delete($filePath))
        {
             $document->delete();
             return response()
            ->json(["message" => "Document file deleted"]);
        }else{
            return response()
            ->json(["message" => "Could not delete File"], 500);
        }

        return response()
            ->json(["message" => "Server Error"], 500);
    }
}
