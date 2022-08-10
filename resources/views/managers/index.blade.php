@extends('managers.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>List of Managers</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/manager/create') }}" class="btn btn-success btn-sm" title="Add New manager">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Manager ID</th>
                                        <th>Manager Name</th>
                                        <th>Manager Email</th>
                                        <th>Contanct Number</th>
                                        <th>Admin Incharge</th>
                                        <th>Department </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($managers as $item)
                                    <tr>
                                        <td>{{ $item->man_id }}</td>
                                        <td>{{ $item->man_fname }} , {{ $item->man_lname }}</td>
                                        <td>{{ $item->man_email }}</td>
                                        <td>{{ $item->man_contanct_num}}</td>
                                        <td>{{$item->admin_id}}
                                        <td>{{$item->dep_id}}
                                        </td>
                                        <td>
                                            <a href="{{ url('/manager/' . $item->man_id) }}" title="View manager"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/manager/' . $item->man_id . '/edit') }}" title="Edit manager"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/manager' . '/' . $item->man_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete manager" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
@endsection