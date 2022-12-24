@extends('Frontend.master')
@section('content')
<!-- Carousel Start -->

<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="{{url('/Frontend/img/Home-health-agency.jpg')}}" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>Let's be kind for Old people</h1>
                    <p> It is a shelter home where older people live in a community with other people when they have been abandoned by their families.
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- Video Modal Start-->

<!-- Video Modal End -->


<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img" data-parallax="scroll" data-image-src="{{url('/Frontend/img/Old-Age-Home About.jpg')}}"></div>
            </div>
            <div class="col-lg-6">
                <div class="section-header">
                    <p>About Us</p>
                    <h2></h2>
                </div>
                <div class="about-tab">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab-content-1" class="container tab-pane active">
                            An old age home is a shelter that is home to the older and needy people who the family has abandoned. In old age homes, these people are taken care of the food, clothing and shelter. Also, they are given proper medical facilities. Much recreational and entertainment are also provided.
                        </div>
                        <div id="tab-content-2" class="container tab-pane fade">
                            Our mission is to ensure that our senior population will have the support and resources they need to live the life they have earned and now deserve as our generation’s elders.
                        </div>
                        <div id="tab-content-3" class="container tab-pane fade">
                            To look after the elderly people with utmost care and empathy in a pleasant atmosphere to lead a peaceful life till their last journey. To extend the facilities of the home to more number of needy persons in the society. To continue to survive by bringing together the hands of all like-minded people.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->

<div class="service">
    <div id="service-1" class="container">
        <div class="section-header text-center">
            <p>What Services We Have?</p>
            <h2>We believe that we can save more lifes with you</h2>
        </div>
        <div class="row">
            @foreach($servs as $data)
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class=" ">
                        <img style="border-radius: 10px; height:  100px; width:400px;" src="{{url('/Inserts/'.$data->image)}}" alt=" ">
                        <i class=""></i>
                    </div>
                    <div class="service-text">
                        <h3>{{$data->name}}</h3>
                        <p>{{$data->description}}</p>
                    </div>
                </div>


            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->




<!-- Causes Start -->
<div class="causes">
    <div class="container">
        <div class="section-header text-center">
            <p>Care Givers Team</p>
            <h2>Let's know about who are taken care of the old people</h2>
        </div>

        <div class="row">
            @foreach($staff as $data)
            <!--<div class="owl-carousel causes-carousel">-->
            <div class="col-md-4">


                <div class="card" style="width: 18rem;">
                    <img src="{{url('/Inserts/'.$data->image)}}" class="card-img-top" alt="" style="height: 200px;">
                    <div class="card-body">
                    <div>
                                <h2 style="font-weight: bold">Name</h2>
                                <p>{{$data->name}}</p>
                            </div>
                            <div>
                                <h2 style="font-weight: bold">Email</h2>
                                <p>{{$data->email}}</p>
                            </div>
                            <div>
                                <h2 style="font-weight: bold">Designation</h2> <p>{{$data->designation}}</p>
                                
                            </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>



    </div>
</div>
</div>
<!-- Causes End -->


<!-- Donate Start -->

<!-- Donate End -->










<!-- Modal -->
<div class="modal fade" id="Registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Registration">Please Signup before Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="about-tab">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#tab-content-10">For Senior Citizen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tab-content-20">For Donor</a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div id="tab-content-10" class="container tab-pane active">


                            <form action="{{route('scregistration')}}" method="post" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label for="name"> Name</label>
                                    <input required name="name" type="text" class="form-control" id="name" placeholder="name of senior citizen">
                                </div>

                                <div class="form-group">
                                    <label for="name">Date of birth</label>
                                    <input required name="date_of_birth" type="date" class="form-control" id="name" placeholder="date of birth">
                                </div>

                                <div class="form-group">
                                    <label for="name">Contact Number</label>
                                    <input required name="mobile" type="number" class="form-control" id="name" placeholder="contact number">


                                </div>




                                <div class="form-group">
                                    <label for="name">Registration Date</label>
                                    <input required name="registration_date" type="date" class="form-control" id="name" placeholder="registration date">


                                </div>




                                <div class="form-group">
                                    <label for="name">Address</label>
                                    <input required name="address" type="text" class="form-control" id="name" placeholder="address">
                                </div>

                                <div class="form-group">
                                    <label for="name">Emergency Contact Number</label>
                                    <input required name="emergency_number" type="number" class="form-control" id="name" placeholder="Phone Number">
                                </div>


                                <div class="mb-3">
                                    <label for="image">Image</label>
                                    <input required name="image" type="file" class="form-control" id="image">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>


                        </div>
                        <div id="tab-content-20" class="container tab-pane ">

                            <form action="{{route('registration')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input required name="senior_citizen_name" type="name" class="form-control" id="exampleInputPassword1" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input required name="senior_citizen_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group my-3">
                                    <label for="phone-number">Phone number</label>
                                    <input required name="phone_number" type="number" class="form-control" id="" placeholder="phone-Number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input required name="senior_citizen_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Role</label>
                                    <input name="senior_citizen" type="text" class="form-control" id="exampleInputPassword1" placeholder="Role">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>

                    </div>
                </div>







            </div>
            <div class="modal-footer">


            </div>

        </div>
    </div>
</div>




<!--login -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">



                <form action="{{route('user.login')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
            </form>
        </div>
    </div>
</div>




@endsection