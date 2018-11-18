<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Video;
use App\User;
use App\Favorite;
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
        $countFav = Favorite::where('user_id', Auth::user()->id)->where('video_id', $data_video->id)->count();
        // return $countSub;
    	return view('users.nonton', compact('data_video', 'countSub', 'randomVideo','countFav'));
    }

    public function favorite(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'videoid' => 'required|numeric',
        ]);

        //Mencari dahulu apakah id dari video tersebut ada atau tidak
        $cariVid = Video::where('id', $request->videoid)->first();
        if($cariVid){
            //Mencari apakah user sudah pernah memfavoritkan video 
            $searchFav = Favorite::where('user_id', Auth::user()->id)->where('video_id', $cariVid->id)->first();
            if($searchFav){
                $countFav = $searchFav->count();
            }else{
                $countFav = 0;
            }
            if($countFav == 0){
                //Proses favorit
                $favorite = Favorite::create([
                    'user_id' => Auth::user()->id,
                    'video_id' => $cariVid->id
                ]);
                if($favorite){
                    return redirect()->back();
                }else{
                    return redirect()->back();
                }
            }else{
                return redirect()->back();
            }
        }else{
            return redirect('/');
        }
    }
}
