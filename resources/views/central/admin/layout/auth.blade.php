@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIPINTER - @yield('page') </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('public/central/admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('public/central/admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/central/admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/central/admin/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('public/central/admin/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/central/admin/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('public/central/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('public/central/admin/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/central/admin/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/central/admin/images/favicon.png')}}" />
</head>
<body>
  @yield('content-app')
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('public/central/admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('public/central/admin/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('public/central/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('public/central/admin/vendors/progressbar.js/progressbar.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('public/central/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/central/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/central/admin/js/template.js')}}"></script>
  <script src="{{asset('public/central/admin/js/settings.js')}}"></script>
  <script src="{{asset('public/central/admin/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('public/central/admin/js/dashboard.js')}}"></script>
  <script src="{{asset('public/central/admin/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
  @yield('content-script')
</body>

</html>

