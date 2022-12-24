<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OAHMS Webpage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{url('/Frontend/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
    <link href="{{url('/Frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('/Frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('/Frontend/css/style.css')}}" rel="stylesheet">
    @notifyCss

    <style type="text/css">
        .notify {
            z-index: 1000000;
            margin-top: 2%;
        }
    </style>
</head>

<body>

    @include('notify::components.notify')
    @include('Frontend.Fixed.header')


    <div style="margin-top: 150px;">

        @if ($errors->any())
        <div class="bg-danger">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        @yield('content')
    </div>
    <!--@include('Frontend.Fixed.footer')-->

    <!-- Back to top button -->
     



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/Frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/parallax/parallax.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{url('/Frontend/mail/jqBootstrapValidation.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('/Frontend/js/main.js')}}"></script>
    @notifyJs
</body>

</html>