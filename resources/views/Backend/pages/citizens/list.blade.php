@extends('Backend.master')

@section('content')
<h1>Senior-Citizens List</h1>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Sl</th>
        <th scope="col">Name</th> 
        <th scope="col">Date of Birth</th>
        <th scope="col">Address</th>
        <th scope="col">Emergency-Number</th>
        <th scope="col">Reistration Date</th>
        <th scope="col">Image</th>
         
    </tr>
    </thead>
    <tbody>
        @foreach($citiz as $key=>$data)
      
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name}}</td>
        <td> {{$data->date_of_birth}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->emergency_number}}</td>
        <td> {{$data->registration_date}}</td>
        <td>
            
        <img width="80px" style="border-radius: 30px" src="{{url('/Inserts/'.$data->image)}}" alt= "">
        </td>
         
        <td>
            
             
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

 

{{$citiz->links()}}


@endsection