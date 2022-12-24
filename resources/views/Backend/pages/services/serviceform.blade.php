@extends('backend.master')

@section('content')

<form action="{{route('name.form.store')}}" method="post" enctype="multipart/form-data" >

@if($errors->any())
@foreach($errors->all() as $message)
<p class="alert alert-danger">{{$message}}</p>
@endforeach
@endif

   @csrf
<div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input required name="name"type="name" class="form-control" id="exampleInptuname" aria-describedby="">
  </div>
   
  <div>
    <label for="">Enter description</label>
    <textarea  class="form-control" required name="description" id="" cols="" rows="" placeholder="Enter Description"></textarea>
  </div>

  <div class="mb-3">
    <label for="image">Image</label>
    <input required name="image"type="file" class="form-control" id="image">
     
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>

 

@endsection