@extends('Backend.master')
@section('content')
<h1>Donation view</h1>
<div class="container mx-auto my-5"> 
<div class="card" style="width: 18rem;" id="area">
  <div class="card-body">
    <h5 class="card-title">Donation Details</h5>
     
    <p class="card-text">Donor Name:   {{$donor->donar_name}}</p>
    <p class="card-text">Donor Email:   {{$donor->donor_email}}</p>
    <p class="card-text">Phone-Number:   {{$donor->phone_number}}</p>
    <p class="card-text">Belongings type:   {{$donor->belongings}}</p>
    <p class="card-text">Donor Amount:   {{$donor->donor_amount}}</p>
    
  </div >
</div>
<div id="area">
      
</div>

<input type="button" onclick="printDiv('area')" value="Invoice" />
<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>
</div>

@endsection