<!-- <DOCTYPE! html>
    <html>
        <head>
            <title>
                Login
            </title>
        </head>

        <body>
            <div class = "container">
                <form action = "" method = "GET">
                    <label for ="username">Username</label>
                    <input type = "text" id = "username" name = "username" required>
                    
                    <label for ="password">Password</label>
                    <input type = "text" id = "password" name = "password" required>

                    <button type = "submit">Login</button>
                </form>
            </div>
        </body>
    </html> -->

    @extends('layout')
    @section('content')
    <main class="login-form">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Login</h4>
                <hr>
                <form action="{{route('login-user')}}"method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>    
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text"class="form-control" placeholder="Enter Email"
                        name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password"class="form-control" placeholder="Enter Password"
                        name="password" value="{{old('password')}}">
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>
                    <br>
                    New User? Register <a href="registration">Here</a>
                </form>
            </div>

        </div>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
    crossorigin="anonymous"></script>
</html>