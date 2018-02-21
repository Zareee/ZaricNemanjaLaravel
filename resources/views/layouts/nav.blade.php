    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
      <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
      <!-- lightbox jQuery -->
    <link href="css/lightbox.css" rel="stylesheet">
      <!-- Icons HTML -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <div class="container">
      <center>
    <div class="col-xl pt-4"> 
      <img class=" img-fluid" style="max-width:100%;" src="/storage/images/logoatelje.jpg">
    </div>
    </center>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav mx-auto">
            <li class="nav-item active pr-2">
              <a class="nav-link btn btn-dark" href="{{ url('/' )}}"><strong>Galerija</strong><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item pl-2">
              <a class="nav-link btn btn-dark" href="{{ url('about' )}}"><strong>About us</strong></a>
            </li>
          </ul>
          <ul class="nav mx-auto">
            <li class="nav-item pl-2 pt-2 pb-2">
              <a href="{{ url('' )}}"><i class="fab fa-facebook-f fa-1x" style="color:black"></i></a>
            </li>
            <li class="nav-item pl-4 pt-2 pb-2">
              <a href="{{ url('' )}}"><i class="fab fa-instagram fa-1x" style="color:black"></i></a>
            </li>
            <li class="nav-item pl-4 pt-2 pb-2">
              <a href="{{ url('' )}}"><i class="fab fa-youtube fa-1x" style="color:black"></i></i></a>
            </li>
          </ul>
          <ul class="nav mx-auto">
            @if(Auth::check())
            <li class="nav-item pl-2">
              <a class="nav-link btn btn-outline-dark" href="{{ url('uploads')}}">Create</a>
            </li>
            <li class="nav-item pl-2">
              <a class="nav-link btn btn-outline-dark" href="{{ url('orders')}}">Orders</a>
            </li>
            <li class="nav-item pl-2">
              <a class="nav-link btn btn-light" href="{{ url('logout')}}">Logout</a>
            </li>
            @else
            <li class="nav-item pl-2">
              <a class="btn btn-dark btn-light" href="{{ url('cartview')}}" >Cart<i class="fa fa-cart-arrow-down"></i></a>
            </li>
            <li class="nav-item pl-2">
              <a class="nav-link btn btn-light" href="{{ url('login')}}">Login</a>
            </li>
            @endif
          </ul>
        </div>
        </div>
      </nav>





