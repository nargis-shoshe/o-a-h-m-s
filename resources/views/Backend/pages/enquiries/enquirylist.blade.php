@extends('Backend.master')
@section('content')
<h1> Enquiries list </h1>

 



<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Message</th>
        <th scope="col">Ation</th>
    </tr>
    </thead>
   
    <tbody>
    @foreach($enquiries as $data)
    <tr>
        <th scope="row">{{$data-> id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->message}}</td>
        <td>
                <a href="" class="btn btn-primary">Read</a>
                <a href="" class="btn btn-danger">Unread</a>
        </td>
    </tr>
     @endforeach
    </tbody>
</table>
@endsection