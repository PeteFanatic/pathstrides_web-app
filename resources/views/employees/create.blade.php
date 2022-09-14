@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee') }}" method="post">
        {!! csrf_field() !!}
        <label>Employee ID:</label></br>
        <input type="text" name="emp_id" id="emp_id" class="form-control"></br>
        <label>First Name:</label></br>
        <input type="text" name="emp_fname" id="emp_fname" class="form-control"></br>
        <label>Last Name:</label></br>
        <input type="text" name="emp_lname" id="emp_lname" class="form-control"></br>
        <label>Email:</label></br>
        <input type="text" name="emp_email" id="emp_email" class="form-control"></br>
        <label>Contanct Number:</label></br>
        <input type="text" name="emp_contanct_num" id="emp_contanct_num" class="form-control"></br>
        <label>Employee Username:</label></br>
        <input type="text" name="emp_username" id="emp_username" class="form-control"></br>
        <label>Employee Password:</label></br>
        <input type="text" name="emp_password" id="emp_contanct_num" class="form-control"></br>
        <label for="emp_coll">Employee Coll:</label></br>
        <select name="emp_coll" id="emp_coll" name="emp_coll"></br>
        <option value="1">1</option></br>
        </select></br>
       
        <label for="admin_id">Admin id:</label></br>
        <select name="admin_id" id="admin_id" name="admin_id"></br>
        <option value="1">1</option></br>
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
        <label for="dep_title">Department Id:</label></br>
        <select name="dep_title" id="dep_title" name="dep_title"></br>
        @php
                    $count = 1;
                @endphp
                @foreach($department as $item)
                    @if(($count == 1) and (old('dep_title') <> $item['dep_title']))
                        <option value="{{ $item['dep_title'] }}" selected>{{ $item['dep_title'] }}</option>  
                    @elseif(old('dep_id') === $item['dep_id'])
                        <option value="{{ $item['dep_title'] }}" selected>{{ $item['dep_title'] }}</option>     
                    @else
                        <option value="{{ $item['dep_title'] }}">{{ $item['dep_title']}}</option>
                    @endif
                    @php
                       $count++;
                    @endphp
                @endforeach
        </select></br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop