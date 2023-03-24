<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoLectureController extends Controller
{
   public function VideoLecture(){
        return view('smartclass.video_lecture');
    }
}
