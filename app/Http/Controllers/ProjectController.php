<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Video;
use App\Validator;

class ProjectController extends Controller
{
    public function search(Request $request)
    {
    	$query = $request->get('query');
    	$cari_tutorial = Project::where('title','LIKE','%'.$query.'%')->get();
    	if($cari_tutorial->count() != 0){
    		return view('users.search', compact('cari_tutorial','query'));
    	}else{
    		return view('users.search', compact('cari_tutorial'))->with('failed','Mohon maaf, pencarian yang anda cari tidak ditemukan.');
    	}
    }
}
