<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 
  <link rel="icon" href="{{URL::asset('img/logo/testlogo.png')}}">
  <title>ArtBot Myanmar</title>
  <link href="{{URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet">

  @yield('style')
</head>

<body id="page-top;">
  <div id="wrapper">
    <!-- Sidebar -->
        @include('artbotlayouts.sidebar.sidebar')
        
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('artbotlayouts.header.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
         <!-- @include('partials.alerts') -->
         @if(session('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
        @endif

        @if(session('error'))
          <div class="alert alert-danger">
            {{session('error')}}
          </div>
        @endif
          @yield('content')
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      @include('layouts.footer.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{URL::asset('js/ruang-admin.min.js')}}"></script>
  <script src="{{URL::asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{URL::asset('js/demo/chart-area-demo.js')}}"></script> 

  @yield('scripts') 
</body>

</html>