<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Video;
use App\User;
use Validator;
use Auth;

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
        $randomVideo = Video::where('project_id', $data_video->project_id)->where('id','!=',$data_video->id)->limit(4)->get();
        $countSub = Order::where('user_id', Auth::user()->id)->where('project_id',$data_video->project_id)->count();
        // return $countSub;
    	return view('users.nonton', compact('data_video', 'countSub', 'randomVideo'));
    }
}
