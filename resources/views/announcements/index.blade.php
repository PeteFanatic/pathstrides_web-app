@extends('layouts.employeelayout')
@section('content')

<div class="row">
    <div class="col" id="employee-container">
        <div class="card">
            <div class="row" id="card-header">
                <div class="col">
                    <h2 class="titles">Announcements</h2>
                </div>
                <div class="col">
                    <a href="{{ url('/announcement/create') }}" class="add" title="Add New announcement">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                </div>
            </div>
            <div class="card-body">
                <br/>
                @include('announcements.announcement_table')
            </div>
        </div>
                    
    </div>
</div>

@endsection