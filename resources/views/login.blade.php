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
        <form action = "{{route('postlogin')}}" method = "POST">
                    <label for ="username">Username</label>
                    <input type = "text" id = "username" name = "username" required> 
                    <!-- di ka maka proceed ug input pass if wa ni nimo gi input and username -->
                    @if ($errors->hs('password'))
                    <span class="text-danger">{{$errors->first('username')}}</span>
                    
                    <label for ="password">Password</label>
                    <input type = "text" id = "password" name = "password" required>
                    <!-- di ka maka proceed ug input pass if wa ni nimo gi input and passworde -->
                    <span class="text-danger">{{$errors->first('username')}}</span>
                    
                    <button type = "submit">Login</button>
        </div>
    </main>