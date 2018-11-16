<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\User;
use Validator;

class VideoController extends Controller
{
    public function nonton_vid($id)
    {
    	$expl = explode('start', $id);
    	if(!isset($expl[1])){
    		return redirect('/');
    	}
    	$video_id = $expl[1];

    	$data_video = Video::findOrFail($video_id);
    	return view('users.nonton', compact('data_video'));
    }
}
