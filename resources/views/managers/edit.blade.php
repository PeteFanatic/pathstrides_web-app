@extends('managers.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('manager/' .$managers->man_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Manager ID</label></br>
        <input type="text" name="man_id" id="man_id" value="{{$managers->man_id}}" id="man_id" />
        </br>
        <label>Manager First Name:</label></br>
        <input type="text" name="man_fname" id="man_fname" value="{{$managers->man_fname}}" class="form-control"></br>
        <label>Manager Last Name:</label></br>
        <input type="text" name="man_lname" id="man_lname" value="{{$managers->man_lname}}" class="form-control"></br>
        <label>Manager Email</label></br>
        <input type="text" name="man_email" id="man_email" value="{{$managers->man_email}}" class="form-control"></br>
        <label>Contanct Number</label></br>
        <input type="text" name="man_contanct_num" id="man_contanct_num" value="{{$managers->man_contanct_num}}" class="form-control"></br>
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
        </select></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop