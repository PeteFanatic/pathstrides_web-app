<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
        crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Registration</h4>
                <hr>
                <form action="{{route('register-admin')}}" method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>    
                @endif
                @csrf
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text"class="form-control" placeholder="Enter Full Name"
                        name="admin_fname" value="{{old('admin_fname')}}">
                        <span class="text-danger">@error('admin_fname'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input type="text"class="form-control" placeholder="Enter Full Name"
                        name="admin_lname" value="{{old('admin_lname')}}">
                        <span class="text-danger">@error('admin_lname'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text"class="form-control" placeholder="Enter Email"
                        name="admin_email" value="{{old('admin_email')}}">
                        <span class="text-danger">@error('admin_email'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text"class="form-control" placeholder="Enter Full Name"
                        name="admin_username" value="{{old('admin_username')}}">
                        <span class="text-danger">@error('admin_username'){{$message}} @enderror</span>
                    </div>
                    
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password"class="form-control" placeholder="Enter Password"
                        name="admin_password" value="{{old('admin_password')}}">
                        <span class="text-danger">@error('admin_password'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
                    <br>
                    Account Exists? Login <a href="login">Here</a>
                </form>
            </div>

        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
    crossorigin="anonymous"></script>
</html>

