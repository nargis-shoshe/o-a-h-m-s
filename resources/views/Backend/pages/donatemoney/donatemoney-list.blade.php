@extends('Backend.master')
@section('content')
<h1> Donate Money list </h1>

 



<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">Donor-Name</th>
        <th scope="col">Donor-Email</th>
        <th scope="col">Phone-Number</th>
        <th scope="col"> Donate-Amount</th>
        <th scope="col"> Donate-Belongings</th>
        <th scope="col">Action</th>
         
    </tr>
    </thead>
   
    <tbody>
    @foreach($money as $data)
    <tr>
        <th scope="row">{{$data-> id}}</th>
        <td>{{$data->donar_name}}</td>
        <td>{{$data->donor_email}}</td>
        <td>{{$data->phone_number}}</td>
        <td>{{$data->donor_amount}}</td>
        <td>{{$data->belongings}}</td>
        <td>
                <a href="{{route('admin.donatemmoney.view',$data->id)}}" class="btn btn-primary">View</a>
                <a href=" " class="btn btn-danger">Delete</a>
                <a href=" " class="btn btn-success">Edit</a>
            </td>
         
    </tr>
     @endforeach
    </tbody>
</table>
@endsection