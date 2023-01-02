@extends('Backend.master')

@section('content')

<h1>   Service list </h1>

<a href="{{route('name.form')}}" class="btn btn-primary">Add Service</a>



<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Sl</th>
        <th scope="col"> Name</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
   
    <tbody>
    @foreach($servs as $key=>$data)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
         
        <td>
        <img width="80px" style="border-radius: 30px" src="{{url('/Inserts/'.$data->image)}}" alt= " ">
        </td>
        <td>
        <a href="{{route('admin.service.edit',$data->id)}}" class="btn btn-primary">Edit</a>
        </td>
         
    </tr>
     @endforeach
    </tbody>
</table>
{{$servs->links()}}
 

@endsection