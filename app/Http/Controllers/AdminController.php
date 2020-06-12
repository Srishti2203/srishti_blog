<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;
use Session;
use DB;
use user;

class AdminController extends Controller
{
    public function master()
    {
       	return view('admin.layout.master');
    }

    public function addprofile()
    {
    	return view('admin.profile.addprofile');
    }

    public function saveprofile(Request $request)
    {
    	 echo "string";

        $file=$request->file('image');
        $filename ='image' . time().'.'.$request->image->extension();
        $file->move("upload/",$filename);
        $path="/".$filename;

        $data=new Admin;
        $data->profilename =$request->profilename;
        $data->image=$path;
        $data->intro =$request->intro;
        
        $data->save();
    	dd($data);
    	return redirect()->back();
    }
}
