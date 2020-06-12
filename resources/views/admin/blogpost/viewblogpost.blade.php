@extends('admin.layout.master')
@section("title","View")



@section('data')
    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
@if(session('message'))
        <p class="alert alert-success">
            {{session('message')}}
        </p>
        @endif
    <center><div class="card-header" style="background-color: #3a3abc;border-radius: 40px;width: 800px;height: 40px;margin-top: 20px;">
      <h3 style="margin-top: -11px"> <center><span style="color: white">All Blog Post</span></center></h3>
    </div></center>
    
                            </div>
<div class="card-body">
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
    <tr>
        <th>Title</th>
        
        <th>Image</th>
        <th>Discription</th>
        <th>Action</th>
                                            

   </tr>
  @foreach($datas as $data)
<tr>
    <td>{{$data->title}}</td>
      <td>@php if (!empty($data->image))
        {
        @endphp
        <img src="{{url('/upload/'.$data->image)}}" style="height: 150px;width: 150px">
        @php
        }else{
        @endphp
        <p>no image found</p>
        @php
         }
         @endphp

    </td>
    <td>{{$data->discription}}</td>
  
    <td>
<!--         <a href="{{url('/curd/show/' .$data->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
        <a href="{{url('/curd/editblogpost/' .$data->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <a href="{{url('/curd/delete/' .$data->id)}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
    </td>


</tr>
@endforeach
  


                                    </thead>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    

@endsection
