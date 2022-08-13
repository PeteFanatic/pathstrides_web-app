<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pathstrides</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-light" id="nav-top">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#"><img src="{{ URL('images/pathstrides-logo-FINAL.png') }}" class="logo"> Pathstrides</a>
  
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="container-fluid" id="header">
                <div class="cover-photo">
                    <img src="{{ URL('https://i.pinimg.com/564x/86/8f/f2/868ff26099df298eb554a2bf366731f0.jpg') }}"
                    class="profile-pic">
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <nav class="navbar" id="nav-side">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="a-nav-side">Announcement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="a-nav-side">Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="a-nav-side">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="a-nav-side">Profile</a>
                    </li>
                </ul>
            </nav>

            <!-- TOP EMPLOYEES VVVV -->
            <nav class="navbar" id="nav-side">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="a-nav-side">Top Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="a-nav-side">#1 Burger Oclarence</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="a-nav-side">#2 Ricardo Milos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="a-nav-side">#3 Adonis Gibar</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="container-fluid" id="announcements-container">
            <div id="accordion">

                <div class="card" id="announcements">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                            Collapsible Group Item #1
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum..
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                            Collapsible Group Item #2
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum..
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                            Collapsible Group Item #3
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum..
                        </div>
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

    body{
        height: 100vh;
        width: 100vw;
    }

    #nav-top{
        height: 50px;
        width: 100%;
        margin: 0;
        position: sticky;
    }

    .navbar-brand{
        font-weight: 600;
        float: left;
    }

    .logo{
        width: auto;  
        height: 60px;
    }

    .navbar-nav{
        position: right;
        right: 10px;

    }

    .navbar{
        background-color: white;
    }

    #header{
        background-image: linear-gradient(to right, #FF9A00, #FFBC57);
        height: 190px;
        width: 100%;
        margin-top: 0;
    }

    .profile-pic{
        clear: left;
        height: 150px;
        width: auto;
        border-radius: 50%;
    }

    #nav-side{
        background-color: #FBFBFB;
        width: 15em;
        border-radius: 10px;
        margin-top: 3em;
        display: block;
        clear: right;
    }

    #a-nav-side{
        text-decoration: none;
        font-weight: 600;
        font-size: 16px;
        color: black;
    }

    #announcements-container{
        display: inline-block;
        width: 70vw;
        height: 50%;
        padding: 2em;
        background-color: #FBFBFB;
        border-radius: 10px;

    }

    .card{
        display: block;
        width: 100%;
        border-radius: 10px;

    }

</style>