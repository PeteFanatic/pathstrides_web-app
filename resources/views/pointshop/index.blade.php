

 @extends('layouts.employeelayout')
@section('content')
<div class="row" id="employee-container">
    <div class="col" id="employee-container">
        <div class="card">
            <div class="card-header">
                <div class="row" id="card-header">
                    <div class="col">
                        <h2 class="titles">Point Shop</h2>
                    </div>
                </div>
                <div class="col">
                    <a href="{{ url('/pointshop/create') }}" class="add" title="Add New Contact">
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
                                <th>ID#</th>
                                <th>Name</th>
                                <th>Photo</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <img src="{{ asset($item->photo) }}" width= '50' height='50' class="img img-responsive" />
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

<!-- rawr -->