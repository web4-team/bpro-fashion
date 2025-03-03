 <!-- Sidebar -->
 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/artbothome') }}">
      <div class="sidebar-brand-icon">
      
        <img src="{{ asset('img/logo/artbotlogo.png')}}">
      </div>
      <div class="sidebar-brand-text mx-3">ArtBot Myanmar</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{ url('/home') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-address-card"></i>
        <span>Student Management </span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('ab_students.index')}}">Students List</a>
          <a class="collapse-item" href="{{url('/ab_batch')}}">Course</a>
          <a class="collapse-item" href="{{url('/ab_course')}}">Batch</a>
          <!-- <a class="collapse-item" href="#">Teacher List</a> -->
          
      </div>
    </li>
  
    @can('manage.users')

    {{--  <li class="nav-item">
      <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-palette"></i>
        <span>UI Colors</span>
      </a>
    </li> --}}
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Settings
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
        aria-controls="collapsePage">
        <i class="fas fa-fw fa-folder-open"></i>
        <span>Reports</span>
      </a>
      <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Example Pages</h6>
          <a class="collapse-item" href="login.html">Login</a>
          <a class="collapse-item" href="register.html">Register</a>
          <a class="collapse-item" href="404.html">404 Page</a>
          <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
      </div>
    </li>
  
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesPage" aria-expanded="true"
        aria-controls="collapsesPage">
        <i class="fas fa-fw fa-cogs"></i>
        <span>System Setting</span>
      </a>
      <div id="collapsesPage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
         
          <a class="collapse-item" href="/cities">City</a>
          <a class="collapse-item" href="/states">State</a>
          <a class="collapse-item" href="/countries">Country</a>
        </div>
      </div>
    </li>
    @endcan
    @can('manage.users')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.users.index')}}">
        <i class="fas fa-fw fa-users"></i>
        <span>Manage Users </span>
      </a>
    </li>
    @endcan

    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
  </ul>
  <!-- Sidebar -->