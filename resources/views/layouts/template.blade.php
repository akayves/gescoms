<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <title>@yield('title')</title>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('includes.navtop')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('includes.navleft')
        <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">

         @yield('content')

        </div>
        <!-- content-wrapper ends -->

        <!-- partial:partials/_footer.html -->
        @include('includes.footer')
        <!--  footer end -->

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="template/js/vendor.bundle.base.js"></script>
  <script src="template/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->

  <!-- inject:js -->
  <script src="template/js/off-canvas.js"></script>
  <script src="template/js/hoverable-collapse.js"></script>
  <script src="template/js/template.js"></script>
  <script src="template/js/settings.js"></script>
  <script src="template/js/todolist.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page-->
  @yield('scripts')
  <!-- End custom js for this page-->

  <script>
    $(document).on("click", "#delete", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    bootbox.confirm("Do you really want to delete this element ?", function(confirmed){
      if (confirmed){
          window.location.href = link;
        };
      });
    });
  </script>
</body>
</html>

