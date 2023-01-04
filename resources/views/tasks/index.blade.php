
@extends('layouts.employeelayout')
@section('content')
<div class="row" id="employee-container">
            <div class="col" id="employee-container">
                <div class="card">
                    <div class="card-header">
                        <div class="row" id="card-header">
                            <div class="col">
                                <h2 class="titles">Tasks</h2>
                            </div>
                        </div>

                        <div class="col">
                            <a href="{{ url('/task/create') }}" class="add" title="Add New task">
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
                                        <th>Task ID</th>
                                        <th>Task Title</th>
                                        <th>Points</th>
                                        <th>Location</th>
                                        <th>Employee Incharge</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tasks as $item)
                                    <tr>
                                        <td>{{ $item->task_id }}</td>
                                        <td>{{ $item->task_title }} </td>
                                        <td>{{ $item->points }} </td>
                                        <td>{{ $item->lat }}, {{ $item->lng }}</td>
                                        <td>{{ $item->user_id }}</td>
                            
                                        <td>
                                            <a href="{{ url('/task/' . $item->task_id) }}" title="View task"><button class="btn btn-info btn-sm" id="actbtn"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/task/' . $item->task_id . '/edit') }}" title="Edit task"><button class="btn btn-primary btn-sm" id="actbtn"><i class="fa fa-pencil-square-o" aria-hidden="true" id="vieweditbtnicon"></i></button></a>
                                            <form method="POST" action="{{ url('/task' . '/' . $item->task_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-sm" id="actbtn" title="Delete task" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-minus-square" aria-hidden="true" id="vieweditbtnicon"></i></button>
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

@endsection

