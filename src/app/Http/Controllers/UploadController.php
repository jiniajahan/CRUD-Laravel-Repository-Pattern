<?php

namespace App\Http\Controllers;

use App\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){

        return view('posts.upload');
    }

    public function store(Request $request){

        try{
            if ($request->hasFile('image')){
                $request->file('image');
                $imagename = $request->image->getClientOriginalName();
                $imagesize = $request->image->getClientOriginalName();

                $request->image->storeAs('public/upload',$imagename);

                $image = new Upload;

                $image->name = $imagename;
                $image->size = $imagesize;

                $image->save();
                return 'yes';
            }
            else{
                return "No file selected";
            }
        }catch (\Exception $e){
            throw $e;
        }
    }


}
