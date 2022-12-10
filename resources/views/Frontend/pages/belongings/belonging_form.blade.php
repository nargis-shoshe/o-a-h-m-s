@extends('Frontend.master')

@section('content')
<div class="container mx-auto my-5">
 

<form action="{{route('belonging.form')}}" method="post">
    @csrf
<div class="form-group">
            <label for="name">Donor Name</label>
            <input required name="donor_name" type="text" class="form-control" id="name" placeholder="donor_name">
        </div>   
        
        <div class="form-group">
            <label for="belonging details">Belonging Details</label>
            <textarea class="form-control" required name="belonging_details" id="name"></textarea>
        </div>

        <div class="form-group">
            <label for="phone-number">Phone number</label>
            <input required name="phone_number" type="number" class="form-control" id="number" placeholder="">
        </div>

         

         
         

        <button type="submit" class="btn btn-primary">Donate now</button>
                   
  </form>
 
</div>

@endsection