@extends('artbotlayouts.master')

@section('content')
@include('datatable.style')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Batch Management</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="">Students List</a></li>
  </ol>
</div>

<!-- Row -->
<div class="row">
  <div class="col-lg-12 mb-4">
     
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

          <h6 class="m-0 font-weight-bold text-primary">Batch</h6>
          <a href="{{ route('ab_course.create')}}" class="btn btn-sm btn-primary">Create Batch</a>

        </div>
        <div class="table-responsive">

          <table class="table align-items-center table-flush" id="course">

            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>
                
                <th scope="col" class="sort">Batch no.</th>
                <th scope="col" class="sort">Course Name</th>
                <th scope="col" class="sort">Course Type</th>
                <th scope="col" class="sort">Fees</th>
                <th scope="col" class="sort">Discount(%)</th>

                <th scope="col" class="sort">Discount(Amount)</th>

                <th scope="col" class="sort">Total Fees</th>
                <th scope="col" class="sort">Start Date</th>
                <th scope="col" class="sort">End Date</th> 
                          
                <th scope="col" class="sort">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
                  @foreach($ab_courses as $course)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>{{$course->ab_name}}</td>
                      <td>{{$course->ab_batch->ab_name}}</td>
                      <td>{{$course->ab_type}}</td>
                      <td>{{number_format($course->ab_fees)}} Ks</td>
                      <td>{{$course->ab_discount}}%</td>
                      <td>{{$course->ab_amount}} Ks</td>
                      <td>{{number_format($course->ab_fees-($course->ab_fees*$course->ab_discount/100)-$course->ab_amount)}} Ks</td>

                      <td>{{ \Carbon\Carbon::parse($course->ab_date)->format('d/M/Y')}}</td>

                      <td>{{\Carbon\Carbon::parse($course->ab_duration)->format('d/M/Y')}}</td>
                      

                      <td>
                       
                        {{-- <a href="{{route('courses.show',$course->id)}}" class="btn btn-warning detail btn-sm" ><i class="fas fa-eye"></i></a> --}}

                        <a href="{{route('ab_course.edit',$course->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        
                        <form method="post" style="display: inline-block" action="{{route('ab_course.destroy',$course->id)}}" onsubmit="return confirm('Are you sure?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer"></div>
      </div>
    </div>
</div>
<!--  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->

@endsection

@section('scripts')
 @include('datatable.script')

  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/js/demo/course-demo.js') }}"></script>
  
@endsection

