<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pathstrides</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class= "bg glass">
        <nav class="navbar navbar-expand-sm navbar-light" id="nav-top">

            <a class="navbar-brand" href="#"><img src="{{ URL('images/pathstrides-white.png') }}" class="logo">
                
            <a class="navbar-brand" href="#" id="PathStrides-beside-logo" style="color: #FFFFFF">Pathstrides</a>
            <ul class="nav navbar-nav navbar-right" id="top-side-nav">
                <li><a href="#"><button class="btn btn-info btn-sm" id="home-button"><i class="fa fa-home" id="top-side-nav-icons-home"></i></button></a></a></li>
                <li><a href="#"><button class="btn btn-info btn-sm" id="user-button"><i class="fa fa-user-circle" id="top-side-nav-icons-user"></i></button></a></a></li>
            </ul>
        </nav>

        <hr>
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

    body{
        background-image: url("images/bg.jpg");
        background-size: cover;
    }

    hr{
        border-color: white;
        opacity: 20%;
    }

    .bg{
        height: 90vh;
        width: 95vw;
        margin: auto;
        margin-top: 45px;
    }

    .glass{
        /* glass effect */
        background: linear-gradient(135deg, rgba(255, 255,255,0.1), rgba(255,255, 255,0));
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-radius: 20px;
        border: 1px solid rgba(255, 255,255,0.1);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
    }

    #mySidebar{
        color: white;
        background: none;
    }

    #nav-top{
        height: 50px;
        width: 100%;
        margin: 0;
        padding:0;
        position: sticky;
    }

    .navbar-brand{
        font-weight: 600;
        float: left;
        color: #FF7843;
    }

    .logo{
        width: auto;  
        height: 30px;
        margin-left: 1em;
        margin-top: 0.5em;
        color: #FF7843;
    }

    #PathStrides-beside-logo{
        font-weight: bold;
        font-size: 25px;
        margin-top: 0.5em;
    }

    #top-side-nav{
        position: absolute;
        right: 2em;
    }

    #top-side-nav-icons-home{
        color:#FFFFFF;
        font-size: 30px;
        margin-top: 0.5em;
    }

    #top-side-nav-icons-user{
        color:#FFFFFF;
        font-size: 25px;
        margin-top: 0.67em;
    }

    #home-button, #user-button{
        background-color: Transparent;
        background-repeat:no-repeat;
        border: none;
    }


</style>

<!-- <body>
    <div class="container-fluid" id="body">

        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm navbar-light" id="nav-top">

                <a class="navbar-brand" href="#"><img src="{{ URL('images/pathstrides-logo-FINAL.png') }}" class="logo">
                
                <a class="navbar-brand" href="#" id="PathStrides-beside-logo" style="color: #FF7843">Pathstrides</a>
                <ul class="navbar-nav" id="top-side-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="{{ URL('images\icons\icons8-home-page-90 (1).png') }}" class="top-side-nav-icon" alt="home">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="{{ URL('images\icons\icons8-logout-90.png') }}" class="top-side-nav-icon" alt="logout">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    

        <div class="container-fluid" id="header-container">
            <div class="row" id="header-photo">
                <div class="col-2">
                    <img src="{{ URL('https://i.pinimg.com/564x/86/8f/f2/868ff26099df298eb554a2bf366731f0.jpg') }}"
                    class="profile-pic">
                </div>
                <div class="col-9" id="header-text">
                    <div class="user-info">

                    <h4 class="name">
                            Jane Doe
                        </h4>
                        <p class="username">
                            j_doe
                        </p>
                        <h4 class="department">
                            Manager | Marketing Department

                        </h4>
                        <p class="num-of-employees">
                            12 Employees
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="body-layout">
            <div class="row">
                <div class="col-sm-3">
                    <div class="container-fluid">
                            <nav class="navbar" id="nav-side">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{url('/announcement')}}" id="a-nav-side">
                                            <img src="{{ URL('images\icons\icons8-commercial-90.png') }}"
                                                class="icon">
                                            Announcement
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{url('/task')}}" id="a-nav-side">
                                            <img src="{{ URL('images\icons\icons8-playlist-90.png') }}"
                                                class="icon">
                                            Tasks
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/admin')}}" id="a-nav-side">
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
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/pointshop')}}" id="a-nav-side">
                                            <img src="{{ URL('images\icons\icons8-stall-100.png') }}"
                                                class="icon">
                                            Points Shop
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
    }

    #nav-top{
        height: 50px;
        width: 100%;
        margin: 0;
        padding:0;
        position: sticky;
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


    #announcements-container, #tasks-container{
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

    .card{
        display: block;
        width: 100%;
        border: none;
    }

    #announcement-1{
        margin-bottom: 2em;
    }

    .collapsed{
        font-size: 14px;
        text-decoration: none;
        font-weight: 600;
        color: black;
    }

    .card-title-announcements{
        font-weight: bold;
        font-size: 18px;
    }

    .ann-date-posted{
        float: right;
        font-size: 16px;
    }

    .announcer-photo{
        border-radius: 50%;
        height: 50px;
        width: auto;
    }

    .announcer-name{
        font-weight: bold;
        float: left;
        margin-top: 0.5em;
    }

    .announcement-text{
        font-size: 14px;
        padding-left: 0.8em;
    }

    #see-more{
        color: #5F6368;
        font-weight: bold;
        float: right;
        margin-right: 1em;
        height:auto;
        width: auto;
        background-color: white;
        font-size: 14px;
    }

    #see-more:hover{
        color: #FFFFFF;
        text-decoration: none;
        background: #FF7843;
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