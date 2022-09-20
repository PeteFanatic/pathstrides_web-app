@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">tasks Page</div>
  <div class="card-body">
  <a href="{{ url('/task/') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>

    
      
      <form action="{{ url('task') }}" method="post">
        {!! csrf_field() !!}
        <label>Task ID:</label></br>
        <input type="text" name="task_id" id="task_id" class="form-control"></br>
        <label>Task Title:</label></br>
        <input type="text" name="task_title" id="task_title" class="form-control"></br>
        <label>Task Description:</label></br>
        <input type="text" name="task_desc" id="task_desc" class="form-control"></br>
        <label>Points:</label></br>
        <input type="text" name="points" id="points" class="form-control"></br>
        <label>Location:</label></br>
        <input type="text" name="location" id="location" class="form-control"></br>
        <label for="emp_id">Emp id:</label></br>
        <select name="emp_id" id="emp_id" name="emp_id"></br>
        @php
                    $count = 1;
                @endphp
                @foreach($employee as $item)
                    @if(($count == 1) and (old('emp_id') <> $item['emp_id']))
                        <option value="{{ $item['emp_id'] }}" selected>{{ $item['emp_id'] }}</option>  
                    @elseif(old('emp_id') === $item['emp_id'])
                        <option value="{{ $item['emp_id'] }}" selected>{{ $item['emp_id'] }}</option>     
                    @else
                        <option value="{{ $item['emp_id'] }}">{{ $item['emp_id']}}</option>
                    @endif
                    @php
                       $count++;
                    @endphp
                @endforeach
        </select></br>
        <label for="man_id">Manager id:</label></br>
        <select name="man_id" id="man_id" name="man_id"></br>
        @php
                    $count = 1;
                @endphp
                @foreach($manager as $item)
                    @if(($count == 1) and (old('man_id') <> $item['man_id']))
                        <option value="{{ $item['man_id'] }}" selected>{{ $item['man_id'] }}</option>  
                    @elseif(old('man_id') === $item['man_id'])
                        <option value="{{ $item['man_id'] }}" selected>{{ $item['man_id'] }}</option>     
                    @else
                        <option value="{{ $item['man_id'] }}">{{ $item['man_id']}}</option>
                    @endif
                    @php
                       $count++;
                    @endphp
                @endforeach
        </select></br>
        
        
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
  </div>
</div>
@stop