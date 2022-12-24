@extends('Backend.master')

@section('content')
<h1></h1>
<div class="card" style="width: 18rem;" id="area">
  <div class="card-body">
    <h1 class="card-title">Expense Details</h1>
     
    <h3 class="card-text">Total Amount Donation: {{$totalDonation}} BDT </h3>
    <h3 class="card-text">Total Amount expences: {{$totalExpences}} BDT</h3>
    <h3 class="card-text"> Total belongings donations: {{$totalBelongings}}</h3>
    <h3 class="card-text"> Remaining Balance: {{$totalDonation - $totalExpences}} BDT</h3>
    
    
  </div >
</div>
 
<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Expense</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalExpences}} BDT</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

 
@endsection

 
     
