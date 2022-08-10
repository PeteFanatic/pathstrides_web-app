@extends('announcements.layout')
@section('content')
<div class="card">
  <div class="card-header">Announcements Page</div>
  <div class="card-body">


    
      
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
        <label for="man_id">Manager id:</label></br>
        <select name="man_id" id="man_id" name="man_id"></br>
        <option value="1">1</option></br>
        </select></br>
        
        
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop