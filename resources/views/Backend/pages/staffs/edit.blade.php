@extends('backend.master')

@section('content')
    <h1>Update Staff</h1>
    
    <form action="{{route('admin.staff.update',$staff->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
        @if($errors->any())
            @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
            @endforeach
        @endif

        @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif

        @csrf
     


 

    <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
     <input value="{{$staff->name}}" required name="name"type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input value="{{$staff->email}}" required name="email"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input value="{{$staff->password}}" name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="mb-3">
    <label for="image">Upload Image</label>
    <input name="image" required name="image"type="file" class="form-control" id="image">
     
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  
</form>
 
  

@endsection