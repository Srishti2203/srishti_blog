@extends('admin.layout.master')

@section('data')

<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
<form action="{{url('/curd/update/post')}}" method="post">


<div class="col-lg-12">
  
    <center><div class="card-header" style="background-color: #3a3abc;border-radius: 40px;width: 800px;height: 40px;margin-top: 20px;">
      <h3 style="margin-top: -11px"> <center><span style="color: white">Edit Aboutme</span></center></h3>
    </div></center>

  


<div class="card-body card-block" style="margin-left: 3%;margin-right: 3%">
    <form action="{{url('/curd')}}" method="POST" enctype="multipart/form-data" class="form-horizantal">
    	@if(session('message'))
	<p class="alert alert-success">
		{{session('message')}}
	</p>
	@endif
    {{csrf_field()}}    
<div class="row form-group">

<input type="hidden" name="id" value="{{$curds->id}}">
<div class="col-8"><br>
<div class="form-group"><label for="title" class=" form-control-label">title</label>
  <input type="text" id="title" placeholder="Enter title" class="form-control" name="title" value="{{$curds->title}}"></div>
</div>



<div class="col-md-8">
<div class="form-group"><label for="image" class=" form-control-label">Image</label>

  <input type="file" name="image">
  <input type="hidden" name="current_image" value="{{$curds->image}}">
  <img src="{{url($curds->image)}}" style="height: 150px;width: 150px">

    </div>
</div>

<div class="col-8">
<div class="form-group"><label for="discription " class=" form-control-label">Discription</label>
  <input type="text" id="discription" placeholder="Enter discription" class="form-control" name="discription" value="{{$curds->discription}}"></div>
</div>





 

        <div class="col-8" style="margin-left: 6%">  
           <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
            </button> 
             <button type="reset" class="btn btn-danger btn-sm">
               <i class="fa fa-ban"></i> Reset
                </button>
           </div>  
</div> <!-- close row form -->
</form>
</div>
  </div>  
</form>
</body>
</html>

@endsection