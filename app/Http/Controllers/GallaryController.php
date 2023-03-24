<?php

namespace App\Http\Controllers;

use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function gallery()
    {
        $data = Gallary::all();
        return view('gallery.gallery',['data'=>$data]);
    }

    public function galleryAddNewGallery()
    {
        return view('gallery.uploadimage');
    }


    public function storegallary(Request $request)
    {
        $data = new Gallary;
        $data->name = $request->name;
      
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/gallary/', $filename);
                $data->image = $filename;
            }
            $data->save();
            return redirect('/gallery')->with('status', 'Image Added Successfully');
     

    }
}