 <!-- Top Bar Start 
                     
         Top Bar End -->

 <!-- Nav Bar Start -->
 <div class="navbar navbar-expand-lg bg-dark navbar-dark">
     <div class="container-fluid">
         <a href="" class="navbar-brand">Elderly Care</a>
         <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
             <div class="navbar-nav ml-auto">
                 <a href="{{route('webpage')}}" class="nav-item nav-link">Home</a>
                 <a href="#tab-content-1" class="nav-item nav-link">About</a>
                 <a href="#service-1" class="nav-item nav-link">Services</a>
                 <a href="{{route('enquiry')}}" class="nav-item nav-link">Enquiries</a>
                 <a href="{{route('money')}}" class="nav-item nav-link">Donate Now</a>

                 <!--<a href="causes.html" class="nav-item nav-link">Causes</a>
                        <a href="event.html" class="nav-item nav-link">Notice</a>-->
                 @auth

                 <!--<a class="nav-item nav-link">

                     {{auth()->user()->name}}
                 </a>-->

                 <a href="{{route('profile')}}" class="nav-item nav-link">Profile</a>

                 <a href="{{route('user.logout')}}" class="nav-item nav-link">Logout</a>
                 <a class="nav-item nav-link" data-toggle="modal" data-target="#notification"><i class="fas fa-bell"></i></a>
                 @else

                 <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#login">Login</a>

                 <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#Registration">Registration</a>

                 @endauth
             </div>
         </div>
     </div>
 </div>
 <!-- Nav Bar End -->



 <!-- Button trigger modal -->


 <!-- Modal -->