@extends('admin.layout.master')

@section("title","Add Profile")

@section('data')

<div class="col-lg-12">
  <div class="col-lg-12">
  @if(session('message'))
        <p class="alert alert-success">
            {{session('message')}}
        </p>
        @endif
    <center><div class="card-header" style="background-color: #3a3abc;border-radius: 40px;width: 800px;height: 40px;margin-top: 20px;">
      <h3 style="margin-top: -11px"> <center><span style="color: white">Add Profile</span></center></h3>
    </div></center>
  


<div class="card-body card-block" style="margin-left: 3%;margin-right: 3%">
    <form action="{{url('/saveprofile')}}" method="POST" enctype="multipart/form-data" class="form-horizantal">
    {{csrf_field()}}    
<div class="row form-group">


<div class="col-8"><br>
<div class="form-group"><label for="Profile Name" class=" form-control-label">Profile Name</label>
  <input type="text" id="Profile Name" placeholder="Enter your Profile Name" class="form-control" name="profilename"></div>
</div>



<div class="col-8">
  <div class="form-group">  
    <label for="vat" class="form-control-label">Image</label><br>
    <input type="file" name="image">
  </div>
</div>

<div class="col-8">
<div class="form-group"><label for="Introduction" class=" form-control-label">Introduction</label>
  <input type="text" id="Introduction" placeholder="Enter your Introduction" class="form-control" name="intro"></div>
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