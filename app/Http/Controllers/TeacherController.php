<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Auth;
use App\Teacherconfirmation;
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
            if(File::exists($destinationPath)){
                return redirect('/vendor/profile')->with('failed', 'kesalahan jaringan, silahkan ulangi kembali.');
            }
            // $image->move($destinationPath, $name);

            $insertChannel = Project::create([
            	'title' => $request->namachannel,
            	'description' => $request->ketchannel,
            	'url_poster' => "/viedu/public/img/poster".$path."/".$name,
            	'user_id' => Auth::user()->id,
            ]);
            $insertPoster = $image->move($destinationPath, $name);

           	if($insertChannel && $insertPoster){
           		return redirect('/vendor/profile')->with('success','Success added new channel!');
           	}else{
           		return redirect('/vendor/profile')->with('failed','Failed add new Channel');
           	}
        }
    }
}
