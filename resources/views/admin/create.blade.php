@extends('admin.layout')
@section('content')
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
      
      <form action="{{ url('admin') }}" method="post">
        {!! csrf_field() !!}
        <label>Employee ID:</label></br>
        <input type="text" name="user_id" id="user_id" class="form-control"></br>
        <label>First Name:</label></br>
        <input type="text" name="userfname" id="userfname" class="form-control"></br>
        <label>Middle Name:</label></br>
        <input type="text" name="usermname" id="usermname" class="form-control"></br>
        <label>Last Name:</label></br>
        <input type="text" name="userlname" id="userlname" class="form-control"></br>
        <label>Email:</label></br>
        <input type="text" name="useremail" id="useremail" class="form-control"></br>
        <label>Contanct Number:</label></br>
        <input type="text" name="contanctnumber" id="contanctnumber" class="form-control"></br>
        <label>Employee Username:</label></br>
        <input type="text" name="username" id="username" class="form-control"></br>
        <label>Employee Password:</label></br>
        <input type="text" name="password" id="password" class="form-control"></br>
       
       
        <label for="department">Department :</label></br>
        <select name="department" id="department" name="department"></br>
        @php
                    $count = 1;
                @endphp
                @foreach($department as $item)
                    @if(($count == 1) and (old('department') <> $item['dep_name']))
                        <option value="{{ $item['dep_name'] }}" selected>{{ $item['dep_name'] }}</option>  
                    @elseif(old('dep_id') === $item['dep_id'])
                        <option value="{{ $item['dep_name'] }}" selected>{{ $item['dep_name'] }}</option>     
                    @else
                        <option value="{{ $item['dep_name'] }}">{{ $item['dep_name']}}</option>
                    @endif
                    @php
                       $count++;
                    @endphp
                @endforeach
        </select></br>
        </select></br>
        
        <label for="role">Role :</label></br>
        <select name="role" id="role" name="role"></br>
        <option value="1">Manager</option></br>
        <option value="2">Employee</option></br>
        </select></br>

        <label for="status">Status :</label></br>
        <select name="status" id="status" name="status"></br>
        <option value="1">Present</option></br>
        <option value="2">Terminated</option></br>
        </select></br>
        
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop