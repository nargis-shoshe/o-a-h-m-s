@extends('Backend.master')

@section('content')
<h1>Senior-Citizens List</h1>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th> 
        <th scope="col">Phone_Number</th>
        <th scope="col">Address</th>
        <th scope="col">Image</th>
        <th scope="col">Descrition</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($citiz as $data)
      
    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td> {{$data->email}}</td>
        <td> {{$data->phone_number}}</td>
        <td>{{$data->address}}</td>
        <td>
        <img src="{{$data->image}}" alt="Image">
        </td>
        <td>descrition</td>
        <td>status</td>
        <td>
            <a href=" " class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
            <a href="" class="btn btn-success">View</a>
        </td>
    </tr>
    </tbody>
</table>

<a href="{{route('formdetails')}}" class="btn btn-primary"> create senior-citizen list</a>

{{$citiz->links()}}


@endsection