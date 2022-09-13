<!-- @extends('employees.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>List of Employees</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/employee/create') }}" class="btn btn-success btn-sm" title="Add New employee">
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
                                        <th>Manager Incharge</th>
                                        <th>Department</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $item)
                                    <tr>
                                        <td>{{ $item->emp_id }}</td>
                                        <td>{{ $item->emp_fname }} , {{ $item->emp_lname }}</td>
                                        <td>{{ $item->emp_email }}</td>
                                        <td>{{ $item->emp_contanct_num }}</td>
                                        <td>{{ $item->man_id }}</td>
                                        <td>{{$item->dep_id}}
                                        <td>
                                            <a href="{{ url('/employee/' . $item->emp_id) }}" title="View Employee"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/employee/' . $item->emp_id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/employee' . '/' . $item->emp_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
@endsection -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pathstrides</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  </head>
  <body>
     <div class="container-fluid" id="body">

        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm navbar-light" id="nav-top">

                <a class="navbar-brand" href="#"><img src="{{ URL('images/pathstrides-logo-FINAL.png') }}" class="logo">
                
                <a class="navbar-brand" href="#" id="PathStrides-beside-logo" style="color: #FF7843">Pathstrides</a>
                <ul class="navbar-nav" id="top-side-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/dashboard')}}">
                            <img src="{{ URL('images\icons\icons8-home-page-90 (1).png') }}" class="top-side-nav-icon" alt="home">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/logout')}}">
                            <img src="{{ URL('images\icons\icons8-logout-90.png') }}" class="top-side-nav-icon" alt="logout">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


        <div class="container" id="body-layout">
            <div class="row">
                <div class="col-sm-3">
                    <div class="container-fluid">
                            <nav class="navbar" id="nav-side">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="a-nav-side">
                                            <img src="{{ URL('images\icons\icons8-commercial-90.png') }}"
                                                class="icon">
                                            Announcement
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="a-nav-side">
                                            <img src="{{ URL('images\icons\icons8-playlist-90.png') }}"
                                                class="icon">
                                            Tasks
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="a-nav-side">
                                            <img src="{{ URL('images\icons\icons8-member-90 (2).png') }}"
                                                class="icon">
                                            Employees
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="a-nav-side">
                                            <img src="{{ URL('images\icons\icons8-male-user-96.png') }}"
                                                class="icon">
                                            User Profile
                                        </a>
                                    </li>
                                </ul>
                            </nav>

            
                            <nav class="navbar" id="nav-side">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        
                                        <a class="nav-link disabled" href="#" id="top-employees-title">
                                            <img src="{{ URL('images\icons\icons8-prize-90 (1).png') }}"
                                                class="icon">
                                            Top Employees
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <p></p><a class="nav-link disabled" href="#" id="top-employees">#1 Burger Oclarence</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" id="top-employees">#2 Ricardo Milos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" id="top-employees">#3 Adonis Gibar</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="container-fluid" id="employee-container">
                            <h3>Employees</h3>
                            <form class="d-flex" id="search-form">
                                <input class="form-control me-2" type="text" placeholder="Search" id="search-employee">
                                <button class="btn btn-primary" type="button" id="search-employee-btn">
                                    <span class="fas fa-search" id="bootstrap-icons"></span>
                                </button>
                            </form>

                            <div class="table-responsive">
                            <table class="table" id="emp-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Manager</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $item)
                                    <tr>
                                        <td>{{ $item->emp_id }}</td>
                                        <td>{{ $item->emp_fname }} , {{ $item->emp_lname }}</td>
                                        <td>{{ $item->emp_email }}</td>
                                        <td>{{ $item->emp_contanct_num }}</td>
                                        <td>{{ $item->man_id }}</td>
                                        <td>{{$item->dep_id}}</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="{{ url('/employee/' . $item->emp_id) }}" title="View Employee"><button class="btn btn-info btn-sm" id="action-btn"><i class="fa fa-eye" aria-hidden="true"></i></button></a> <!--view-->
                                            <a href="{{ url('/employee/' . $item->emp_id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm" id="action-btn"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button></a> <!--edit-->
                                            <form method="POST" action="{{ url('/employee' . '/' . $item->emp_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" id="action-btn" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i></button> <!--delete-->
                                            </form>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>{{ $item->emp_id }}</td>
                                        <td>{{ $item->emp_fname }} , {{ $item->emp_lname }}</td>
                                        <td>{{ $item->emp_email }}</td>
                                        <td>{{ $item->emp_contanct_num }}</td>
                                        <td>{{ $item->man_id }}</td>
                                        <td>{{$item->dep_id}}</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="{{ url('/employee/' . $item->emp_id) }}" title="View Employee"><button class="btn btn-info btn-sm" id="action-btn"><i class="fa fa-eye" aria-hidden="true"></i></button></a> <!--view-->
                                            <a href="{{ url('/employee/' . $item->emp_id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm" id="action-btn"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button></a> <!--edit-->
                                            <form method="POST" action="{{ url('/employee' . '/' . $item->emp_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" id="action-btn" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i></button> <!--delete-->
                                            </form>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>{{ $item->emp_id }}</td>
                                        <td>{{ $item->emp_fname }} , {{ $item->emp_lname }}</td>
                                        <td>{{ $item->emp_email }}</td>
                                        <td>{{ $item->emp_contanct_num }}</td>
                                        <td>{{ $item->man_id }}</td>
                                        <td>{{$item->dep_id}}</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="{{ url('/employee/' . $item->emp_id) }}" title="View Employee"><button class="btn btn-info btn-sm" id="action-btn"><i class="fa fa-eye" aria-hidden="true"></i></button></a> <!--view-->
                                            <a href="{{ url('/employee/' . $item->emp_id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm" id="action-btn"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button></a> <!--edit-->
                                            <form method="POST" action="{{ url('/employee' . '/' . $item->emp_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" id="action-btn" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i></button> <!--delete-->
                                            </form>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>{{ $item->emp_id }}</td>
                                        <td>{{ $item->emp_fname }} , {{ $item->emp_lname }}</td>
                                        <td>{{ $item->emp_email }}</td>
                                        <td>{{ $item->emp_contanct_num }}</td>
                                        <td>{{ $item->man_id }}</td>
                                        <td>{{$item->dep_id}}</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="{{ url('/employee/' . $item->emp_id) }}" title="View Employee"><button class="btn btn-info btn-sm" id="action-btn"><i class="fa fa-eye" aria-hidden="true"></i></button></a> <!--view-->
                                            <a href="{{ url('/employee/' . $item->emp_id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm" id="action-btn"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button></a> <!--edit-->
                                            <form method="POST" action="{{ url('/employee' . '/' . $item->emp_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" id="action-btn" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i></button> <!--delete-->
                                            </form>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>{{ $item->emp_id }}</td>
                                        <td>{{ $item->emp_fname }} , {{ $item->emp_lname }}</td>
                                        <td>{{ $item->emp_email }}</td>
                                        <td>{{ $item->emp_contanct_num }}</td>
                                        <td>{{ $item->man_id }}</td>
                                        <td>{{$item->dep_id}}</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="{{ url('/employee/' . $item->emp_id) }}" title="View Employee"><button class="btn btn-info btn-sm" id="action-btn"><i class="fa fa-eye" aria-hidden="true"></i></button></a> <!--view-->
                                            <a href="{{ url('/employee/' . $item->emp_id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm" id="action-btn"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button></a> <!--edit-->
                                            <form method="POST" action="{{ url('/employee' . '/' . $item->emp_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" id="action-btn" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i></button> <!--delete-->
                                            </form>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>{{ $item->emp_id }}</td>
                                        <td>{{ $item->emp_fname }} , {{ $item->emp_lname }}</td>
                                        <td>{{ $item->emp_email }}</td>
                                        <td>{{ $item->emp_contanct_num }}</td>
                                        <td>{{ $item->man_id }}</td>
                                        <td>{{$item->dep_id}}</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="{{ url('/employee/' . $item->emp_id) }}" title="View Employee"><button class="btn btn-info btn-sm" id="action-btn"><i class="fa fa-eye" aria-hidden="true"></i></button></a> <!--view-->
                                            <a href="{{ url('/employee/' . $item->emp_id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm" id="action-btn"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button></a> <!--edit-->
                                            <form method="POST" action="{{ url('/employee' . '/' . $item->emp_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" id="action-btn" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i></button> <!--delete-->
                                            </form>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>{{ $item->emp_id }}</td>
                                        <td>{{ $item->emp_fname }} , {{ $item->emp_lname }}</td>
                                        <td>{{ $item->emp_email }}</td>
                                        <td>{{ $item->emp_contanct_num }}</td>
                                        <td>{{ $item->man_id }}</td>
                                        <td>{{$item->dep_id}}</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="{{ url('/employee/' . $item->emp_id) }}" title="View Employee"><button class="btn btn-info btn-sm" id="action-btn"><i class="fa fa-eye" aria-hidden="true"></i></button></a> <!--view-->
                                            <a href="{{ url('/employee/' . $item->emp_id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm" id="action-btn"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button></a> <!--edit-->
                                            <form method="POST" action="{{ url('/employee' . '/' . $item->emp_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" id="action-btn" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i></button> <!--delete-->
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                            <div class="container mt-3">                  
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">></a></li>
                                </ul>
                            </div>
                        </div>
            </div>
        </div>
    </div>
  </body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Inter', sans-serif;
    }

    html {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        -webkit-box-sizing: inherit;
        -moz-box-sizing: inherit;
        box-sizing: inherit;
    }

    #bootstrap-icons{
        color: white;
    }

    body{
        background-color: #FFFFFF;
    }

    #body{
        height: 100%;
        width: 100%;
        padding: 0;
        position: absolute;
    }

    #body-layout{
        position: absolute;
    }

    .icon{
        height: 20px;
        width: auto;
        margin-right: 1em;
        margin-left: 1.5em;
    }

    #nav-top{
        height: 50px;
        width: 100%;
        margin: 0;
        padding:0;
        position: sticky;
        box-shadow: 0px 2px 5px #FBFBFB;
    }

    .navbar-brand{
        font-weight: 600;
        float: left;
        color: #FF7843;
    }

    .logo{
        width: auto;  
        height: 60px;
        color: #FF7843;
    }

    #top-side-nav{
        position: absolute;
        right: 2em;
    }

    .top-side-nav-icon{
        height: 30px;
        width: auto;
        margin-top: auto;
        margin-bottom: auto;
    }

    .navbar{
        background-color: white;
    }

    #header-container{
        background-image: linear-gradient(to right, #FF9A00, #FFBC57);
        height: 190px;
        width: 100%;
        margin-top: 0;
    }

    #header-text{
        margin-top: 1.2em;
        margin-left: 1em;
        color: white;
    }

    .profile-pic{
        height: 150px;
        width: auto;
        border-radius: 50%;
        display: inline;
        margin-top: 1.2em; 
        margin-left: 1em;
    }

    .user-info{
        display: inline;
    }

    .name, .department{
        font-weight: bold;
    }

    #nav-side{
        background-color: #FBFBFB;
        width: 15em;
        border-radius: 10px;
        margin-top: 3em;
        display: block;
        clear: right;
        position: ;
    }

    #a-nav-side{
        text-decoration: none;
        font-weight: 600;
        font-size: 16px;
        color: black;
    }

    #top-employees-title{
        color: black;
        font-weight: bold;
    }

    #top-employees{
        color: black;
    }

    #a-nav-side:hover, #a-nav-side:focus{
        color: #FF7843;
    }

    #body-layout{
        margin: auto;
    }


    #employee-container{
        display: inline-block;
        width: 77vw;
        padding: 2em;
        background-color: #FBFBFB;
        border-radius: 10px;
        position: relative;
        margin-top: 3em;

    }

    h3{
        font-size: 15px;
        font-weight: bold;
        color: #5F6368;
    }

    #search-form{
        padding-bottom: 10px;
    }

    #search-employee{
        height: 2.3em;
        font-size: 12px
    }

    #search-employee-btn{
        height: 2.3em;
        font-size: 12px;
        background-color: #FF7843;
        border: 0;
    }

    th{
        font-size: 12px;
        padding-bottom: 5px;
    }

    tr{
        font-size: 12px;
    }

    #action-btn{
        height: 2.3em;
        font-size: 12px;
        background-color: #FF7843;
        border: 0;
        color: white;
    }

    .pagination{
        float: right;
    }

    .page-link{
        color: #5F6368;
        background-color: #FBFBFB;
        border: none;
    }

    .page-link:hover{
        color: #FF7843;
        font-weight: bold;
    }
</style>