@extends('layouts.master')
@section('body')
    <div class="page-content inset" data-spy="scroll" data-target="#spy">
        <div class="container "> <h2>Add New Expense</h2>

            <div class="col-md-6">
                {!! Form::open(['url'=>'expenses','method'=>'post'])  !!}


                <div class="form-group">
                    <label for="productname" class="loginFormElement">Title:</label>
                    <input class="form-control" id="title" name="title" type="text">
                </div>

                <div class="form-group">
                    <label for="productprice" class="loginFormElement">Select Category</label>
                  <select name="category_id" class="form-control">
                      <option>Select Category</option>
                      @foreach($categories as $category)
                          <option value="  {{$category->id}}"> {{$category->name}}</option>
                      @endforeach


                  </select>
                </div>

                <div class="form-group">
                    <label for="productprice" class="loginFormElement">Select Month</label>
                    <select name="category_id" class="form-control">
                        <option>Select Month</option>
                        <option value="1">January</option>
                        <option value="2">Fab</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">Augest</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>                <div class="form-group">
                    <label for="amount" class="amount">Amount</label>
                    <input class="form-control" id="amount" name="amount" type="text">
                </div>
                <div class="form-group">
                    <label for="description" class="description">Description</label>
                    <textarea class="form-control" name="description" cols="15" rows="5"></textarea>
                </div>


                <button type="submit" id="loginSubmit" class="btn btn-success">Add Expense</button>
                <a class="btn btn-link" href="{{url('expenses ')}}">
                    <input type="back" class="btn btn-primary" value="Go Back">
                </a>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
    </div>

@endsection