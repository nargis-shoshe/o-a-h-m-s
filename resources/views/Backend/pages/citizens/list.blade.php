@extends('Backend.master')

@section('content')
<h1>Senior-Citizens List</h1>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Registration_Number</th>
        <th scope="col">Name</th> 
        <th scope="col">Phone_Number</th>
        <th scope="col">Address</th>
        <th scope="col">Reistration Date</th>
        <th scope="col">Image</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($citiz as $data)
      
    <tr>
        <th scope="row">{{$data->id}}</th>
        <th scope="row">{{$data->registration_number}}</th>
        <td>{{$data->name}}</td>
        <td> {{$data->phone_number}}</td>
        <td>{{$data->address}}</td>
        <td> {{$data->registration_date}}</td>
        <td>
            
        <img width="80px" style="border-radius: 30px" src="{{url('/Inserts/'.$data->image)}}" alt= "">
        </td>
         
        <td>
            <a href=" " class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
            <a href="" class="btn btn-success">View</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

 

{{$citiz->links()}}


@endsection