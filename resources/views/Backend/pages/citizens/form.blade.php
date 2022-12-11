@extends('Backend.master')
@section('content')
<h1>Add Senior Citizen Details:</h1>

<form action="{{route('form.store')}}" method="post"  enctype="multipart/form-data">
    @csrf

<div class="form-group">
            <label for="name"> Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="name of senior citizen">
        </div>

        <div class="form-group">
            <label for="name">Date of birth</label>
            <input name="date_of_birth"type="date" class="form-control" id="name"placeholder="date of birth">
        </div>

        <div class="form-group">
            <label for="name">Contact Number</label>
            <input name="phone_number" type="number" class="form-control" id="name" placeholder="contact number">

            
        </div>

         
        <div class="form-group">
            <label for="name">Registration Number</label>
            <input name="registration_number" type="number" class="form-control" id="name" placeholder="contact number">

            
        </div>

        <div class="form-group">
            <label for="name">Registration Date</label>
            <input name="registration_date" type="date" class="form-control" id="name" placeholder="registration date">

            
        </div>




        <div class="form-group">
            <label for="name">Address</label>
            <input name="address" type="text" class="form-control" id="name"placeholder="address">
        </div>

        <div class="form-group">
            <label for="name">Emergency Contact Number</label>
            <input name="emergency_number" type="number" class="form-control" id="name"placeholder="Phone Number">
        </div>


        <div class="mb-3">
    <label for="image">Image</label>
    <input name="image"type="file" class="form-control" id="image">
     
  </div>

        <div class="form-group">
            <label for="">Enter Senior Citizen status</label>
            <select name="status" id="name" class="form-control">
                <option value="paid">Paid</option>
                <option value="unpaid">Unpaid</option>
            </select>
        </div>
         

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


@endsection