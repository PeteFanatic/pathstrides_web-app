<!-- 
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>List of Employee</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/create') }}" class="btn btn-success btn-sm" title="Add New Employee">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Employee Email</th>
                                        <th>Contanct Number</th>
                                        <th>Department </th>
                                        <th>Role </th>
                                        <th>Status </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employee as $item)
                                    <tr>
                                        <td>{{ $item->user_id }}</td>
                                        <td>{{ $item->user_fname }} , {{ $item->user_lname }}</td>
                                        <td>{{ $item->user_email }}</td>
                                        <td>{{ $item->user_contanctnumber }}</td>
                                        <td>{{ $item->user_department }}     
                                        <td>{{ $item->role }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href="{{ url('/admin/' . $item->user_id) }}" title="View employee"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/' . $item->user_id . '/edit') }}" title="Edit employee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/employee' . '/' . $item->user_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
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
    </div>
 -->

@extends('layouts.employeelayout')
@section('content')
<div class="row" id="employee-container">
            <div class="col" id="employee-container">
                <div class="card">
                    <div class="card-header">


                        <div class="row" id="card-header">
                            <div class="col">
                                <h2 class="title">Employees</h2>
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
                                        <td>{{ $item->user_id }}</td>
                                        <td>{{ $item->user_fname }} , {{ $item->user_lname }}</td>
                                        <td>{{ $item->user_email }}</td>
                                        <td>{{ $item->user_contanctnumber }}</td>
                                        <td>{{ $item->user_department }}     
                                        <td>{{ $item->role }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href="{{ url('/admin/' . $item->user_id) }}" title="View employee"><button class="btn btn-info btn-sm" id="viewbtn"><i class="fa fa-eye" aria-hidden="true" id="vieweditbtnicon"></i></button></a>
                                            <a href="{{ url('/admin/' . $item->user_id . '/edit') }}" title="Edit employee" id="editbtn"><button class="btn btn-primary btn-sm"  id="editbtn"><i class="fa fa-pencil-square-o" aria-hidden="true" id="vieweditbtnicon"></i></button></a>
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

