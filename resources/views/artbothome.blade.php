@extends('artbotlayouts.master')

@section('content')
<div class="container">
    <div class="row">
        <!-- Total Count -->
        <div class="col-lg-12">
          <div class="card sm mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">ArtBot Myanmar {{ __('Dashboard') }}</h6>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-primary text-white">
                    <div class="card-body">
                      Total Student
                      <div class="text-white-50 small"><a style="text-decoration:none;color:#fff;" href="{{ url('/ab_students') }}">{{$ab_student}}</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-success text-white">
                    <div class="card-body">
                      Total Batch
                      <div class="text-white-50 small">{{$ab_course}}</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-info text-white">
                    <div class="card-body">
                      Total Course
                      <div class="text-white-50 small">{{$ab_batch}}</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-warning text-white">
                    <div class="card-body">
                      Total Item
                      <div class="text-white-50 small">0</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-danger text-white">
                    <div class="card-body">
                      Total Employee
                      <div class="text-white-50 small">0</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-secondary text-white">
                    <div class="card-body">
                      Total User
                      <div class="text-white-50 small">{{$user}}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="row">
        <!-- Report -->
         <!-- Area Chart -->
         <div class="col-xl-8 col-lg-7">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Monthly Recap Report</h6>
                <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="myAreaChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Pie Chart -->
          <div class="col-xl-4 col-lg-5">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Best Courses</h6>
                <div class="dropdown no-arrow">
                  <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Month <i class="fas fa-chevron-down"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Select Periode</div>
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">Week</a>
                    <a class="dropdown-item active" href="#">Month</a>
                    <a class="dropdown-item" href="#">This Year</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <div class="small text-gray-500">Oblong T-Shirt
                    <div class="small float-right"><b>600 of 800 Items</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="small text-gray-500">Gundam 90'Editions
                    <div class="small float-right"><b>500 of 800 Items</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="small text-gray-500">Rounded Hat
                    <div class="small float-right"><b>455 of 800 Items</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="small text-gray-500">Indomie Goreng
                    <div class="small float-right"><b>400 of 800 Items</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="small text-gray-500">Remote Control Car Racing
                    <div class="small float-right"><b>200 of 800 Items</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-center">
                <a class="m-0 small text-primary card-link" href="#">View More <i
                    class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection

