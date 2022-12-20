@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">Task Details Page</div>
  <div class="card-body">


  <a href="{{ url('/task/') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
  
        <div class="card-body">
        <h5 class="card-title">Task ID : {{ $tasks-> task_id }}</h5>
        <p class="card-text">Task Title : {{ $tasks->task_title }}</p>
        <p class="card-text">Task Location : {{ $tasks->location }}</p>
        <p class="card-text">Task Description : {{ $tasks->task_desc }}</p>
        <p class="card-text">Employee Incharge : {{ $tasks->user_id }}</p>
        <p class="card-text">Employee Incharge : {{ $tasks->user_id }}</p>
        
  </div>
      
    </hr>
  
  </div>
  <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
</div>