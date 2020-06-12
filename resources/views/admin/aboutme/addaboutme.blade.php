@extends('admin.layout.master')

@section("title","Aboutme")

@section('data')

<div class="col-lg-12">
  <div class="col-lg-12">
  @if(session('message'))
        <p class="alert alert-success">
            {{session('message')}}
        </p>
        @endif
    <center><div class="card-header" style="background-color: #3a3abc;border-radius: 40px;width: 800px;height: 40px;margin-top: 20px;">
      <h3 style="margin-top: -11px"> <center><span style="color: white">Add Blog Post</span></center></h3>
    </div></center>
  


<div class="card-body card-block" style="margin-left: 3%;margin-right: 3%">
    <form action="{{url('/saveaboutme')}}" method="POST" enctype="multipart/form-data" class="form-horizantal">
    {{csrf_field()}}    
<div class="row form-group">


<div class="col-8"><br>
<div class="form-group"><label for="Title" class=" form-control-label">Title</label>
  <input type="text" id="Title" placeholder="Enter your Title" class="form-control" name="title"></div>
</div>

<div class="col-8">
<div class="form-group"><label for="Discription" class=" form-control-label">Discription</label>
  <input type="text" id="Discription" placeholder="Enter your Discription" class="form-control" name="discription"></div>
</div>



<div class="col-8">
  <div class="form-group">  
    <label for="vat" class="form-control-label">Image</label><br>
    <input type="file" name="image">
  </div>
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


@endsection