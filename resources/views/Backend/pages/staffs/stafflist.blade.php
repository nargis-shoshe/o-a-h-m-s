@extends('backend.master')

@section('content')

<form action="{{route('add.store')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input required name="name"type="name" class="form-control" id="exampleInputname" aria-describedby="">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required name="email"type="email" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputDesignation" class="form-label">Designation</label>
    <input name="designation" type="name" class="form-control" id="exampleInputDesignation">
</div>

   
  <div class="mb-3">
    <label for="image">Upload Image</label>
    <input  name="image"type="file" class="form-control" id="image">
     
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
 
  

@endsection