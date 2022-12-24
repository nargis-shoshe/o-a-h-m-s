@extends('Backend.master');
@section('content')
<h1>Donation Report</h1>

<form action="{{route('donatemmoney.report.search')}}" method="get">

<div class="row">
    <div class="col-md-4">
        <label for="">From date:</label>
        <input required name="from_date" type="date" class="form-control">

    </div>
    <div class="col-md-4">
        <label for="">To date:</label>
        <input required name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-success" style="margin-top :24px;">Search</button>
    </div>
</div>

</form>
<div id="DonationReport">

<h1>Donation Reports- {{date('Y-m-d')}}</h1>
    <table class="table table-striped">
        <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Donor-Name</th>
        <th scope="col">Donor-Email</th>
        <th scope="col">Phone-Number</th>
        <th scope="col"> Donate-Amount(BDT)</th>
        <th scope="col"> Donate-Belongings</th>        
        <th scope="col">Transaction-ID</th>        
        <th scope="col">Account Number</th>        
        <th scope="col">Payment Mthod</th>        
        

        </tr>
        </thead>
        <tbody>

        
        @if(isset($donor))
        @foreach($donor as $key=>$data)
        <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->user->name}}</td>
        <td>{{$data->user->email}}</td>
        <td>{{$data->user->mobile}}</td>
        <td>{{$data->donor_amount}}</td>
        <td>{{$data->belongings}}</td>
        <td>{{$data->Transaction_id}}</td>
        <td>{{$data->account_number}}</td>
        <td>{{$data->payment_method}}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
        
    </table>
</div>
<button onclick="printDiv('DonationReport')" class="btn btn-success">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@endsection