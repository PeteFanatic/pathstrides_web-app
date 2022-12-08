<!-- 
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>List of Departments</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/department/create') }}" class="btn btn-success btn-sm" title="Add New department">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Department ID</th>
                                        <th>Department Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($departments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->dep_name }} </td>
                                        
                            
                                        <td>
                                           
                                            <a href="{{ url('/department/' . $item->dep_id . '/edit') }}" title="Edit department"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/department' . '/' . $item->dep_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete department" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
 -->

@extends('layouts.employeelayout')
@section('content')
<div class="row" id="employee-container">
    <div class="col" id="employee-container">
        <div class="card">
            <div class="card-header">
                <div class="row" id="card-header">
                    <div class="col">
                        <h2 class="titles">Departments</h2>
                    </div>
                </div>
                <div class="col">
                    <a href="{{ url('/department/create') }}" class="add" title="Add New department">
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
                                <th>Department ID</th>
                                <th>Department Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departments as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->dep_name }} </td>
                                
                            
                                    <td>
                                        
                                    <a href="{{ url('/department/' . $item->dep_id . '/edit') }}" title="Edit department" id="actbtn"><button class="btn btn-primary btn-sm"  id="actbtn"><i class="fa fa-pencil-square-o" aria-hidden="true" id="vieweditbtnicon"></i></button></a>
                                        <form method="POST" action="{{ url('/department' . '/' . $item->dep_id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-sm" id="actbtn" title="Delete department" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-minus-square" aria-hidden="true" id="vieweditbtnicon"></i></button>
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