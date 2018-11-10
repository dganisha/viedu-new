<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\User;
use App\Project;

class UserController extends Controller
{
	public function home()
	{
		$data_video = Video::limit(3)->inRandomOrder()->get();
		return view('users.home', compact('data_video'));
	}

    public function nonton_vid()
    {
    	return view('users.nonton');
    }
}
