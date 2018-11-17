<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
   public function index(){
   		$admin  = User::all();
        $data       = compact('admin');
    	return view('admin.index')->with($data);
    }
}
