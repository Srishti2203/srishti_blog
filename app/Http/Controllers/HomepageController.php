<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Bloghome;
use App\Blogpost;
use App\Aboutme;



class HomepageController extends Controller
{
   public function index()
    {
    	$get=Admin::all();
    	$blog=Bloghome::all();
    	return view('fronthand.index')->with(compact('get'));
    }

   

  


}
