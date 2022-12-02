@extends('Backend.master')

@section('content')



<h1>Donor List</h1>


 



<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th> 
        <th scope="col">Phone_Number</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @foreach($dons as $data)
    <tbody>
      
    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone_number}}</td>
        <td>{{$data->address}}</td>
        <td>
            <a href="{{route('admin.donor.edit',$data->id)}} " class="btn btn-primary">Edit</a>
            <a href="{{route('admin.donor.delete',$data->id)}}" class="btn btn-danger">Delete</a>
            <a href="{{route('admin.donor.view',$data->id)}}" class="btn btn-success">View</a>
        </td>
    </tr>

    @endforeach
    
    </tbody>
</table>

<a href="{{route('donor.form')}}" class="btn btn-primary"> create Donor list</a>


@endsection