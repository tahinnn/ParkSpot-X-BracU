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
          <li class="nav-item">
            <a class="nav-link" href="about.html"> About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pricing.html">Special and Offers</a>
          </li>
          <li class="nav-item">
            <!-- QR Code Scanning Form -->
            <form action="{{ route('qr.scan') }}" method="POST">
              @csrf
              <button type="submit" class="nav-link btn btn-link">Scan</button>
            </form>
            <!-- End QR Code Scanning Form -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="why.html">Why Us</a>
          </li>
          <li class="nav-item">
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
            <a class="btn btn-success" href="{{ route('register') }}">Register</a>
          </li>
          @endauth
          @endif

        </ul>

      </div>
    </nav>
  </div>
</header>
<!-- end header section -->