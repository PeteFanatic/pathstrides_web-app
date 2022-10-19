@extends('pointshop.layout')
@section('content')
<div class="container"><br/><br/>
    <div class="row">
        <div class="col-lg-10">
            <h2>Pathsrides Point Shop</h2>
        </div>
        <div class="col-lg-2">
            <a href="{{ url('/shop/create') }}" class="btn btn-success" title="Add New Contact">
                Add New Item
            </a>
        </div>
    </div>
    <table class="table table-bordered table-striped" id="shopsTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Telephone</th> 
                <th>Photo</th> 
            </tr>    
        </thead>
        <tbody>
            @foreach($shops as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->mobile }}</td>
                    <td>
                        <img src="{{ asset($item->photo) }}" width= '60' height='60' class="img img-responsive" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection