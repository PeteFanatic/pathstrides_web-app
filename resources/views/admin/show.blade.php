@extends('announcements.layout')
@section('content')
<div class="card">
  <div class="card-header">Employee Details Page</div>
  <div class="card-body">


  <a href="{{ url('/admin/') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
  
        <div class="card-body">
        <h5 class="card-title">Employee ID : {{ $employee-> user_id }}</h5>
        <p class="card-text">Employee First Name : {{ $employee->user_fname }}</p>
        <p class="card-text">Employee Middle Name  : {{ $employee->user_mname }}</p>
        <p class="card-text">Employee Last Name  : {{ $employee->user_lname }}</p>
        <p class="card-text">Department  : {{ $employee->user_department }}</p>
        
  </div>
      
    </hr>
  
  </div>
</div>