@extends('Backend.master')
@section('content')
<form action="{{route('aboutstore')}}"method="post">
@csrf
@if($errors->all ())
@foreach($errors->all as $message)
<p class="alert alert-daner">"{{$messae}}"</p>
@endforeach
@endif
    @csrf


    <div class="form-group">
    <label for="title">Title</label>
    <input name="title"type="text" class="form-control" id="title" placeholder="">
     
   </div>


    <div class="form-group">
    <label for="description">Description</label>
    <input name="description"type="text" class="form-control" id="description" placeholder="">
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection