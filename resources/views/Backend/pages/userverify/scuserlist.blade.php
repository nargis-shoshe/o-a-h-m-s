<!--@extends('Backend.master')


@section('content')
<h1 class="my-3">Senior Citizen List</h1>
@if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
      @endif

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Registration-Date</th>
      <th scope="col">Date-of-Birth</th>
      <th scope="col">phone Number</th>
      <th scope="col">Emergency Number</th>
      <th scope="col">Status</th>
      
      


    </tr>
  </thead>
  <tbody>
    
  @foreach($scuser as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{($data->name)}}</td>
      <td>{{($data->address)}}</td>
      <td>{{($data->registration_date)}}</td>
      <td>{{($data->date_of_birth)}}</td>
      <td>{{($data->phone_number)}}</td>
      <td>{{($data->emergency_number)}}</td>
      <td>{{($data->status)}}</td>


        <td> 
        @if($data->role!='admin')
            @if($data->status!='active')      
            <a href="{{route('scuser.active',$data->id)}}" class="btn btn-primary">Approve</a>
            @endif

            @if($data->status=='approve') 
            <a href="{{route('scuser.reject',$data->id)}}" class="btn btn-danger">Reject</a>
           @endif
        @endif 
        </td>


    </tr>
     
    @endforeach

  </tbody>
</table>

{{$scuser->links()}}

@endsection-->