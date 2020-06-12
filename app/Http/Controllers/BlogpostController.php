<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogpost;
use Auth;
use Session;
use DB;
use user;
use App\Admin;

class BlogpostController extends Controller
{
    public function addblogpost()
    {
    	return view('admin.blogpost.addblogpost');
    }

    public function saveblogpost(Request $request)
    {
    	 

        $file=$request->file('image');
        $filename ='image' . time().'.'.$request->image->extension();
        $file->move("upload/",$filename);
        $path="/".$filename;

        $data=new Blogpost;
        $data->title =$request->title;
        $data->published =$request->published;
        $data->time =$request->time;
        $data->image=$path;
        $data->discription =$request->discription;
        
        $data->save();
    	
    	return redirect()->back();
    }
     public function viewblogpost()
    {
        $datas =Blogpost::all();
        //echo "string";
        // print_r($datas);
        return view ('admin.blogpost.viewblogpost',compact('datas'));
    }

     public function editblogpost($id)
    {
        $curds=Blogpost::find($id);
        return view('admin.blogpost.editblogpost',compact('curds'));
    }

public function updateblogpost(Request $request,$id=null)
    {

            $data=$request->all();

            if($request->hasfile('image')){

                $file =$request->file('image');
            $filename='image'.time().'.'.$request->image->extension();
            $destination=storage_path("../public/upload");
            $file->move($destination,$filename);
            $path ="/".$filename;
            }

            else{

                $path=$data['current_image'];
            }

        $curd =Blogpost::find($request->id);
        $curd->title =$request->title;
         $curd->image =$request->path;
        $curd->discription =$request->discription;
       
       
        $updated=$curd->update();

     
        if($updated)
        {
            return redirect('/viewblogpost')->with('message','edit successfully update!');
        }
    }
    

     public function deleteblogpost($id)
    {
        $post =Blogpost::find($id);
        $deleted =$post->delete();
        if($deleted)
        {
        return redirect('/viewblogpost')->with('message','post successfully delete!');
        }
}

 public function blogpost()
    {
        $get=Admin::all();
        $post=Blogpost::all();
        return view('fronthand.blogpost')->with(compact('get','post'));
        
    }
}
