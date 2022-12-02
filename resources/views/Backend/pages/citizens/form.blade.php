@extends('Backend.master')
@section('content')

<form action="{{route('form.store')}}" method="post">
    @csrf

<div class="form-group">
            <label for="name"> Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="name">
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input name="email"type="text" class="form-control" id="name"placeholder="email">
        </div>

        <div class="form-group">
            <label for="name">Password</label>
            <input name="password" type="text" class="form-control" id="name" placeholder="Password">

            
        </div>

        <div class="form-group">
            <label for="name">Phone Number</label>
            <input name="Phone_number" type="number" class="form-control" id="name"placeholder="Phone Number">
        </div>

        <div class="form-group">
            <label for="name">Address</label>
            <input name="address" type="text" class="form-control" id="name"placeholder="address">
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" name="description" id="name"></textarea>
        </div>

        <div class="mb-3">
    <label for="image">Upload Image</label>
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