@extends('layouts.layout')
@section('content')
<div class="card">
  <div class="card-header">Announcements Page</div>
  <div class="card-body">

  <a href="{{ url('/announcement/') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
    
      
      <form action="{{ url('announcement') }}" method="post">
        {!! csrf_field() !!}
        <label>Announcement Title:</label></br>
        <input type="text" name="anns_title" id="anns_title" class="form-control"></br>
        <label>Announcement Description:</label></br>
        <input type="text" name="anns_desc" id="anns_desc" class="form-control"></br>
        <label>Location:</label></br>
        <input type="text" name="location" id="location" class="form-control"></br>
        <label>Latitude:</label></br>
        <input type="text" name="anns_lat" id="anns_lat" class="form-control"></br>
        <label>Longtitude:</label></br>
        <input type="text" name="anns_long" id="anns_long" class="form-control"></br>
       
       
        
        
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
  </div>
</div>
@stop