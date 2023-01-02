@extends('backend.master')

@section('content')

<form action="{{route('add.store')}}" method="post" enctype="multipart/form-data">

@if($errors->any())
@foreach($errors->all() as $message)
<p class="alert alert-danger">{{$message}}</p>
@endforeach
@endif
    @csrf
<div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input required name="name"type="name" class="form-control" id="exampleInputname" aria-describedby="">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required name="email"type="email" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
      
  </div>
   

  <div class="mb-3">
    <label for="exampleInputDesignation" class="form-label">Designation</label>
    <input required name="designation" type="name" class="form-control" id="exampleInputDesignation">
</div>

   
  <div class="mb-3">
    <label for="image">Upload Image</label>
    <input required name="image"type="file" class="form-control" id="image">
     
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
 
  

@endsection