@extends('Frontend.master')
@section('content')
<div class="container">
    <div class="row"> 
        <div class="col-12 col-md-6"> 
  
    <form action="{{route('pay.now')}}" method="post">

@if($errors->any())
@foreach($errors->all() as $message)
<p class="alert alert-danger">{{$message}}</p>
@endforeach
@endif
    @csrf

        

        <div class="form-group my-3">
            <label for="name">Donate Amount</label>
            <input required name="donor_amount" type="number" class="form-control" id="donor_amount" placeholder="donor_amount">
        </div>   
        

        <div class="form-group">
            <label for="name"> Donate Belongings</label>
            <input   name="donor_belonging" type="text" class="form-control" id="name" placeholder="belonging">
        </div>
         

         

        <div class="form-group my-3">
            <label for="phone-number">Acount Number</label>
            <input required name="account_number" type="number" class="form-control" id="number" placeholder="">
        </div>
        <div class="form-group my-3">
            <label for="phone-number">Transaction_id</label>
            <input required name="transaction_id" type="text" class="form-control" id="number" placeholder="">
        </div>
        <div class="form-group my-3">
            <label for="phone-number">Payment Method</label>
            <select name="status" id="name" class="form-control">
                <option value="Bkash">Bkash</option>
                <option value="Nogod">Nogod</option>
                <option value="Rocket">Rocket</option>
            </select>
             
        </div>
        <button type="submit" class="btn btn-primary">Donate now</button>
                   
  </form>
  </div>
  </div>
</div>
@endsection