@extends('taskreport.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>List of Task Report</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Report Text </th>
                                        <th>Report Image </th>
                                        <th>Coordinates</th>
                                        <th>Deadline</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($taskreport as $item)
                                    <tr>
                                        <td>{{ $item->user_id }}</td>
                                        <td>{{ $item->report_text }} </td>
                                        <td>{{ $item->report_image }} </td>
                                        <td>{{ $item->task_lat }} , {{ $item->task_long }} </td>
                                        <td>{{ $item->deadline }}</td>
                            
                                        <td>
                                            <a href="{{ url('/taskreport/' . $item->user_id) }}" title="View taskreport"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/taskreport/' . $item->user_id . '/edit') }}" title="Edit taskreport"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/taskreport' . '/' . $item->user_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete taskreport" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection