<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function YoutubeVideos(){
        return view('youtube_videos.youtube_videos');
    }
}