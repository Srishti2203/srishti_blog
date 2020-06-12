<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloghome;
use Auth;
use Session;
use DB;
use user;

class BloghomeController extends Controller
{
     public function addbloghome()
    {
    	return view('admin.bloghome.addbloghome');
    }

    public function savebloghome(Request $request)
    {
    	 

        $file=$request->file('image');
        $filename ='image' . time().'.'.$request->image->extension();
        $file->move("upload/",$filename);
        $path="/".$filename;

        $data=new Bloghome;
        $data->heading =$request->heading;
        $data->published =$request->published;
        $data->time =$request->time;
        $data->image=$path;
        $data->detail =$request->detail;
        
        $data->save();
    	
    	return redirect()->back();
    }
     public function viewbloghome()
    {
        $datas =Bloghome::all();
        //echo "string";
        // print_r($datas);
        return view ('admin.bloghome.viewbloghome',compact('datas'));
    }

     public function editbloghome($id)
    {
        $curds=Bloghome::find($id);
        return view('admin.bloghome.editbloghome',compact('curds'));
    }

public function updatebloghome(Request $request,$id=null)
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

        $curd =Bloghome::find($request->id);
        $curd->heading =$request->heading;
        $curd->image =$path;
        $curd->detail =$request->detail;
        
       
        $updated=$curd->update();

     
        if($updated)
        {
            return redirect('/viewbloghome')->with('message','edit successfully update!');
        }
    }
    

     public function deletbloghome($id)
    {
        $post =Bloghome::find($id);
        $deleted =$post->delete();
        if($deleted)
        {
        return redirect('/viewbloghome')->with('message','post successfully delete!');
        }
}
}
