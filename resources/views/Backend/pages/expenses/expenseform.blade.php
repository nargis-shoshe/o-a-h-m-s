@extends('Backend.master')
@section('content')
<div class="container mx-auto my-5">
 

    <form action="{{route('expensestore')}}" method="post">
    
@if($errors->all ())
@foreach($errors->all as $message)
<p class="alert alert-daner">"{{$messae}}"</p>
@endforeach
@endif
    @csrf   
        <div class="form-group">
            <label for="name"> Date</label>
            <input required name="date" type="date" class="form-control" id="name" placeholder="">
        </div>

        <div class="form-group my-3">
            <label for="name">Remarks</label>
            <input  required name="remarks" type="text" class="form-control" id="remarks" placeholder="">
        </div>   
        <div class="form-group">
            <label for="email"> Details</label>
            <input required name="details" type="text" class="form-control" id="email" placeholder="">
        </div>

       <!-- <div class="form-group">
            <label for="name">Category</label>
            <input  name="category" type="text" class="form-control" id="name" placeholder="belonging">
        </div>

        <div class="form-group">
            <label for="name">Donation-Id</label>
            <input  name="donation_id" type="number" class="form-control" id="name" placeholder="donation_id">
        </div>-->
         

        <div class="form-group my-3">
            <label for="phone-number">Amount</label>
            <input required name="overall_balance" type="number" class="form-control" id="number" placeholder="">
        </div>

        <button type="submit" class="btn btn-primary">submit</button>
                   
  </form>
 
</div>
@endsection