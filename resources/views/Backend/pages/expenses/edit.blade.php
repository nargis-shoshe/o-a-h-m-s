@extends('Backend.master')
@section('content')
<div class="container mx-auto my-5">
 
<h1>Update Expense</h1>
    <form action="{{route('admin.expense.update',$expense->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
        @if($errors->any())
            @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
            @endforeach
        @endif

        @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif

        @csrf
     
    

        <div class="form-group">
            <label for="name">Date</label>
            <input required name="date" type="date" class="form-control" id="name" placeholder="">
        </div>

           
        <div class="form-group">
            <label for="email"> Details</label>
            <input required name="details" type="text" class="form-control" id="email" placeholder="">
        </div>

        
         

        <div class="form-group my-3">
            <label for="phone-number">Amount</label>
            <input name="overall_balance" type="number" class="form-control" id="number" placeholder="">
        </div>

        <button type="submit" class="btn btn-primary">Updaet list</button>
                   
  </form>
 
</div>
@endsection