@extends('layouts.master')
@section('content')
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h3 class="h2 text-dark d-inline-block mb-0">Update Expense</h3>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Expense Lists</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update Expense</li>
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
                <div class="card-header">Update Expense</div>
                <div class="card-body">
                    <form action="{{ route('expense.update', ['id'=>$expense->id]) }}" method="POST">
                        @method ('PATCH')
                        @csrf
                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="expense_amount">Expense Name</label>
                                <input type="text" step="any" id="expense_amount" class="form-control"
                                    placeholder="Description" required="required" name="description"
                                    value="{{ $expense->description }}">

                            </div>
                        </div>

                             <div class="form-group">
                            <div class="form-label-group">
                                <label for="expense_title">Expense Category</label>
                              <select name="category_id" class="form-control">
                        <option value="" disabled>Choose a Category</option>
                        @foreach($category as $row)
                            <option value="{{$row->id}}" {{ $expense->cate==$row ? 'selected' : '' }}>{{$row->category_name}}</option>
                        @endforeach
                    </select>

                            </div>
                        </div>
                  
                    
                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="expense_amount">Amount received</label>
                                <input type="number" step="any" id="expense_amount" class="form-control"
                                    placeholder="Given Amount" required="required" name="given_amount"
                                    value="{{ $expense->given }}">


                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="expense_amount">Amount Paid</label>
                                <input type="number" step="any" id="expense_amount"  class="form-control"
                                    placeholder="Expense Amount" required="required" name="expense_amount"
                                    value="{{ $expense->amount }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="expense_amount">Date</label>
                                <input type="date" id="expense_amount" class="form-control" placeholder="Expense Date"
                                    required="required" name="expense_date" value="{{ $expense->date }}">

                            </div>
                        </div>
                        <div class="float-right">

                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
