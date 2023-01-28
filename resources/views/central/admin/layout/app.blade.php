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
  
  <!-- include summernote css/js -->
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/central/admin/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/central/admin/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="{{route('dashboard')}}">
            <img src="{{asset('public/central/admin/images/logo.svg')}}" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}">
            <img src="{{asset('public/central/admin/images/logo-mini.svg')}}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Selamat Datang, <span class="text-black fw-bold">{{auth()->user()->name}}</span></h1>
            <h3 class="welcome-sub-text">Apa yang bisa kami bantu ?</h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              @if ($data_users->foto_profile != '-')
              <img class="img-xs rounded-circle" src="{{asset('public/central/uploads/'.$data_users->foto_profile)}}" alt="Profile image"> </a>
              @else
              <img class="img-xs rounded-circle" src="{{asset('public/central/img/blank_foto_profile.png')}}" alt="Profile image"> </a>
              @endif
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                @if ($data_users->foto_profile != '-')
                <img class="img-xs rounded-circle" src="{{asset('public/central/uploads/'.$data_users->foto_profile)}}" alt="Profile image"> </a>
                @else
                <img class="img-xs rounded-circle" src="{{asset('public/central/img/blank_foto_profile.png')}}" alt="Profile image"> </a>
                @endif
                <p class="mb-1 mt-3 font-weight-semibold">{{$data_users->name}}</p>
                <p class="fw-light text-muted mb-0">{{auth()->user()->email}}</p>
              </div>
              <a class="dropdown-item" href="{{route('user_profile')}}"><i class="dropdown-item-icon mdi mdi-account-outline text-success me-2"></i> My Profile<!-- <span class="badge badge-pill badge-danger">1</span>--></a>
              <a class="dropdown-item" href="{{route('user_activity')}}"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-success me-2"></i> Activity</a>
              <form action="<?php echo url('/signout') ?>" method="post">
                @csrf
                <button class="dropdown-item" type="submit"><i class="dropdown-item-icon mdi mdi-power text-success me-2"></i>Sign Out</button>
                </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= url('/dashboard')?>">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Data Tenancy</li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('orders.index')}}" >
              <i class="menu-icon mdi mdi-chart-bar"></i>
              <span class="menu-title">Data Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('tenancy.index')}}" >
              <i class="menu-icon mdi mdi-chart-bar"></i>
              <span class="menu-title">Data Tenancy</span>
            </a>
          </li>
          <li class="nav-item nav-category">Data Paket</li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('features.index')}}" >
              <i class="menu-icon mdi mdi-puzzle"></i>
              <span class="menu-title">Fitur</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('packet.index')}}" >
              <i class="menu-icon mdi mdi-seal"></i>
              <span class="menu-title">Paket</span> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('keunggulan_paket.index')}}" >
              <i class="menu-icon mdi mdi-seal"></i>
              <span class="menu-title">Keunggulan Paket</span> 
            </a>
          </li>
          <li class="nav-item nav-category">Post</li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('news.index')}}" >
              <i class="menu-icon mdi mdi-newspaper"></i>
              <span class="menu-title">Berita</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('testimonial.index')}}" >
              <i class="menu-icon mdi mdi-note-text"></i>
              <span class="menu-title">Testimoni</span>
            </a>
          </li>
          <li class="nav-item nav-category">Administrator</li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('users.index')}}">
              <i class="menu-icon mdi mdi-account-card-details"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact.index')}}">
              <i class="menu-icon mdi mdi-comment-multiple-outline"></i>
              <span class="menu-title">Contact</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        @yield('content-app')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">SIPINTER<a href="#" target="_blank"> App</a> from Hawari Software.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © SIPINTER 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
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

