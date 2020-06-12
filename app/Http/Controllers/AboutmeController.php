<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutme;
use Auth;
use Session;
use DB;
use user;
use App\Admin;

class AboutmeController extends Controller
{
   public function addaboutme()
    {
    	return view('admin.aboutme.addaboutme');
    }

    public function saveaboutme(Request $request)
    {

        if($request->isMethod('post')){
    	 

        $file=$request->file('image');
        $filename ='image' . time().'.'.$request->image->extension();
        $file->move("upload/",$filename);
        $path="/".$filename;

        $data=new Aboutme;
        $data->title =$request->title;
        $data->discription =$request->discription;
        $data->image=$path;
        
        
        $data->save();
    	
    	return redirect()->back();
    }}

    public function viewaboutme()
    {
        $datas =Aboutme::all();
        //echo "string";
        // print_r($datas);
        return view ('admin.aboutme.viewaboutme',compact('datas'));
    }

     public function editaboutme($id)
    {
        $curds=Aboutme::find($id);
        return view('admin.aboutme.editaboutme',compact('curds'));
    }

public function updateaboutme(Request $request,$id=null)
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

        $curd =Aboutme::find($request->id);
        $curd->title =$request->title;
        $curd->discription =$request->discription;
        $curd->image =$request->path;
       
        $updated=$curd->update();

     
        if($updated)
        {
            return redirect('/viewaboutme')->with('message','edit successfully update!');
        }
    }
    

     public function deleteaboutme($id)
    {
        $post =Aboutme::find($id);
        $deleted =$post->delete();
        if($deleted)
        {
        return redirect('/viewaboutme')->with('message','post successfully delete!');
        }
}
  public function aboutme()
    {

        $get=Admin::all();
        $about=Aboutme::all();

        return view('fronthand.aboutme')->with(compact('get','about'));
    }
}