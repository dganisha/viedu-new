<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Teacherconfirmation;
use App\Project;
use App\Video;
use App\User;
use Validator;
use File;
use Storage;

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

    public function update_profile(Request $request)
    {
        $this->validate($request, [
            'bio' => 'required',
            'no_hp' => 'required'
        ]);

        $update = User::where('id', Auth::user()->id)->update([
            'phone_number' => $request->no_hp
        ]);
        $update = Teacherconfirmation::where('user_id', Auth::user()->id)->update([
            'bio' => $request->bio
        ]);
        if($update){
            return redirect('/vendor/profile')->with('success', 'Success changes profile');
        }else{
            return redirect('/vendor/profile')->with('failed', 'Failed changes profile');
        }
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

        $verif = Teacherconfirmation::where('user_id', Auth::user()->id)->first();
        if($verif->verifikasi != 'verified'){
            return redirect('/vendor/profile')->with('failed','Mohon maaf, anda hanya bisa mengupload/membuat channel/video ketika akun sudah terverifikasi');
        }

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

    public function edit_channel(Request $request)
    {
        $this->validate($request, [
            'channelid' => 'required|numeric',
            'namachannel' => 'required',
            'ketchannel' => 'required',
            'posterchannel' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // $d = "/viedu/public/img/poster//IPS-SMA@9@1542535899/1542535899.png";
        // return explode('/', $d)[6];
        $namachannel = urlSlug($request->namachannel);

        $channel = Project::findOrFail($request->channelid);
        if($channel){
            if($request->namachannel != $channel->title){
                $namechannel = $request->namachannel;
            }else{
                $namechannel = $channel->title;
            }

            // return str_replace('video','img/poster', $channel->url_poster);
            //Cek apakah poster channel itu file?
            if($request->hasFile('posterchannel')){
                $image = $request->file('posterchannel');
                $name = time().'.'.$image->getClientOriginalExtension();

                //Inisialisasikan nama poster sebelumnya
                $namePoster = explode('/', $channel->url_poster)[7];

                $path = str_replace('video','img/poster', $channel->url_poster);
                //Inisialisasi letak folder nya
                $letak = public_path(str_replace($namePoster, '', $channel->url_poster));
                // return $channel->url_poster;
                $destinationPath = public_path($path);
                // return $destinationPath;
                if(File::exists($destinationPath)){
                    //Delete poster sebelumnya
                    $delete = File::delete($destinationPath);
                    //Lalu input foto baru
                    $insert = $image->move($letak, $name);
                    $urlPoster = str_replace('/home/dganisha/educourse/public','',$letak).$name;
                }
            }else{
                $urlPoster = $channel->url_poster;
            }

            $updateChannel = $channel->update([
                'title' => $namechannel,
                'description' => $request->ketchannel,
                'url_poster' => $urlPoster
            ]);
            if($updateChannel){
                return redirect('/vendor/profile')->with('success','Sukses mengedit channel');
            }else{
                return redirect('/vendor/profile')->with('failed','Gagal mengedeit channel');
            }
        }
    }

    public function delete_channel(Request $request)
    {
        // $d = "/viedu/public/img/poster//IPS-SMA@9@1542535899/1542535899.png";
        // return explode('/', $d)[6];
        $this->validate($request, [
            'channelid' => 'required|numeric',
        ]);

        $searchChannel = Project::findOrFail($request->channelid);
        if($searchChannel){
            ##Cari folder dlu
            //Folder Project Video
            $findProj = public_path($searchChannel->url_project);
            //Folder Poster
            $findFolder = explode('/', $searchChannel->url_poster)[6];
            $findPoster = public_path('/viedu/public/img/poster/').$findFolder;
            if(File::exists($findProj) && File::exists($findPoster)){
                //Delete Folder
                $deleteFolProj = File::deleteDirectory($findProj);
                $deleteFolPost = File::deleteDirectory($findPoster);
                if($deleteFolPost && $deleteFolProj){
                    //Delete DB nya
                    $deleteProject = $searchChannel->delete();
                    if($deleteProject){
                        return redirect('/vendor/profile')->with('success','Sukses menghapus channel');
                    }else{
                        return redirect('/vendor/profile')->with('failed','Gagal menghapus channel');
                    }
                }else{
                    return redirect('/vendor/profile')->with('failed','Kesalahan saat memproses.');
                }
            }
        }
    }

    public function delete_video(Request $request)
    {
        $this->validate($request, [
            'videoid' => 'required|numeric',
        ]);
        
        $searchVideo = Video::findOrFail($request->videoid);
        $searchChannel = Project::find($searchVideo->project_id);
        if($searchVideo){
            ##Cari folder dlu
            //File Video
            $findVideo = public_path($searchVideo->source_video);
            //File Poster Video
            $findVideoPoster = public_path($searchVideo->source_poster);
            if(File::exists($findVideo) && File::exists($findVideoPoster)){
                //HAPUS
                $deleteFileVideo = File::delete($findVideo);
                $deleteFilePoster = File::delete($findVideoPoster);
                if($deleteFileVideo && $deleteFilePoster){
                    //Delete DB nya
                    $deleteVideo = $searchVideo->delete();
                    if($deleteVideo){
                        return redirect('/vendor/profile')->with('success','Sukses menghapus Video dari channel '.$searchVideo->title );
                    }else{
                        return redirect('/vendor/profile')->with('failed','Gagal menghapus video');
                    }
                }else{
                    return redirect('/vendor/profile')->with('failed','Kesalahan saat proses menghapus video');
                }
                  
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
            'video_file' => 'required|mimes:mp4,avi,mpeg,webm,wmv,3gp,avi,mov,rm,mpg,ogg,qt|max:750000',
            'channelid' => 'required|numeric'
        ]);

        $verif = Teacherconfirmation::where('user_id', Auth::user()->id)->first();
        if($verif->verifikasi != 'verified'){
            return redirect('/vendor/profile')->with('failed','Mohon maaf, anda hanya bisa mengupload/membuat channel/video ketika akun sudah terverifikasi');
        }
        
    	$cariChannel = Project::findOrFail($request->channelid);
    	//dia gak masuk kedalam kondisi ini makanya blank
    	if($request->hasFile('poster_file') && $request->hasFile('video_file')){
            $image = $request->File('poster_file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPathPoster = public_path($cariChannel->url_project);

            $video = $request->File('video_file');
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

    public function edit_video(Request $request)
    {
        $this->validate($request, [
            'tittle_video'      => 'required',
            'keterangan_video'  => 'required',
            'poster_file'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_file'        => 'mimes:mp4,avi,mpeg,webm,wmv,3gp,avi,mov,rm,mpg,ogg,qt|max:750000',
            'channelid'         => 'required|numeric',
            'videoid'           => 'required|numeric'
        ]);
        $cariVideo = Video::findOrFail($request->videoid);
        $cariChannel = Project::find($cariVideo->project_id);
        //Cek apakah poster dan video itu file?
        if($request->hasFile('poster_file') && $request->hasFile('video_file')){
            ##PROSES UNTUK POSTER DULU
            $image = $request->File('poster_file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPathPoster = public_path($cariChannel->url_project);

            //Inisialisasikan nama poster sebelumnya
            $namePoster = $cariVideo->source_poster;
            $pathPoster = public_path($namePoster);

            ##PROSES UNTUK VIDEO
            $video = $request->File('video_file');
            $nameVid = time().'.'.$video->getClientOriginalExtension();
            $destinationPathVideo = public_path($cariChannel->url_project);

            //Inisialiskan nama video sebelmnya
            $nameVideo = $cariVideo->source_video;
            $pathVideo = public_path($nameVideo);

            if(File::exists($pathPoster) && File::exists($pathVideo)){
                $deletePoster   = File::delete($pathPoster);
                $deleteVideo    = File::delete($pathVideo);

                $insertPoster = $image->move($destinationPathPoster, $name);
                $insertVideo = $video->move($destinationPathVideo, $nameVid);

                $urlPoster = str_replace('/home/dganisha/educourse/public','',$destinationPathPoster)."/".$name;
                $urlVideo = str_replace('/home/dganisha/educourse/public','',$destinationPathVideo)."/".$nameVid;
            }
        }else{
            $urlPoster = $cariVideo->source_poster;
            $urlVideo = $cariVideo->source_video;
        }

        $update = $cariVideo->update([
            'title_video' => $request->tittle_video,
            'description_video' => $request->keterangan_video,
            'source_video' => $urlVideo,
            'source_poster' => $urlPoster,
        ]);

        if($update){
            return redirect('/vendor/profile')->with('success','Success edit videos!');
        }else{
            return redirect('/vendor/profile')->with('failed','Failed edit video');
        }
    }
}
