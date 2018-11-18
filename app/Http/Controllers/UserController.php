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

	public function show_about()
	{
		return view('users.about');
	}

	public function show_channel($nama, $id)
	{
		$channel = Project::findOrFail($id);
		$data_video = Video::where('project_id', $channel->id)->get();

		$langganan = Order::where('user_id', Auth::user()->id)->where('project_id', $channel->id)->first();
		if($langganan){
			$countLangganan = $langganan->count();
		}else{
			$countLangganan = 0;
		}
		return view('users.subscribe', compact('channel','data_video','countLangganan'));
	}

	public function subscribe(Request $request)
	{
		// return $request->all();
		$this->validate($request, [
            'channelid' => 'required|numeric',
        ]);

		$cariChannel = Project::findOrFail($request->channelid);
		if($cariChannel->price == NULL){
			$price = 0;
		}else{
			$price = $cariChannel->price;
		}
		$insert = Order::create([
			'user_id' => Auth::user()->id,
			'project_id' => $cariChannel->id,
			'price' => $price,
			'status_pembayaran' => 'selesai'
		]);

		if($insert){
			return redirect('/member/subscribe/'.urlSlug($cariChannel->title)."/".$cariChannel->id)->with('success', 'Success add this channel to my subscribed');
		}else{
			return redirect('/member/subscribe/'.urlSlug($cariChannel->title)."/".$cariChannel->id)->with('failed', 'Failed subscribe channel');
		}
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

	public function update_profile(Request $request)
	{
		$this->validate($request, [
            'bio' => 'required',
        ]);

		$update = User::where('id', Auth::user()->id)->update(['bio' => $request->bio]);
		if($update){
			return redirect('/member/profile')->with('success', 'Success edit profile');
		}else{
			return redirect('/member/profile')->with('failed', 'Failed edit profile');
		}
	}

    
}
