 <!-- Top Bar Start -->
 <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+123 456 7890</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p> habijabbai</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->
 
 <!-- Nav Bar Start -->
 <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Helpz</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="#donate_form" class="nav-item nav-link">Donor</a>
                        <a href="causes.html" class="nav-item nav-link">Causes</a>
                        <a href="event.html" class="nav-item nav-link">Events</a>
                        @auth
                        
                    <a class="nav-item nav-link">

                    {{auth()->user()->name}}
                </a>
                    <a href="{{route('user.logout')}}" class="nav-item nav-link">Logout</a>
                    @else
                        
                        <a href="#" class="nav-item nav-link"  data-toggle="modal" data-target="#login">Login</a>
  
                        <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#Registration">Registration</a>
                         
                        @endauth
                        
                         
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->



        <!-- Button trigger modal -->


<!-- Modal -->
 


        

     



      