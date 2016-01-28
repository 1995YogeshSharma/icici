<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;

class ImageController extends Controller
{
    //
    //redirect to image upload form
    public function upload(){
        return view('imageupload');
    }

    //store the records process
    public function store(Request $request) {
        $image = new Image();
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required'
        ]);
        $image->title = $request->title;
        $image->description = $request->description;
        if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ',':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $image->filePath = $name;
            $file->move(public_path().'/images/', $name);
        }
        $image->save();
    //    return $this->create()->with('success', 'Image Uploaded Successfully');
    }

    //show the list of images
    public function show() {
        $images = Image::all();
        return view('showLists', compact('images'));
    }
}
