@extends('Backend.master')
@section('content')
<div style="background-color:bisque; height: 673px;">
    <h1 style="color:blue; justify-content:center; text-align:center;">Donation view</h1>
    <div class="container mx-auto my-5">
        <div class="card" style="width: 23rem;margin: 0 auto;font-size:25px;" id="area">
            <div class="card-body">
                <h2 class="card-title">Donation Details</h2>

                <p class="card-text">Donor Name: {{$donor->donar_name}}</p>
                <p class="card-text">Donor Email: {{$donor->donor_email}}</p>
                <p class="card-text">Phone-Number: {{$donor->phone_number}}</p>
                <p class="card-text">Belongings type: {{$donor->belongings}}</p>
                <p class="card-text">Donor Amount: {{$donor->donor_amount}}</p>

            </div>
        </div>
        <div id="area">

        </div>
        <input type="button" onclick="printDiv('area')" class="btn btn-primary" value="Invoice" style=" margin: 0 auto;
    display: flex;
    margin-top: 22px;" />


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
</div>

@endsection
