@extends('layouts.master')
@section('content')
    <!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h3 class="h2 text-dark d-inline-block mb-0">Add New Expense</h3>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Expense Lists</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Expense</li>
                </ol>
              </nav>
            </div>
           <!--  <div class="col-lg-6 col-5 text-right">
              <a href="{{route('expense.index')}}" class="btn btn-primary btn-sm">Back to Table</a>
              
            </div> -->
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
                    <div class="card-header">Insert New Expense</div>
                    <div class="card-body">
                        <form action="{{ route('expense.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="expense_title">Category</label>
                                    <input type="text" id="expense_title" class="form-control" placeholder="Expense Category" required="required" autofocus="autofocus" name="expense_category">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="expense_amount">Amount</label>
                                    <input type="number" step="any" id="expense_amount" min="0.01"  class="form-control" placeholder="Expense Amount" required="required" name="expense_amount">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="expense_amount">Date</label>
                                    <input type="date" id="expense_amount" class="form-control" placeholder="Expense Date" required="required" name="expense_date" value="{{ date('Y-m-d') }}">
                                    
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="{{ url('summary') }}" class="btn btn-success">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    

    @endsection