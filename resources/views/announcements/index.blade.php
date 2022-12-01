@extends('layouts.employeelayout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>List of Announcements</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/announcement/create') }}" class="btn btn-success btn-sm" title="Add New announcement">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        @include('announcements.announcement_table')
                            <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection