<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.css")
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include("admin.sidebar")
      <!-- partial -->
      @include("admin.header")
      <!-- partial -->
      <div class="content-wrapper">
        <div class="container">
          <h1>Welcome to Our Parking Management System</h1>
          <!-- Add the "Scan" section here -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Scan QR Code</h5>
                  <p class="card-text">Click the button below to scan the QR code and book your parking spot.</p>
                  <a href="{{ route('scan_and_book') }}" class="btn btn-primary">Scan QR Code and Book</a>
                </div>
              </div>
            </div>
          </div>
          <!-- End of "Scan" section -->
        </div>
      </div>
      <!-- partial:partials/_footer.html -->
      @include("admin.footer")
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include("admin.script")
    <!-- End custom js for this page -->
  </body>
</html>