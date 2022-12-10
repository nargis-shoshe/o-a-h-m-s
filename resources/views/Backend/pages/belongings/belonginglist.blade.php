@extends('Backend.master')
@section('content')
<h1> Belonging list </h1>

 



<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">Donor-Name</th>
        <th scope="col">Phone-Number</th>
        <th scope="col">Belonging-Details</th>
         
    </tr>
    </thead>
   
    <tbody>
    @foreach($belonging as $data)
    <tr>
        <th scope="row">{{$data-> id}}</th>
        <td>{{$data->donor_name}}</td>
        <td>{{$data->phone_number}}</td>
        <td>{{$data->belonging_details}}</td>
         
    </tr>
     @endforeach
    </tbody>
</table>
@endsection