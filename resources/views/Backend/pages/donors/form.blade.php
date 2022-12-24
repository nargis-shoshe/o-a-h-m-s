@extends('Backend.master')
@section('content')

<form action="{{route('donor.store')}}" method="post">
@if($errors->any())
@foreach($errors->all() as $message)
<p class="alert alert-danger">{{$message}}</p>
@endforeach
@endif
    @csrf
<div class="form-group">
            <label for="name"> Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="name">
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
            <input name="Phone_number" type="number" class="form-control" id="name"placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input name="address" type="text" class="form-control" id="name"placeholder="address">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>








@endsection