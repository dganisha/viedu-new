<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Teacherconfirmation;
use App\Project;
use App\Video;
use Validator;
use File;

class TeacherController extends Controller
{
	public function show_register()
	{
		return view('auth.guru_register');
	}

	public function show_profile()
	{	
		$dataGuru = Teacherconfirmation::where('user_id', Auth::user()->id)->first();
		$dataChannel = Project::where('user_id', Auth::user()->id)->get();
		$countChannel = $dataChannel->count();
		return view('teacher.profile', compact('dataGuru', 'dataChannel','countChannel'));
	}

    public function index()
    {
    	return view('teacher.myproject');
    }

    ########################## PROSES #################################
    public function add_channel(Request $request)
    {
    	// return $request->all();
        $this->validate($request, [
            'namachannel' => 'required',
            'ketchannel' => 'required',
            'posterchannel' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $namachannel = urlSlug($request->namachannel);
        if($request->hasFile('posterchannel')){
            $image = $request->file('posterchannel');
            $name = time().'.'.$image->getClientOriginalExtension();
            $path = "/".$namachannel."@".Auth::user()->id."@".time();
            $destinationPath = public_path('/viedu/public/img/poster/').$path;
            $destinationPathProject = public_path('/viedu/public/video/').$path;
            if(File::exists($destinationPath)){
                return redirect('/vendor/profile')->with('failed', 'kesalahan jaringan, silahkan ulangi kembali.');
            }
            // $image->move($destinationPath, $name);

            $insertChannel = Project::create([
            	'title' => $request->namachannel,
            	'description' => $request->ketchannel,
            	'url_poster' => "/viedu/public/img/poster/".$path."/".$name,
            	'url_project' => "/viedu/public/video/".$path,
            	'user_id' => Auth::user()->id,
            ]);
            $insertPoster = $image->move($destinationPath, $name);
            $insertProject = File::makeDirectory($destinationPathProject, $mode = 0777, true, true);

           	if($insertChannel && $insertPoster){
           		return redirect('/vendor/profile')->with('success','Success added new channel!');
           	}else{
           		return redirect('/vendor/profile')->with('failed','Failed add new Channel');
           	}
        }
    }

    public function show_channel($namachannel, $id)
    {
    	$namachannel = unSlug($namachannel);
    	// return $namachannel;
    	$searchChannel = Project::where('id',$id)->first();
    	if($searchChannel == TRUE){
    		$dataVideo = Video::where('project_id', $searchChannel->id)->get();
    		$countVideo = $dataVideo->count();
    		return view('teacher.show_channel', compact('dataVideo','countVideo','searchChannel'));
    	}
    }

    public function add_video(Request $request)
    {
    	// return $request->all();
    	$this->validate($request, [
            'tittle_video' => 'required',
            'keterangan_video' => 'required',
            'poster_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_file' => 'required|mimes:mp4,avi,mpeg,webm,wmv,3gp,avi,mov,rm,mpg,ogg,qt',
            'channelid' => 'required|numeric'
        ]);

    	$cariChannel = Project::findOrFail($request->channelid);

    	if($request->hasFile('poster_file') && $request->hasFile('video_file')){
            $image = $request->file('poster_file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPathPoster = public_path($cariChannel->url_project);

            $video = $request->file('video_file');
            $nameVid = time().'.'.$video->getClientOriginalExtension();
            $destinationPathVideo = public_path($cariChannel->url_project);

            // $image->move($destinationPath, $name);

            $insert = Video::create([
            	'project_id' => $cariChannel->id,
            	'title_video' => $request->tittle_video,
            	'description_video' => $request->keterangan_video,
            	'source_video' => $cariChannel->url_project."/".$nameVid,
            	'source_poster' => $cariChannel->url_project."/".$name,
            ]);

            $insertPoster = $image->move($destinationPathPoster, $name);
            $insertVideo = $video->move($destinationPathVideo, $nameVid);
           	if($insert && $insertPoster && $insertVideo){
           		return redirect('/vendor/profile')->with('success','Success added new videos!');
           	}else{
           		return redirect('/vendor/profile')->with('failed','Failed add new video');
           	}
        }

    }
}
