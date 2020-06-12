<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use user;
use App;

class BlogController extends Controller
{
    public function index()
    {
    	return view('fronthand.index');
    }

    public function blogpost()
    {
    	return view('fronthand.blogpost');
    }

    public function aboutme()
    {
    	return view('fronthand.aboutme');
    }

}
