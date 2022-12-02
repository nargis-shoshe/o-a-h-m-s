@extends('Backend.master')

@section('content')

<h1>   staff list </h1>


@if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
      @endif

    @if(session()->has('error'))
        <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif

<a href="{{route('add.make')}}" class="btn btn-primary"> create staff list</a>


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Phone_Number</th>
        <th scope="col">Handle</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
   
    <tbody>
    @foreach($staff as $data)
    <tr>
        <th scope="row">{{$data-> id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->password}}</td>
        <td>


        
        <img width="80px" style="border-radius: 30px" src="{{url('/Inserts/'.$data->image)}}" alt= "staff_image">
        </td>
         

        <td>
                <a href="{{route('admin.staff.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('admin.staff.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('admin.staff.view',$data->id)}}" class="btn btn-success">View</a>
            </td>
    </tr>
     @endforeach
    </tbody>

</table>

 

@endsection