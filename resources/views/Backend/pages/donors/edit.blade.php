@extends('Backend.master')

@section('content')
    <h1>Update Donnor</h1>
    
    <form action="{{route('admin.donor.update',$donor->id)}}" method="post" enctype="multipart/form-data">
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
     



        <div class="form-group">
            <label for="name"> Name</label>
            <input value="{{$donor->name}}" name="name" type="text" class="form-control" id="name" placeholder="name">
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input name="email"type="text" class="form-control" id="name"placeholder="email">
        </div>

        <div class="form-group">
            <label for="name">Password</label>
            <input name="password" type="text" class="form-control" id="name" placeholder="Password">

            
        </div>

        <div class="form-group">
            <label for="name">Phone Number</label>
            <input value="{{$donor->Phone_number}}"name="Phone_number" type="number" class="form-control" id="name"placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input name="address" type="text" class="form-control" id="name"placeholder="address">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


 
  

@endsection