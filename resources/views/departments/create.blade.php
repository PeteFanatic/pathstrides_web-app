@extends('departments.layout')
@section('content')
<div class="card">
  <div class="card-header">departments Page</div>
  <div class="card-body">

  <a href="{{ url('/department/') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
    
      
      <form action="{{ url('department') }}" method="post">
        {!! csrf_field() !!}
        <label>Department ID:</label></br>
        <input type="text" name="dep_id" id="dep_id" class="form-control"></br>
        <label>Department Name:</label></br>
        <input type="text" name="dep_name" id="dep_name" class="form-control"></br>
        <label for="dep_coll">Department Coll :</label></br>
        <select name="dep_coll" id="dep_coll" name="dep_coll"></br>
        <option value="1">1</option></br>
        </select></br>
        
        
        
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
  </div>
</div>
@stop