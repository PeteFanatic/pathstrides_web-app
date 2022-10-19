@extends('departments.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('department/' .$departments->ann_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>department ID</label></br>
        <input type="text" name="ann_id" id="ann_id" value="{{$departments->ann_id}}" id="ann_id" /></br>
        <label>department Title:</label></br>
        <input type="text" name="ann_title" id="ann_title" value="{{$departments->ann_title}}" class="form-control"></br>
        <label>department Description:</label></br>
        <input type="text" name="ann_desc" id="ann_desc" value="{{$departments->ann_desc}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
  <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
</div>
@stop