@extends('Backend.master')


@section('content')
<h1 class="my-3">User List</h1>
@if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
      @endif

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Address</th>
      <!--<th scope="col">status</th>
      <th scope="col">Action</th>-->

    </tr>
  </thead>
  <tbody>
    
  @foreach($user as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{($data->email)}}</td>
      <td>{{($data->name)}}</td>
      <td>{{($data->role)}}</td>
      <td>{{($data->address)}}</td>
      <!--<td>{{($data->status)}}</td>


        <td> 
        @if($data->role!='admin')
            @if($data->status!='active')      
            <a href="{{route('user.active',$data->id)}}" class="btn btn-primary">Approve</a>
            @endif

            @if($data->status=='approve') 
            <a href="{{route('user.reject',$data->id)}}" class="btn btn-danger">Reject</a>
           @endif
        @endif 
        </td>-->


    </tr>
     
    @endforeach

  </tbody>
</table>

{{$user->links()}}

@endsection