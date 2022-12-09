
@extends('layouts.employeelayout')
@section('content')
<div class="row" id="employee-container">
            <div class="col" id="employee-container">
                <div class="card">
                    <div class="card-header">


                        <div class="row" id="card-header">
                            <div class="col">
                                <h2 class="titles">Employees</h2>
                            </div>
                        </div>

                        <div class="col">
                            <a href="{{ url('/admin/create') }}" class="add" title="Add New Employee">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                        </div>
                    </div>
                    <div class="card-body">

                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact No.</th>
                                        <th>Department </th>
                                        <th>Role </th>
                                        <th>Status </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employee as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user_fname }} , {{ $item->user_lname }}</td>
                                        <td>{{ $item->user_email }}</td>
                                        <td>{{ $item->user_contanctnumber }}</td>
                                        <td>{{ $item->user_department }}     
                                        <td>{{ $item->role }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#employee-view-modal" title="View employee"><button class="btn btn-info btn-sm" id="actbtn"><i class="fa fa-eye" aria-hidden="true" id="vieweditbtnicon" data-toggle="modal" data-target="#viewmodal"></i></button></a>
                                            <a href="{{ url('/admin/' . $item->user_id . '/edit') }}" title="Edit employee" id="actbtn"><button class="btn btn-primary btn-sm"  id="actbtn"><i class="fa fa-pencil-square-o" aria-hidden="true" id="vieweditbtnicon"></i></button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

