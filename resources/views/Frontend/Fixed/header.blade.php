 
  
                     <!-- Top Bar Start 
                     
         Top Bar End -->
 
 <!-- Nav Bar Start -->
 <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">HElPZ</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="{{route('money')}}" class="nav-item nav-link">Donation</a>
                        <a href="causes.html" class="nav-item nav-link">Causes</a>
                        <a href="event.html" class="nav-item nav-link">Notice</a>
                        @auth
                        
                    <a class="nav-item nav-link">

                    {{auth()->user()->name}}
                </a>

                <a href="{{route('profile')}}" class="nav-item nav-link">Profile</a>

                    <a href="{{route('user.logout')}}" class="nav-item nav-link">Logout</a>
                    @else
                        
                        <a href="#" class="nav-item nav-link"  data-toggle="modal" data-target="#login">Login</a>
  
                        <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#Registration">Registration</a>
                         
                        @endauth
                        
                         
                        <a href="{{route('enquiry')}}" class="nav-item nav-link">Enquiries</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->



        <!-- Button trigger modal -->


<!-- Modal -->
 


        

     



      