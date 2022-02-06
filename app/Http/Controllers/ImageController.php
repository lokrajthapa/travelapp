<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;


class ImageController extends Controller
{
    //
    public function addImages()
    {
       return view('Image.add-image');
    }
    //store the images to database
    public function ImageStore(Request $request)
    {
        $title =$request->title;
      
        $text =$request->text;
        $image =$request->file('image');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('/uploads/image'), $imageName);

        $blog = new Image();

        $blog->title=$title;
       
        $blog->text=$text;
        $blog->image=$imageName;
        $blog->save();
        return redirect()->back()->with('image_added',' image and description Stored successfully');

     }

     public function images()
     { 
        $images=Image::all();
         return view('Image.all-image',compact('images'));
     }

     public function edit($id)
     {
        $image =Image::find($id);
        return view('Image.edit-image', compact('images'));
     }
}
