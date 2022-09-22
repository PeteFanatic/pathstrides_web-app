<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href>
  </head>
  <body>
  <body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html> -->

    <!-- @extends('layout')
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
</html> -->

<!-- @extends('layout')
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
                        <label for="">Username</label>
                        <input type="text"class="form-control" placeholder="Enter Username"
                        name="email" value="{{old('username')}}">
                        <span class="text-danger">@error('username'){{$message}} @enderror</span>
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
</html> -->


<!-- <DOCTYPE! html>
    <html>
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="resources\css\loginstyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
        <main class="login-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                        <h1>Welcome to Pathstrides</h1>
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
</html>
<style>

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Inter', sans-serif;
    }

    body{
        background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
        margin: 0;
        background-size: cover;
    }

    h1{
        font-weight: strong;
    }

    label{
        color: Black;
    }

    .container{
        align-items: center;
        background-color:  white;
        height: 10em;
        width: 40em;
        /* background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'); */
        /* background-size: cover; */
    }

    input.form-control{
        width: 20em;
    }

    .btn-primary{
        background-color: #FF5733;
        border: none;
    }

    .btn-primary{
        background-color: #FF5733;
        border: none;
    }

    

</style> -->

<!-- <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Pathstrides.com</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
  
            <div class="container-fluid" >
                <div class="container-fluid" id="formContainer">
                    <h1>Welcome to Pathstrides</h1>
                    <img src="{{ URL::to('assets\manager-landing-page.png') }}">
                    <form action="{{route('login-user')}}"method="post">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>    
                        @endif
                        @csrf
                        <div class="form-group">
                            <input type="text"class="form-control" placeholder="Email"
                            name="email" value="{{old('email')}}">
                            <span class="text-danger">@error('email'){{$message}} @enderror</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password"class="form-control" placeholder="Password"
                            name="password" value="{{old('password')}}">
                            <span class="text-danger">@error('password'){{$message}} @enderror</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary" type="submit">Login</button>
                            <br>
                            <a class="forgotPassword" href="">Forgot Password</a>
                        </div>
                        <br>
                        <p>
                            New to Pathstrides? <a href="registration" class="registration">Click here to register</a>
                        </p>
                    </form>
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

    body{
        background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
        background-size: cover;
        height: 100vh;
        width: 100vw;
    }

    h1{
        padding-top: 2em;
        font-weight: bold;
        font-size: 40px;
        text-align: center;
    }

    p{
        font-size: 14px;
        text-align: center;
    }

    #formContainer{
        margin: 0;
        position: absolute;
        height: 100vh;
        width: 40vw;
        background-color: white;
        left: -10px;
        
    }

    .form-control{
        width: 60%;
        margin: auto;
    }

    .form-control:focus{
        border-color: black;
    }

    .btn-primary, .btn-primary:hover{
        background-color: #FF9A00;
        border: none;
        color: white;
        font-weight: 600;
        width: 60%;
        margin-left: auto;
    }

    a.forgotPassword{
        font-size: 12px;
        color: #777777;
        font-weight: 600;
        text-decoration: none;
        align-content: right;
    }

    a.registration{
        color: #FF9A00;
        font-weight: 600;
        text-decoration: none;
    }
    
</style> -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pathstrides</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href>
  </head>
  <body>
  <body>
    <main class="login-form">
    <div class="container">
        <div class="row">
            <div class="formContainer">
                <h1>Welcome to PathStrides</h1>
                <img src="{{ URL('images/manager-landing-page.png') }}">
                <form action="{{route('login-manager')}}"method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>    
                @endif
                    @csrf
                    <div class="form-group">
                        <!-- <label for="email">Email Address</label> -->
                        <input type="text"class="form-control" placeholder="Enter Email"
                        name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <!-- <label for="password">Password</label> -->
                        <input type="password"class="form-control" placeholder="Enter Password"
                        name="password" value="{{old('password')}}">
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Login</button>
                        <br>
                        <p class="sign-up">
                            New to PathStrides? <a href="registration" class="registration">Sign Up</a>
                        </p>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </main>
    
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

    body{
        background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
        background-size: cover;
        height: 100vh;
        width: 100vw;
    }

    h1{
        padding-top: 2em;
        padding-bottom: 1em;
        font-weight: bold;
        font-size: 40px;
        text-align: center;
    }

    img{
        display: block;
        align-items: center;
        padding-bottom: 2em;
        margin: auto;
        width: 60%;
        
    }

    p{
        font-size: 14px;
        text-align: center;
    }

    .formContainer{
        padding: 0;
        margin: 0;
        position: absolute;
        height: 100vh;
        width: 40vw;
        background-color: white;
        left: -10px;
        
    }

    .form-group{
        padding-top: 0;
        width: 60%;
        margin: auto;
    }

    .form-control{
        border-color: black;
    }

    .form-control:focus{
        border-color: #FF9A00;
    }

    .btn-primary, .btn-primary:hover{
        background-color: #FF9A00;
        border: none;
        color: white;
        font-weight: 600;
        width: 100%;
    }

    .sign-up{
        margin: auto;
        margin-top: 1em;
    }

    .registration{
        color: #FF9A00;
        font-weight: 600;
        text-decoration: none;
    }


    
    hr{
        width: 60%;
        margin: auto;
        margin-top: 2em;
        margin-bottom: 0.5em;
    }