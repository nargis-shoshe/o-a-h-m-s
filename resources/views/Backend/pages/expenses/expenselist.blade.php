@extends('Backend.master')
@section('content')
<h1>Expense List</h1>
<a href="{{route('expenseform')}}" class="btn btn-primary">Manage Expense List</a>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">SL</th>
        <th scope="col">Date</th>
        <th scope="col">Details</th>
         
         
        <!--<th scope="col">Donation Id</th>-->
        <th scope="col">Amount</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
   
    <tbody>
    @foreach($expense as $data)
    <tr>
        <th scope="row">{{$data-> id}}</th>
        <td>{{$data->date}}</td>
        <td>{{$data->details}}</td>
         
        
       <!-- <td>{{$data->donation_id}}</td> -->
        <td>{{$data->overall_balance}}</td>
        
            
        <td>
                <a href="{{route('admin.expense.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('admin.expense.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('admin.expense.view',$data->id)}}" class="btn btn-success">View</a>
                 
            </td>
    </tr>
     @endforeach
    </tbody>

</table>
 

 

@endsection