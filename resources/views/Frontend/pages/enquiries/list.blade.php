@extends('Frontend.master')

@section('content')

<div class="container mx-auto my-5">
<form action="{{route('enquiry.store')}}" method="post">
    @csrf
        <div class="form-group">
            <label for="name"> Name</label>
            <input required name="name" type="text" class="form-control" id="name" placeholder="name" value="{{auth()?->user()?->name}}">
        </div>   
        
        <div class="form-group">
            <label for="email">Email</label>
            <input required name="email" type="email" class="form-control" id="email" placeholder="email" value="{{auth()?->user()?->email}}">
        </div>

        <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" required name="message" id="name"></textarea>
        </div>

         
         

        <button type="submit" class="btn btn-primary">Send Message</button>
                   
  </form>
  </div> 
@endsection