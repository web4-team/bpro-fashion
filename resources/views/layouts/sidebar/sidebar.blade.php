 <!-- Sidebar -->
 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
      <div class="sidebar-brand-icon">
      
        <img src="{{ asset('img/logo/testlogo.png')}}">
      </div>
      <div class="sidebar-brand-text mx-3"><img src="{{ asset('img/logo/letter.png')}}"  width="100px" height="auto"></div>
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
    @can('schoolmanage.users')
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-address-card"></i>
        <span>Student Management </span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('students.index')}}">Students List</a>
          <a class="collapse-item" href="{{url('/batch')}}">Course</a>
          <a class="collapse-item" href="{{url('/courses')}}">Batch</a>
          
          
      </div>
    </li>
    @endcan
    @can('usermanage.users')
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fab fa-fw fa-accusoft"></i>
        <span>School Management</span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          
         
          <a class="collapse-item" href="{{url('/item')}}">Inventory Management</a>
          <a class="collapse-item" href="{{url('/income')}}">Category of Expense</a>
          <a class="collapse-item" href="{{url('/expense')}}">Accounting</a>
        </div>
      </div>
    </li>
    @endcan

    @can('manage.users')
  

      <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-user-tie"></i>
        <span>Employee Management</span>
      </a>
      <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <!-- <h6 class="collapse-header">Tables</h6> -->
          <a class="collapse-item" href="{{url('/employees')}}">Employee Lists</a>
          <a class="collapse-item" href="{{url('/departments')}}">Department</a>
          <a class="collapse-item" href="/divisions">Position</a>
			<a class="collapse-item" href="/empReport">Payroll Report</a>
          
          {{-- <a class="collapse-item" href="{{url('/salaries')}}">Attendence</a>
          <a class="collapse-item" href="{{url('/salaries')}}">Late</a>
          <a class="collapse-item" href="{{url('/salaries')}}">Leave</a>
          <a class="collapse-item" href="{{url('/salaries')}}">Overtime</a> --}}
          {{-- <a class="collapse-item" href="{{url('/salaries')}}">Payroll</a> --}}
          <!-- <a class="collapse-item" href="datatables.html">DataTables</a> -->
        </div>
      </div>
    </li>
    {{-- <li class="nav-item">
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