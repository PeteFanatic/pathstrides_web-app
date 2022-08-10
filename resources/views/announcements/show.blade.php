@extends('announcements.layout')
@section('content')
<div class="card">
  <div class="card-header">Announcement Details Page</div>
  <div class="card-body">


  <a href="{{ url('/announcement/') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
  
        <div class="card-body">
        <h5 class="card-title">Announcement ID : {{ $announcements-> ann_id }}</h5>
        <p class="card-text">Aannouncment Title : {{ $announcements->ann_title }}</p>
        <p class="card-text">Aannouncment Location : {{ $announcements->location }}</p>
        <p class="card-text">Aannouncment Description : {{ $announcements->ann_desc }}</p>
        <p class="card-text">Manager Incharge : {{ $announcements->man_id }}</p>
        
  </div>
      
    </hr>
  
  </div>
</div>