@extends('admin.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('admin/' .$employee->user_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Employee ID</label></br>
        <input type="text" name="user_id" id="user_id" value="{{$employee->user_id}}" id="user_id" />
        </br>
        <label>Employee First Name:</label></br>
        <input type="text" name="usermname" id="usermname" value="{{$employee->usermname}}" class="form-control"></br>
        <label>Employee Middle Name:</label></br>
        <input type="text" name="usermname" id="usermname" value="{{$employee->usermname}}" class="form-control"></br>
        <label>Employee Last Name:</label></br>
        <input type="text" name="userlname" id="userlname" value="{{$employee->userlname}}" class="form-control"></br>
        <label>Employee Email</label></br>
        <input type="text" name="useremail" id="useremail" value="{{$employee->useremail}}" class="form-control"></br>
        <label>Contanct Number</label></br>
        <input type="text" name="contanctnumber" id="contanctnumber" value="{{$employee->contanctnumber}}" class="form-control"></br>
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
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop