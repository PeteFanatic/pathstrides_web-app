@extends('announcements.layout')
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
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Announcement ID</th>
                                        <th>Announcement Title</th>
                                        <th>Location</th>
                                        <th>Manager Incharge</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($announcements as $item)
                                    <tr>
                                        <td>{{ $item->ann_id }}</td>
                                        <td>{{ $item->ann_title }} </td>
                                        <td>{{ $item->location }} </td>
                                        <td>{{ $item->man_id }}</td>
                            
                                        <td>
                                            <a href="{{ url('/announcement/' . $item->ann_id) }}" title="View announcement"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/announcement/' . $item->ann_id . '/edit') }}" title="Edit announcement"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/announcement' . '/' . $item->ann_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete announcement" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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