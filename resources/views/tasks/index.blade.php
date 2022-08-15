@extends('tasks.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>List of Tasks</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/task/create') }}" class="btn btn-success btn-sm" title="Add New task">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Task ID</th>
                                        <th>Task Title</th>
                                        <th>Points</th>
                                        <th>Location</th>
                                        <th>Employee Incharge</th>
                                        <th>Manager Incharge</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tasks as $item)
                                    <tr>
                                        <td>{{ $item->task_id }}</td>
                                        <td>{{ $item->task_title }} </td>
                                        <td>{{ $item->points }} </td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->emp_id }}</td>
                                        <td>{{ $item->man_id }}</td>
                            
                                        <td>
                                            <a href="{{ url('/task/' . $item->task_id) }}" title="View task"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/task/' . $item->task_id . '/edit') }}" title="Edit task"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/task' . '/' . $item->task_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete task" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
                </div>
            </div>
        </div>
    </div>
@endsection