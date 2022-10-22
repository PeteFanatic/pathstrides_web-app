@extends('announcements.layout')
@section('content')
<div class="card">
  <div class="card-header">Announcements Page</div>
  <div class="card-body">

  <a href="{{ url('/announcement/') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
    
      
      <form action="{{ url('announcement') }}" method="post">
        {!! csrf_field() !!}
        <label>Announcement ID:</label></br>
        <input type="text" name="ann_id" id="ann_id" class="form-control"></br>
        <label>Announcement Title:</label></br>
        <input type="text" name="ann_title" id="ann_title" class="form-control"></br>
        <label>Announcement Description:</label></br>
        <input type="text" name="ann_desc" id="ann_desc" class="form-control"></br>
        <label>Location:</label></br>
        <input type="text" name="location" id="location" class="form-control"></br>
        <label for="location">Status :</label></br>
        <select name="status" id="status" name="status"></br>
        <option value="1">Active</option></br>
        <option value="2">Cancelled</option></br>
        </select></br>
        
        <label for="location">Manager id:</label></br>
        <select name="user_id" id="user_id" name="user_id"></br>
        <option value="1">1</option></br>
        </select></br>
        
        
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
  </div>
</div>
@stop