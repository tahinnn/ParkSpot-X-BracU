<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  <style type = "text/css">
     label {
      display: inline-block;
      width: 200px ;
     }

  </style>
  @include("admin.css")
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include("admin.sidebar")
      <!-- partial -->
      @include("admin.header")
        <!-- partial:partials/_navbar.html -->
        <div class="container-fluid page-body-wrapper">
        
        
        
        <div class = "container" align ="center" style="padding-top: 100px;">
          
           @if(session()->has('message'))
           <div class="alert alert-success">
             <button type="button" class="close" data-dismiss="alert"> x </button>
             {{session()->get('message')}}
           </div>
           @endif
           <form action="{{url('upload_employee')}}" method="POST" enctype="multipart/form-data"> 

            @csrf
            <div style="padding:20px;">
              <label>Employee Name</label>
              <input type="text" name="name" style = "color:black" placeholder="Write the name" required="">

            </div>

            <div style="padding:20px;">
              <label>Phone Number</label>
              <input type="number" name="number" style = "color:black" placeholder="Write the number" required="">

            </div>

            <div style="padding:20px;">
              <label>Designation</label>
              <input type="text" name="text" style = "color:black" placeholder="Write the designated area of employment" required="">

            </div>

            <div style="padding:20px;" align="center">
              <label>Employee Image</label>
              <input type="file" name="file" style = "color:black" placeholder="" required="">

            </div>

            <div style="padding:20px;">
              
              <input type="submit" class="btn btn-success" >

            </div>
            
           </form>

          
        </div>
        </div>
       


        </div>
        <!-- partial -->
        <!--@include("admin.body")-->
          <!-- content-wrapper ends -->
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