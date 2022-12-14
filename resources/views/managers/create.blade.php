@extends('managers.layout')
@section('content')
<div class="card">
  <div class="card-header">Managers Page</div>
  <div class="card-body">
      
      <form action="{{ url('manager') }}" method="post">
        {!! csrf_field() !!}
        <label>Manager ID:</label></br>
        <input type="text" name="man_id" id="man_id" class="form-control"></br>
        <label>First Name:</label></br>
        <input type="text" name="man_fname" id="man_fname" class="form-control"></br>
        <label>Last Name:</label></br>
        <input type="text" name="man_lname" id="man_lname" class="form-control"></br>
        <label>Email:</label></br>
        <input type="text" name="man_email" id="man_email" class="form-control"></br>
        <label>Contanct Number:</label></br>
        <input type="text" name="man_contanct_num" id="man_contanct_num" class="form-control"></br>
        <label>Username:</label></br>
        <input type="text" name="man_username" id="man_username" class="form-control"></br>
        <label>Password:</label></br>
        <input type="text" name="man_password" id="man_contanct_num" class="form-control"></br>
        <label for="admin_id">Admin id:</label></br>
        <select name="admin_id" id="admin_id" name="admin_id"></br>
        <option value="1">1</option></br>
        </select></br>
        <label for="man_coll">Manager Coll:</label></br>
        <select name="man_coll" id="man_coll" name="man_coll"></br>
        <option value="1">1</option></br>
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
       
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop