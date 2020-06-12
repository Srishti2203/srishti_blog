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
      <h3 style="margin-top: -11px"> <center><span style="color: white">Add Blog </span></center></h3>
    </div></center>
  


<div class="card-body card-block" style="margin-left: 3%;margin-right: 3%">
    <form action="{{url('/saveblog')}}" method="POST" enctype="multipart/form-data" class="form-horizantal">
    {{csrf_field()}}    
<div class="row form-group">


<div class="col-8"><br>
<div class="form-group"><label for="Heading" class=" form-control-label">Heading</label>
  <input type="text" id="Heading" placeholder="Enter your Heading" class="form-control" name="heading"></div>
</div>

<div class="col-8"><br>
<div class="form-group"><label for="Published" class=" form-control-label">Published</label>
  <input type="text" id="Published" placeholder="Enter your Published time" class="form-control" name="published"></div>
</div>
<div class="col-8"><br>
<div class="form-group"><label for="Time" class=" form-control-label"></label>
  <input type="text" id="Time" placeholder="Enter your Time To Read" class="form-control" name="time"></div>
</div>


<div class="col-8">
  <div class="form-group">  
    <label for="vat" class="form-control-label">Image</label><br>
    <input type="file" name="image">
  </div>
</div>

<div class="col-8">
<div class="form-group"><label for="Detail" class=" form-control-label">Detail</label>
  <input type="text" id="Detail" placeholder="Enter your Detail" class="form-control" name="detail"></div>
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