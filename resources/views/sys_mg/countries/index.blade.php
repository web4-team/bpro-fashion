@extends('layouts.master')	
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Country</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/home')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="">Country Lists</a></li>
  </ol>
</div>

<!-- Row -->
<div class="row">
  <div class="col-lg-12 mb-4">
     
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Country Lists</h6>
          <a href="{{route('countries.create')}}" class="btn btn-sm btn-primary">Create Country</a>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>                
                <th scope="col" class="sort">Country Name</th>
                <th scope="col" class="sort">Created at</th>
                <th scope="col" class="sort">Updated at</th>               
                <th scope="col" class="sort">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($countries as $country)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>{{$country->country_name}}</td>
                      <td>{{$country->created_at}}</td>                
                      <td>{{$country->updated_at}}</td>
                      <td>
                      <a href="{{route('countries.edit', $country->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        
                        <form method="post" style="display: inline-block" action="{{route('countries.destroy', $country->id)}}" onsubmit="return confirm('Are you sure?')">
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


@endsection