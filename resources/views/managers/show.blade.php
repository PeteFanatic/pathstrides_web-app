@extends('layouts.layout')
@section('content')
<div class="card">
  <div class="card-header">Manager Details Page</div>
  <div class="card-body">

  <a href="{{ url('/manager/') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
  
        <div class="card-body">
        <h5 class="card-title">Manager First Name : {{ $managers-> man_fname }}</h5>
        <h5 class="card-title">Manager Last Name : {{ $managers-> man_lname }}</h5>
        <p class="card-text">Email : {{ $managers->man_email }}</p>
        <p class="card-text">Contact Number : {{ $managers->man_contanct_num }}</p>
        <p class="card-text">Admin Incharge : {{ $managers->admin_id }}</p>
        <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
  </div>
      
    </hr>
  
  </div>
</div>