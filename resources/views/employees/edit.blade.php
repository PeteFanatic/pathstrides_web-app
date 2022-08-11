@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employees->emp_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Employee ID</label></br>
        <input type="text" name="emp_id" id="emp_id" value="{{$employees->emp_id}}" id="emp_id" /></br>
        <label>Employee First Name:</label></br>
        <input type="text" name="emp_fname" id="emp_fname" value="{{$employees->emp_fname}}" class="form-control"></br>
        <label>Employee Last Name:</label></br>
        <input type="text" name="emp_lname" id="emp_lname" value="{{$employees->emp_lname}}" class="form-control"></br>
        <label>Employee Email</label></br>
        <input type="text" name="emp_email" id="emp_email" value="{{$employees->emp_email}}" class="form-control"></br>
        <label>Contanct Number</label></br>
        <input type="text" name="emp_contanct_num" id="emp_contanct_num" value="{{$employees->emp_contanct_num}}" class="form-control"></br>
        <label for="admin_id">Admin id:</label></br>
        <select name="admin_id" id="admin_id" name="admin_id"></br>
        <option value="1">1</option></br>
        </select></br>
        <label for="man_id">Manager id:</label></br>
        <select name="man_id" id="man_id" name="man_id"></br>
        @php
                $count = 0;
                @endphp
                @foreach($manager as $item)
                    @if(($count == 0) and (old('man_id') <> $item['man_id']))
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
        <label for="dep_id">Department Id:</label></br>
        <select name="dep_id" id="dep_id" name="dep_id"></br>
        @php
                    $count = 1;
                @endphp
                @foreach($department as $item)
                    @if(($count == 1) and (old('dep_id') <> $item['dep_id']))
                        <option value="{{ $item['dep_id'] }}" selected>{{ $item['dep_id'] }}</option>  
                    @elseif(old('dep_id') === $item['dep_id'])
                        <option value="{{ $item['dep_id'] }}" selected>{{ $item['dep_id'] }}</option>     
                    @else
                        <option value="{{ $item['dep_id'] }}">{{ $item['dep_id']}}</option>
                    @endif
                    @php
                       $count++;
                    @endphp
                @endforeach
        </select></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
        
    </form>
  
  </div>
</div>
@stop