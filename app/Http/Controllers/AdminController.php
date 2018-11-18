<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Video;
use App\Project;
use App\Order;
use App\Favorite;
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

}
