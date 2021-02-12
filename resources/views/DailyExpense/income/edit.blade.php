@extends('layouts.master')
@section('content')
    <!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h3 class="h2 text-dark d-inline-block mb-0">Update Expense Category</h3>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Expense Category Lists</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Expense Category</li>
                </ol>
              </nav>
            </div>
         
          </div>
        </div>
      </div>
    </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
            <div class="col-xl-8 offset-2">
                <div class="card mx-auto mt-5">
                    <div class="card-header">Update Category </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('income.update', $incomes->id) }}">
                            @method ('PATCH')
                            @csrf
                            
                            <div class="form-group">    
                              <label for="name">Category Name:</label>
                              <input type="text" class="form-control" name="category" value="{{$incomes->category}}" />
                            </div>
                         
                            
                      
                            <button type="submit" class="btn btn-primary">Update</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    

    @endsection