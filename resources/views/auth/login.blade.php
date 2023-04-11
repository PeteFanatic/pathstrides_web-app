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

    <!-- @extends('layout')
@section('content') -->
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
                <form action="{{route('login-user')}}"method="post">
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
                        <p class="map">
                           Checkout our Map? <a href="map" class="map">Map</a>
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

    .sign-up{
        margin: auto;
        margin-top: 1em;
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

    a.registration{
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