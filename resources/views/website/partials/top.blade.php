
<nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <picture>
            <img src="images/logo.png" alt="logo" class="lazyload logo" />
          </picture>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        ></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav text-center mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{route('website')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('request.list')}}">Request Medicine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
            
            </li>
          </ul>
       <div>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Registration
                </button>
        </div>
          <div class="text-center">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login-modal">
                 Login
                </button>
          </div>
        </div>
      </div>
      
    
      <!-- For Registration -->




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('user.store')}}" method="post">
        @csrf
      <div class="modal-body">
      <div class= 'form-group'>
      <label for="">Enter Your Name</label>
       <input type="text" name='donor_name' placeholder= 'Enter your name' class= 'form-control'>
      </div>
      <div class= 'form-group'>
      <label for="">Enter Your Email</label>
       <input type="email" name='donor_email' placeholder= 'Enter your email' class= 'form-control'>
      </div>
      <div class= 'form-group'>
      <label for="">Enter Your password</label>
       <input type="password" name='password' placeholder= 'Enter your password' class= 'form-control'>
      </div>
      <div class= 'form-group'>
      <label for="">Enter Your confrim password</label>
       <input type="password" name='password_confirmation' placeholder= 'Enter your confrim password' class= 'form-control'>
      </div>
      </div>
    
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <!-- End registration -->

<!-- Login for donor -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('user.login')}}" method="post">
        @csrf
      <div class="modal-body">
      <div class= 'form-group'>
      <label for="">Enter Your Email</label>
       <input type="email" name='email' placeholder= 'Enter your email' class= 'form-control'>
      </div>
      <div class= 'form-group'>
      <label for="">Enter Your password</label>
       <input type="password" name='password' placeholder= 'Enter your password' class= 'form-control'>
      </div>
      </div>
    
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- Login for donor end  -->

    </nav>
