@extends('managers.layout')
@section('content')
<div class="card">
  <div class="card-header">Managers Page</div>
  <div class="card-body">
  <a href="{{ url('/manager/') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
      <form action="{{ url('manager') }}" method="post">
        {!! csrf_field() !!}
        <label>Manager ID:</label></br>
        <input type="text" name="man_id" id="man_id" class="form-control" value="{{ old( 'man_id') }}"></br>
        @foreach($errors->get('man_id') as $errorMessage )
                    <span style='color:red'>{{ $errorMessage }}</span>
                @endforeach
                </br>
        <label>First Name:</label></br>
        <input type="text" name="man_fname" id="man_fname" class="form-control"  value="{{ old('man_fname') }}"></br>
        @foreach($errors->get('man_fname') as $errorMessage )
                    <span style='color:red'>{{ $errorMessage }}</span>
                @endforeach
                </br>
        <label>Last Name:</label></br>
        <input type="text" name="man_lname" id="man_lname" class="form-control"  value="{{ old('man_lname') }}"></br>
        @foreach($errors->get('man_lname') as $errorMessage )
                    <span style='color:red'>{{ $errorMessage }}</span>
                @endforeach
                </br>
        <label>Email:</label></br>
        <input type="text" name="man_email" id="man_email" class="form-control"  value="{{ old('man_email') }}"></br>
        @foreach($errors->get('man_email') as $errorMessage )
                    <span style='color:red'>{{ $errorMessage }}</span>
                @endforeach
                </br>
        <label>Contanct Number:</label></br>
        <input type="text" name="man_contanct_num" id="man_contanct_num" class="form-control"  value="{{ old('man_contanct_num') }}"></br>
        @foreach($errors->get('man_contanct_num') as $errorMessage )
                    <span style='color:red'>{{ $errorMessage }}</span>
                @endforeach
                </br>
        <label>Username:</label></br>
        <input type="text" name="man_username" id="man_username" class="form-control"  value="{{ old('man_username') }}"></br>
        @foreach($errors->get('man_username') as $errorMessage )
                    <span style='color:red'>{{ $errorMessage }}</span>
                @endforeach
                </br>
        <label>Password:</label></br>
        <input type="password" name="man_password" id="man_contanct_num" class="form-control"></br>
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
                @foreach($errors->get('dep_id') as $errorMessage )
                    <span style='color:red'>{{ $errorMessage }}</span>
                @endforeach
        </select></br>
       
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop