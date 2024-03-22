<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>ParkSpot X BracU</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="homeTemplate/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- nice selecy -->
  <link rel="stylesheet" href="homeTemplate/css/nice-select.min.css">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="homeTemplate/text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="homeTemplate/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="homeTemplate/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="homeTemplate/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/slider-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              ParkSpot X BracU
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li>
                <a class="nav-link" href="testimonial.html">||</a>
              </li>
              
              
              
              @if (Route::has('login'))
              @auth 
              <li class="nav-item">
                <a class="nav-link" href="{{url('mybookings')}}">My Bookings</a>
                
              </li>

              
              <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="btn btn-primary" id="logincss">Logout</button>
                </form>
              </li>   

              
              

              @else
              
              <li class="nav-item">
                <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
              </li>

              <li class="nav-item">
                <a class="btn btn-success" href="{{ route('register') }}" >Register</a>
              </li>

              

              @endauth
              @endif
             

            </ul>
            
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    
    <!-- end header section -->
    <!-- slider section -->





  <!-- jQery -->
  <script src="homeTemplate/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
  </script>
  <!-- nice select -->
  <script src="homeTemplate/js/jquery.nice-select.min.js"></script>
  <!-- bootstrap js -->
  <script src="homeTemplate/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="homeTemplate/js/custom.js"></script>

</body>

</html>