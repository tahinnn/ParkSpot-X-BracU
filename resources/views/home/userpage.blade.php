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
    @include("home.header")
    <!-- end header section -->
    <!-- slider section -->
    @include("home.slider")
    <!-- end slider section -->
  </div>

  <!-- about section -->
  @include("home.about")

  <!-- end about section -->

  <!-- why section -->
  @include("home.whychooseus")

  <!-- end why section -->

  <!-- pricing section -->
  @include("home.pricing")

  <!-- end pricing section -->


  <!-- client section -->
  @include("home.clientSection")

  <!-- end client section -->

  <!-- info section -->
  @include("home.info")
  <!-- end info_section -->

  <!-- footer section -->
  @include("home.footer")
  <!-- footer section -->

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