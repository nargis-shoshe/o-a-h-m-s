@extends('Backend.master')
@section('content')
<h1> Donation List </h1>

 



<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">SL</th>
        <th scope="col">User-Id</th>
        <th scope="col">Donor-Name</th>
        <th scope="col">Donor-Email</th>
        <th scope="col">Phone-Number</th>
        <th scope="col"> Donate-Amount(BDT)</th>
        <th scope="col"> Donate-Belongings</th>        
        <th scope="col">Transaction-ID</th>        
        <th scope="col">Account Number</th>        
        <th scope="col">Payment Mthod</th>        
        <th scope="col">Action</th>        
        
         
    </tr>
    </thead>
   
    <tbody>
    @foreach($money as $key=>$data)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->user->id}}</td>
        <td>{{$data->user->name}}</td>
        <td>{{$data->user->email}}</td>
        <td>{{$data->user->mobile}}</td>
        <td>{{$data->donor_amount}}</td>
        <td>{{$data->belongings}}</td>
        <td>{{$data->Transaction_id}}</td>
        <td>{{$data->account_number}}</td>
        <td>{{$data->payment_method}}</td>
        <td>
        <a href="{{route('admin.donatemmoney.view',$data->id)}}" class="btn btn-primary">View</a>
        </td>
         
         
         
    </tr>
     @endforeach
    </tbody>
</table>
@endsection