@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('task/' .$tasks->task_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Task ID</label></br>
        <input type="text" name="task_id" id="task_id" value="{{$tasks->task_id}}" id="task_id" /></br>
        <label>Task Title:</label></br>
        <input type="text" name="task_title" id="task_title" value="{{$tasks->task_title}}" class="form-control"></br>
        <label>Task Description:</label></br>
        <input type="text" name="task_desc" id="task_desc" value="{{$tasks->task_desc}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop