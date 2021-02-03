@extends('layouts.master')
@section('content')
    <!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h3 class="h2 text-dark d-inline-block mb-0">Update Income</h3>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Income Lists</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Expense</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{route('income.index')}}" class="btn btn-primary btn-sm">Back to Table</a>
              
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
                    <div class="card-header">Update Income</div>
                    <div class="card-body">
                        <form action="{{ route('income.update', $incomes->id) }}" method="post">
                            @method ('PATCH')
                            @csrf
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="expense_title">Category</label>
                                    <input type="text" id="expense_title" class="form-control" placeholder="Income Category" required="required" autofocus="autofocus" name="income_category" value="{{$incomes->category}}">
                                    
                                </div>
                            </div>
                              <div class="form-group">
                                <div class="form-label-group">
                                    <label for="expense_title">Description</label>
                                    <input type="text" id="expense_title" class="form-control" placeholder="Income Description" required="required" autofocus="autofocus" name="income_description" value="{{$incomes->description}}">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="expense_amount">Amount</label>
                                    <input type="number" step="any" id="expense_amount" min="0.01"  class="form-control" placeholder="Income Amount" required="required" name="income_amount" value="{{$incomes->amount}}">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label for="expense_amount">Date</label>
                                    <input type="date" id="expense_amount" class="form-control" placeholder="Income Date" required="required" name="income_date" value="{{ $incomes->date }}">
                                    
                                </div>
                            </div>
                                <div class="form-group">
                                <div class="form-label-group">
                                    <label for="expense_amount">Remark</label>
                                    
                                   <textarea class="form-control text-dark" name="income_remark" rows="3">{{$incomes->remark}}</textarea>
                                    
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="{{route('income.index')}}" class="btn btn-success">Back</a>
                                <button type="submit" class="btn btn-primary">Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    @endsection