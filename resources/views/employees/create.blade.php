@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee') }}" method="post">
        {!! csrf_field() !!}
        <label>Employee ID:</label></br>
        <input type="text" name="emp_id" id="emp_id" class="form-control"></br>
        <label>First Name:</label></br>
        <input type="text" name="emp_fname" id="emp_fname" class="form-control"></br>
        <label>Last Name:</label></br>
        <input type="text" name="emp_lname" id="emp_lname" class="form-control"></br>
        <label>Email:</label></br>
        <input type="text" name="emp_email" id="emp_email" class="form-control"></br>
        <label>Contanct Number:</label></br>
        <input type="text" name="emp_contanct_num" id="emp_contanct_num" class="form-control"></br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop