@extends('Backend.master')

@section('content')

<h1>   service list </h1>

<a href="{{url('/name/form')}}" class="btn btn-primary"> create service list</a>



<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col"> Name</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
    </tr>
    </thead>
   
    <tbody>
    @foreach($servs as $data)
    <tr>
        <th scope="row">{{$data-> id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
         
        <td>
        <img width="80px" style="border-radius: 30px" src="{{url('/Inserts/'.$data->image)}}" alt= " ">
        </td>
         
    </tr>
     @endforeach
    </tbody>
</table>
{{$servs->links()}}
 

@endsection