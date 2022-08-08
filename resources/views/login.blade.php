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
        <div class = "container">
            <h1>login</h1><br>
            
            @if(\Session::has('message'))
                <div class = "alert-info">
                    {{Session\Session::post('message')}}
                </div>

            <form action = "{{route('postlogin')}}" method = "POST">
                    <label for ="username">Username</label>
                    <input type = "text" id = "username" name = "username" required> 
                    <!-- di ka maka proceed ug input pass if wa ni nimo gi input and username -->
                    @if ($errors->hs('password'))
                        <span class="text-danger">{{$errors->first('username')}}</span>
                    @endif

                    <label for ="password">Password</label>
                    <input type = "text" id = "password" name = "password" required>
                    <!-- di ka maka proceed ug input pass if wa ni nimo gi input and passworde -->
                    @if
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif

                    <button type = "submit">Login</button>
            </form>
        </div>
    </main>