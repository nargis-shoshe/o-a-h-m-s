@extends('Frontend.master')
@section('content')
<div class="container">
    <div class="row"> 
        <div class="col-12 col-md-6"> 
  
    <form action="{{route('money.store')}}" method="post">

@if($errors->any())
@foreach($errors->all() as $message)
<p class="alert alert-danger">{{$message}}</p>
@endforeach
@endif
    @csrf

        <div class="form-group">
            <label for="name"> Donor Name</label>
            <input required name="donor_name" type="text" class="form-control" id="name" placeholder="name">
        </div>

        <div class="form-group my-3">
            <label for="name">Donate Amount</label>
            <input required name="donor_amount" type="number" class="form-control" id="donor_amount" placeholder="donor_amount">
        </div>   
        <div class="form-group">
            <label for="email"> Donor email</label>
            <input required name="donor_email" type="email" class="form-control" id="email" placeholder="email">
        </div>

        <div class="form-group">
            <label for="name"> Donate Belongings</label>
            <input required  name="donor_belonging" type="text" class="form-control" id="name" placeholder="belonging">
        </div>
         

        <div class="form-group my-3">
            <label for="phone-number">Phone number</label>
            <input required name="phone_number" type="number" class="form-control" id="number" placeholder="phone-Number">
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
                <option value="Bkash(01990668971)">Bkash</option>
                <option value="Nogod(01990668971)">Nogod</option>
                <option value="Rocket(01990668971)">Rocket</option>
            </select>
             
        </div>
        <button type="submit" class="btn btn-primary">Donate now</button>
                   
  </form>
  </div>
  </div>
</div>
@endsection