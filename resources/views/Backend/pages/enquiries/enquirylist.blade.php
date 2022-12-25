@extends('Backend.master')
@section('content')
<h1> Enquiries list </h1>

 



<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Sl</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Message</th>
        <th scope="col">Ation</th>
    </tr>
    </thead>
   
    <tbody>
    @foreach($enquiries as $key=>$data)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->message}}</td>
        <td>
                <a href="{{route('admin.enquiry.update',$data->id)}}" class="btn btn-primary">Update</a>
        
                 
        </td>
    </tr>
     @endforeach
    </tbody>
</table>
@endsection