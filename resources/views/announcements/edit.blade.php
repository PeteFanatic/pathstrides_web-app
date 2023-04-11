@extends('layouts.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('announcement/' .$announcements->ann_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Announcement ID</label></br>
        <input type="text" name="ann_id" id="ann_id" value="{{$announcements->ann_id}}" id="ann_id" /></br>
        <label>Announcement Title:</label></br>
        <input type="text" name="ann_title" id="ann_title" value="{{$announcements->ann_title}}" class="form-control"></br>
        <label>Announcement Description:</label></br>
        <input type="text" name="ann_desc" id="ann_desc" value="{{$announcements->ann_desc}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
  <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
</div>
@stop