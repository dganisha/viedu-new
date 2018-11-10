<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class TeacherController extends Controller
{
    public function index()
    {
    	return view('teacher.myproject');
    }
}
