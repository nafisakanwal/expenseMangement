@extends('layouts.master')
@section('body')

<h2>Reports</h2>
    <select onchange="doAction(this.value)" id="month_id" name="month" class="form-control">
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

<select class="form-control">
        <option>Select Month</option>
        <option value="1">January</option>
        <option value="2">Fab</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">Augest</option>
    <option value="9"><a href="{{url('report/monthly/9')}}">September</a></option>
        <option value="10"><a href="{{url('report/monthly/10')}}">October</a></option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>

<hr>

<table class="table table-bordered table-striped table-hover table-responsive ">
        <thead>
        <th>Categories</th>
        <th>Amount</th>
        <th>Description</th>

        </thead>
        <tbody>
        @foreach($expenses as $expense)
            <tr>
                <td> {{$expense->name}}</td>

                <td>  {{$expense->expenses->amount or 0}}</td>


                <td>  {{$expense->expenses->description or 'Not Found'}}</td>
            </tr>

            @endforeach
        @foreach($categories as $cat)
            <tr>
                <td> {{$cat->name}}</td>

                <td>  0</td>


                <td>  Not Found</td>
            </tr>

            @endforeach

        </tbody>
    </table>
        <h2>Total Amount: {{$expenses->sum('expenses.amount')}}</h2>

    @endsection

<script type="text/javascript">
    function doAction(val){

        window.location='http://127.0.0.1:8000/reports/' + val;
    }

</script>