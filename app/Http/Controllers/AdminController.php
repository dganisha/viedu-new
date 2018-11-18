<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Video;
use App\Project;
use App\Order;
use App\Favorite;
use App\Teacherconfirmation;
use Validator;

class AdminController extends Controller
{
   	public function index(){
   		$allUser = User::where('role','!=','administrator')->get();
    	return view('admin.index', compact('allUser'));
    }

    public function deleteUser(Request $request)
    {
    	$this->validate($request, [
            'userid' => 'required|numeric',
        ]);

        $user = User::find($request->userid);
        $deleteUser = $user->delete();
		if($deleteUser){
        	return redirect('/admin')->with('success', 'Success delete user');
        }else{
        	return redirect('/admin')->with('failed', 'Failed delete user');
        }
    }

    public function listVideo()
    {
    	$data_video = Video::get();
    	return view('admin.video', compact('data_video'));
    }

    public function listChannel()
    {
    	$data_channel = Project::get();
    	return view('admin.channel', compact('data_channel'));
    }

    public function show_verifikasi()
    {
        $data_guru = Teacherconfirmation::where('verifikasi', 'non-verified')->get();
        return view('admin.verifikasi', compact('data_guru'));
    }

    public function verifikasi(Request $request)
    {
        $this->validate($request, [
            'userid' => 'required|numeric',
        ]);

        $user = User::find($request->userid);
        if($user){
            $confirm = Teacherconfirmation::where('user_id', $user->id)->update([
                'verifikasi' => 'verified'
            ]);

            if($confirm){
                return redirect('/admin/verifikasi')->with('success','Sukses memverifikasi guru');
            }else{
                return redirect('/admin/verifikasi')->with('failed','Failed memverifikasi guru');
            }
        }
    }
}
