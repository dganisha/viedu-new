<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\User;
use App\Project;
use App\Order;
use App\Favorite;
use Auth;

class UserController extends Controller
{
	public function home()
	{
		$data_video = Video::limit(3)->inRandomOrder()->get();
		$data_project = Project::limit(3)->inRandomOrder()->get();
		return view('users.home', compact('data_video','data_project'));
	}

	public function profile()
	{
		//Cari Langganan
		$langganan = Order::with('project')->select('project_id','price','status_pembayaran')->where('user_id',Auth::user()->id)->get();
		$countLangganan = $langganan->count();
		// return $countLangganan;

		//Cari Favorit
		$favorit = Favorite::with('project')->select('project_id')->where('user_id',Auth::user()->id)->get();
		$countFavorit = $favorit->count();		
		return view('users.profile', compact('langganan','favorit','countLangganan','countFavorit'));
	}

    
}
