@extends('Frontend.master')
@section('content')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">

        <div class="col-md-4 border-right">
            <form action="{{route('profile.update.image')}}" method="post" enctype="multipart/form-data">
 
                @method('put')
                @csrf
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="200px" src="{{url('/inserts/'.auth()->user()->image)}}"><span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span class="text-black-50"> Role: {{auth()->user()->role}}</span></div>
                <input type="file" name="image" id="image">
                <button class="btn btn-primary profile-button" type="submit">Update Image</button>
            </form>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="text-right">Profile Settings</h1>
                </div>
                <form action="{{route('update.profile')}}" method="post">

                    @method('put')
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label>
                            <input name="user_name" type="text" class="form-control" placeholder="Name" value="{{auth()->user()->name}}">
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input name="user_mobile" type="text" class="form-control" placeholder="enter phone number" value="{{auth()->user()->mobile}}"></div>
                        <div class="col-md-12"><label class="labels">Address</label><input name="user_address" type="text" class="form-control" placeholder="enter your address " value="{{auth()->user()->address}}"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input readonly type="text" class="form-control" placeholder="enter your email " value="{{auth()->user()->email}}"></div>

                    </div>

                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Update Profile</button>
                    </div>
                </form>


            </div>
        </div>

    </div>
</div>

@endsection