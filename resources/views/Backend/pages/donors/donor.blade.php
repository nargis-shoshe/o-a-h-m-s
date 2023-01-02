@extends('Backend.master')

@section('content')



<h1>Donor List</h1>


 



<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Sl</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th> 
        <th scope="col">Phone-Number</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @foreach($dons as $key=>$data)
    <tbody>
      
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->mobile}}</td>
        <td>    
        <img width="80px" style="border-radius: 30px" src="{{url('/Inserts/'.$data->image)}}" alt= "">
        </td>
        <td>
            
            <a href="{{route('admin.donor.delete',$data->id)}}" class="btn btn-danger">Delete</a>
            
        </td>
    </tr>

    @endforeach
    
    </tbody>
</table>

 


@endsection