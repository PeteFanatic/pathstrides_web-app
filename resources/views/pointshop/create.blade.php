@extends('pointshop.layout')
@section('content')
<div class="card">
  <div class="card-header">Add New Member</div>
  <div class="card-body">
      <form action="{{ url('pointshop') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input class="form-control" name="photo" type="file" id="photo"> </br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop