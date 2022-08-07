@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employees->emp_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Employee ID</label></br>
        <input type="text" name="emp_id" id="emp_id" value="{{$employees->emp_id}}" id="emp_id" /></br>
        <label>Employee First Name:</label></br>
        <input type="text" name="emp_fname" id="emp_fname" value="{{$employees->emp_fname}}" class="form-control"></br>
        <label>Employee Last Name:</label></br>
        <input type="text" name="emp_lname" id="emp_lname" value="{{$employees->emp_lname}}" class="form-control"></br>
        <label>Employee Email</label></br>
        <input type="text" name="emp_email" id="emp_email" value="{{$employees->emp_email}}" class="form-control"></br>
        <label>Contanct Number</label></br>
        <input type="text" name="emp_contanct_num" id="emp_contanct_num" value="{{$employees->emp_contanct_num}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop