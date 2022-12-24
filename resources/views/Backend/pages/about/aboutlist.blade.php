@extends('Backend.master')
@section('content')
<h1>About Us</h1>

<a href="{{route('aboutform')}} " class="btn btn-primary">Update About Us</a>


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
         
    </tr>
    </thead>
    <tbody>
    @foreach($about as $data)
    <tr>
        <th scope="row">{{$data-> id}}</th>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        </tr>
    @endforeach
    </tbody>

</table>


@endsection