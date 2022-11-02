<!-- <!DOCTYPE html>
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

            <a class="navbar-brand" href="#"><img src="{{ URL('images/pathstrides-logo-FINAL.png') }}" class="logo"> Pathstrides</a>
  

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
        width: 60vw;
        height: 50%;
        padding: 2em;
        background-color: #FBFBFB;
        border-radius: 10px;
        position: relative;

    }

    .card{
        display: block;
        width: 100%;
        border-radius: 10px;

    }

</style> -->

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
                                        <a class="nav-link" href="{{url('/admin')}}" id="a-nav-side">
                                            <img src="{{ URL('images\icons\icons8-member-90 (2).png') }}"
                                                class="icon">
                                            Employees
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/pointsshop')}}" id="a-nav-side">
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
                        <div class="container-fluid" id="announcements-container">
                            <h3>ANNOUNCEMENTS</h3>
                            <div class="card" id="announcement-1">
                                <div class="card-body">
                                    <div class="announcement-header">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h2 class="card-title-announcements">Christmas Party</h2>
                                                </div>
                                                <div class="col-3">
                                                    <p class="ann-date-posted">August 15, 2022 | 5:00 am</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="{{ URL('https://viterbischool.usc.edu/wp-content/uploads/2020/05/Lily-Profile-Square.jpeg') }}"
                                                class="announcer-photo">
                                            </div>
                                            <div class="col-9">
                                                <p class="announcer-name">Rachel Chiu | Manager (Marketing Department)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="announcement-body">
                                            <div class="row">
                                                <div class="col-1">
                                                </div>
                                                <div class="col-11">
                                                    <p class="announcement-text">
                                                        We will be having a meeting later at 10 am to discuss the newest products in the market.
                                                    </p>
                                                    <button type="button" class="btn" id="see-more" data-bs-toggle="modal" data-bs-target="#myModal">
                                                        see more
                                                    </button>
                                                    <!-- <a class="see-more" data-bs-toggle="modal" data-bs-target="#myModal">see more</a> -->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" id="announcement-2">
                                <div class="card-body">
                                    <div class="announcement-header">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h2 class="card-title-announcements">URGENT MEETING</h2>
                                                </div>
                                                <div class="col-3">
                                                    <p class="ann-date-posted">August 15, 2022 | 5:00 am</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="{{ URL('https://profilemagazine.com/wp-content/uploads/2020/04/Ajmere-Dale-Square-thumbnail.jpg') }}"
                                                class="announcer-photo">
                                            </div>
                                            <div class="col-9">
                                                <p class="announcer-name">Jonathan Ramos | Manager (Finance Department)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="announcement-body">
                                            <div class="row">
                                                <div class="col-1">
                                                </div>
                                                <div class="col-11">
                                                    <p class="announcement-text">
                                                        We will be having a meeting later to talk about our sales.
                                                    </p>
                                                    <button type="button" class="btn" id="see-more" data-bs-toggle="modal" data-bs-target="#myModal">
                                                        see more
                                                    </button>
                                                    <!-- <a class="see-more" data-bs-toggle="modal" data-bs-target="#myModal">see more</a> -->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="announcement-3">
                                <div class="card-body">
                                    <div class="announcement-header">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h2 class="card-title-announcements">Christmas Party</h2>
                                                </div>
                                                <div class="col-3">
                                                    <p class="ann-date-posted">August 15, 2022 | 5:00 am</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="{{ URL('https://i.pinimg.com/736x/54/74/8d/54748de2a9fa0951d2e81b1ffbbd189c.jpg') }}"
                                                class="announcer-photo">
                                            </div>
                                            <div class="col-9">
                                                <p class="announcer-name">Elizabeth Ignacio | Manager (Marketing Department)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="announcement-body">
                                            <div class="row">
                                                <div class="col-1">
                                                </div>
                                                <div class="col-11">
                                                    <p class="announcement-text">
                                                        Good day everyone!<br>
                                                        Meeting tomorrow at 1PM. We will talk about our Christmas Party
                                                    </p>
                                                    <button type="button" class="btn" id="see-more" data-bs-toggle="modal" data-bs-target="#myModal">
                                                        see more
                                                    </button>
                                                    <!-- <a class="see-more" data-bs-toggle="modal" data-bs-target="#myModal">see more</a> -->
                                                </div>
                                            </div>
                                    </div>
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
                        

                        <div class="container-fluid" id="tasks-container">
                            <h3>TASKS</h3>
                            <div id="accordion">

                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#task1" id="card">
                                            TASK 1
                                        </a>
                                    </div>
                                    <div id="task1" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum..
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#task2" id="card">
                                            TASK 2
                                        </a>
                                    </div>
                                    <div id="task2" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum..
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#task3" id="card">
                                            TASK 3
                                        </a>
                                    </div>
                                    <div id="task3" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum..
                                        </div>
                                    </div>
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

    #announcement-1, #announcement-2, #announcement-3{
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
    }

    .ann-date-posted{
        float: right;
    }

    .announcer-photo{
        border-radius: 50%;
        height: 60px;
        width: auto;
    }

    .announcer-name{
        font-weight: bold;
        float: left;
        margin-top: 1em;
    }

    #see-more{
        color: #5F6368;
        font-weight: bold;
        float: right;
        margin-right: 1em;
        height:auto;
        width: auto;
        background-color: white;
    }

    .see-more:hover{
        color: #FF7843;
        text-decoration: none;
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