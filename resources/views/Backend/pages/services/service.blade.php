@extends('Backend.master')

@section('content')

<h1>   service list </h1>

<a href="{{url('/name/form')}}" class="btn btn-primary"> create service list</a>



<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col"> name</th>
        <th scope="col">email</th>
        <th scope="col">password</th>
    </tr>
    </thead>
   
    <tbody>
    @foreach($servs as $data)
    <tr>
        <th scope="row">{{$data-> id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->password}}</td>
    </tr>
     @endforeach
    </tbody>
</table>
{{$servs->links()}}
 

@endsection