<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoLectureAddController extends Controller
{
    public function VideoLectureAdd(){
        return view('smartclass.video_lecture_add');
    }
}
