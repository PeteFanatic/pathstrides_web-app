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
        <label>Points:</label></br>
        <input type="text" name="points" id="points"  value="{{$tasks->points}}" class="form-control"></br>
        <label>Location:</label></br>
        <input type="text" name="location" id="location"  value="{{$tasks->location}}" class="form-control"></br>
        <label for="user_id">User id:</label></br>
        <select name="user_id" id="user_id" name="user_id"></br>
        @php
                    $count = 1;
                @endphp
                @foreach($employee as $item)
                    @if(($count == 1) and (old('user_id') <> $item['user_id']))
                        <option value="{{ $item['user_id'] }}" selected>{{ $item['user_id'] }}</option>  
                    @elseif(old('emp_id') === $item['user_id'])
                        <option value="{{ $item['user_id'] }}" selected>{{ $item['user_id'] }}</option>     
                    @else
                        <option value="{{ $item['user_id'] }}">{{ $item['emp_id']}}</option>
                    @endif
                    @php
                       $count++;
                    @endphp
                @endforeach
        </select></br>
        <label for="user_id">Manager id:</label></br>
        <select name="user_id" id="user_id" name="user_id"></br>
        @php
                    $count = 1;
                @endphp
                @foreach($manager as $item)
                    @if(($count == 1) and (old('user_id') <> $item['user_id']))
                        <option value="{{ $item['user_id'] }}" selected>{{ $item['user_id'] }}</option>  
                    @elseif(old('user_id') === $item['user_id'])
                        <option value="{{ $item['user_id'] }}" selected>{{ $item['user_id'] }}</option>     
                    @else
                        <option value="{{ $item['user_id'] }}">{{ $item['user_id']}}</option>
                    @endif
                    @php
                       $count++;
                    @endphp
                @endforeach
        </select></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
  </div>
</div>
@stop