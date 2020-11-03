<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @group  Media Management
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::all();
        return $medias;
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
     * @bodyParam  image string required The uploaded image.
     *
     * @group  Media Management
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*request()->validate([
            'image' => ['required', 'image'],
        ]);*/ 

        $validator = \Validator::make($request->all(), [  
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        if ($validator->fails()) {  
            return response()
                        ->json(["errors"=>$validator->errors()], 400);
        }
        
        $image = $request->file('image');
        $originalname = $image->getClientOriginalName();//Getting original name

        $filePath = "media/$originalname";
        Storage::disk('s3')->put($filePath, file_get_contents($image), [ 'visibility' => 'public']);
        //$path = $image->store('uploads', 'public'); //Getting the storage path
        //$realPath = "storage/{$path}";


        $imgsizes = $image->getSize();//Getting the image size in bytes
        $media = new media;
        $media->file_size = $imgsizes;
        $media->file_name = $originalname;
        $media->file_url = $filePath;     
        $media->save();
        return $media;
    }

    /**
     * Display the specified resource.
     * 
     *@queryParam  id required The id of the Media data.
     *
     * @group  Media Management
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Media::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
     * @queryParam  id required The id of the Media data.
     *
     * @group  Media Management
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::findOrFail($id); 
        $imagepath = str_replace(env("MIX_ASSET_URL"),"",$media->file_url);

        if(Storage::disk('s3')->exists($imagepath) && Storage::disk('s3')->delete($imagepath))
        {
             $media->delete();
             return response()
            ->json(["message" => "Image file deleted"]);
        }

        return response()
            ->json(["message" => "Could not delete image"], 500);
    }
}
