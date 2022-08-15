
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pathstrides</title>
</head>

<body>
    <section>
        <header>
            <a href="logo"><img src="{{ URL('images/pathstrides-logo-with-text.png') }}" id="logo"></a>
            
        </header>

        <div class="content">
            <div class="textBox">
                <h2>DETAILING THEIR<br>PROGRESS <span>ANYWHERE.</span>
                </h2><br class="description">
                <p>With Pathstrides, you can manage your employees outside office.
                </p>
                <button id="getStarted">Get Started</button>
            </div>
        </div>

        <div class="landingIcon">
            <a href="logo" class="managerIcon"><img src="{{ URL('images/manager-landing-page.png') }}" id="logo"></a>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1 id="modalTitle">SELECT ONE:</h1>
                <div id="wrapper_admin">
                    <a href="loginAdmin" class="admin_button">
                        <div class="dots-container">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>

                        </div>
                        <span>
                            <img src="{{URL('images/admin.png')}}" id="adminIcon">
                            <p id="adminText">ADMIN</p>
                            <style>
                                #adminIcon{
                                    position: absolute;
                                    width: 100px;
                                    height: 100px;
                                    margin-top: -80px;                                 
                                }
                                #adminText{
                                    margin-left: 0px;
                                    margin-top: 100px;   
                                }
                            </style>
                        </span>
                    </a>
                </div>
                <div id="wrapper_manager">
                    <a href="loginManager" class="manager_button">
                        <div class="dots-container">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                        <span>
                        <img src="{{ URL('images/manager.png') }}" id="managerIcon">
                            <p id="managerText">MANAGER</p>
                            <style>
                                #managerIcon{
                                    position: absolute;
                                    width: 100px;
                                    height: 100px;
                                    margin-top: -70px;                                 
                                }
                                #managerText{
                                    margin-left: 0px;
                                    margin-top: 100px;   
                                }
                            </style>
                        </span>
                    </a>
                </div>

            </div>

        </div>
        <script>
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("getStarted");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </section>
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
    
    section {
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #fff;
    }
    
    header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px 100px;
        justify-content: space-between;
        align-items: center;
    }
    
    header #logo {
        position: relative;
        height: 150px;
        width: 270px;
        margin-top: -40px;
        margin-left: -27px;
    }
    
    header ul li {
        list-style: none;
        font-size: 18px;
        margin-left: 20em;
        margin-top: -5em;
    }
    
    header ul li a {
        list-style: none;
        display: block;
        color: rgb(255, 120, 67);
        font-weight: 700;
        margin-left: 200px;
        float: left;
        text-decoration: none;
    }
    
    .content {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .content .textBox {
        position: relative;
        width: 100%;
    }
    
    .content .textBox h2 {
        color: rgb(36, 36, 36);
        font-size: 4em;
        width: 100%;
        font-weight: black;
        line-height: 1.4em;
        font-family: 'Inter', sans-serif;
    }
    
    .content .textBox h2 span {
        color: rgb(255, 120, 67);
        font-style: italic;
    }
    
    br {
        display: block;
        /* makes it have a width */
        content: "";
        /* clears default height */
        margin-top: -25px;
        /* change this to whatever height you want it */
    }
    
    .description {
        display: block;
        content: "";
        margin-top: 15px;
    }
    
    .content .textBox p {
        font-size: 18px;
    }
    
    #logo {
        margin-left: 50px;
        width: 700px;
        height: 400px;
    }
    
    #getStarted {
        width: 280px;
        height: 60px;
        margin-top: 50px;
        padding: 10px 25px;
        border: 3px solid rgb(255, 120, 67);
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        letter-spacing: 2px;
        font-weight: 700;
        background: rgb(255, 120, 67);
        color: #fff;
        z-index: 1;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        border-radius: 5px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }
    
    #getStarted:after {
        position: absolute;
        content: "";
        width: 0;
        height: 100%;
        top: 0;
        right: 0;
        z-index: -1;
        background: #ffff;
        transition: all 0.5s ease;
    }
    
    #getStarted:hover {
        color: rgb(255, 120, 67);
    }
    
    #getStarted:hover:after {
        left: 0;
        width: 100%;
    }
    
    #getStarted:active {
        top: 2px;
    }
    
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }
    /* Modal Content/Box */
    
    .modal-content {
        background-color: #ffff;
        margin: 15% auto;
        margin-top: 150px;
        border-radius: 10px;
        animation: appear 350ms ease-in 1;
        /* 15% from the top and centered */
        padding: 20px;
        width: 40%;
        height: 60%;
        /* Could be more or less, depending on screen size */
    }
    /* The Close Button */
    
    #modalTitle {
        text-align: center;
        font-size: 40px;
        font-weight: 100;
        color: #000;
        letter-spacing: 20px;
        margin-left: 20px;
        margin-top: 50px;
    }
    
    .modal-content:after {
        transition: all 2s ease;
    }
    
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
        color: #FF7843;
        text-decoration: none;
        cursor: pointer;
    }
    
    @keyframes appear {
        0% {
            opacity: 0;
            transform: translateY(-10px);
        }
    }
    
    #wrapper_admin {
        width: 100vw;
        height: 100vh;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    #wrapper_manager {
        width: 100vw;
        height: 100vh;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .admin_button {
        position: relative;
        text-decoration: none;
        color: #FF7843;
        font-weight: 700;
        letter-spacing: 1px;
        font-size: 2rem;
        box-sizing: border-box;
        margin-top: -15em;
        margin-left: -48.7em;
    }
    
    .admin_button span {
        position: relative;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 300px;
        height: 300px;
    }
    
    .admin_button span:before {
        content: '';
        width: 100%;
        height: 100%;
        display: block;
        position: absolute;
        border-radius: 10%;
        border: 7px solid #FF7843;
        box-sizing: border-box;
        transition: all .85s cubic-bezier(0.25, 1, 0.33, 1);
    }
    
    .admin_button:hover span:before {
        transform: scale(0.8);
        box-shadow: 0 20px 55px rgba(0, 0, 0, 0.14), 0 15px 35px rgba(0, 0, 0, 0.14);
    }
    
    .admin_button .dots-container {
        opacity: 0;
        animation: intro 1.6s;
        animation-fill-mode: forwards;
    }
    
    .admin_button .dot {
        width: 8px;
        height: 8px;
        display: block;
        background-color: #FF7843;
        border-radius: 100%;
        position: absolute;
        transition: all .85s cubic-bezier(0.25, 1, 0.33, 1);
    }
    
    .admin_button .dot:nth-child(1) {
        top: 50px;
        left: 50px;
        transform: rotate(-140deg);
        animation: swag1-out 0.3s;
        animation-fill-mode: forwards;
        opacity: 0;
    }
    
    .admin_button .dot:nth-child(2) {
        top: 50px;
        right: 50px;
        transform: rotate(140deg);
        animation: swag2-out 0.3s;
        animation-fill-mode: forwards;
        opacity: 0;
    }
    
    .admin_button .dot:nth-child(3) {
        bottom: 50px;
        left: 50px;
        transform: rotate(140deg);
        animation: swag3-out 0.3s;
        animation-fill-mode: forwards;
        opacity: 0;
    }
    
    .admin_button .dot:nth-child(4) {
        bottom: 50px;
        right: 50px;
        transform: rotate(-140deg);
        animation: swag4-out 0.3s;
        animation-fill-mode: forwards;
        opacity: 0;
    }
    
    .admin_button:hover .dot:nth-child(1) {
        animation: swag1 0.3s;
        animation-fill-mode: forwards;
    }
    
    .admin_button:hover .dot:nth-child(2) {
        animation: swag2 0.3s;
        animation-fill-mode: forwards;
    }
    
    .admin_button:hover .dot:nth-child(3) {
        animation: swag3 0.3s;
        animation-fill-mode: forwards;
    }
    
    .admin_button:hover .dot:nth-child(4) {
        animation: swag4 0.3s;
        animation-fill-mode: forwards;
    }
    
    .manager_button {
        position: relative;
        text-decoration: none;
        color: #FF7843;
        font-weight: 700;
        letter-spacing: 1px;
        font-size: 2rem;
        box-sizing: border-box;
        margin-top: -75.4em;
        margin-left: -26em;
    }
    
    .manager_button span {
        position: relative;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 300px;
        height: 300px;
    }
    
    .manager_button span:before {
        content: '';
        width: 100%;
        height: 100%;
        display: block;
        position: absolute;
        border-radius: 10%;
        border: 7px solid #FF7843;
        box-sizing: border-box;
        transition: all .85s cubic-bezier(0.25, 1, 0.33, 1);
    }
    
    .manager_button:hover span:before {
        transform: scale(0.8);
        box-shadow: 0 20px 55px rgba(0, 0, 0, 0.14), 0 15px 35px rgba(0, 0, 0, 0.14);
    }
    
    .manager_button .dots-container {
        opacity: 0;
        animation: intro 1.6s;
        animation-fill-mode: forwards;
    }
    
    .manager_button .dot {
        width: 8px;
        height: 8px;
        display: block;
        background-color: #FF7843;
        border-radius: 100%;
        position: absolute;
        transition: all .85s cubic-bezier(0.25, 1, 0.33, 1);
    }
    
    .manager_button .dot:nth-child(1) {
        top: 50px;
        left: 50px;
        transform: rotate(-140deg);
        animation: swag1-out 0.3s;
        animation-fill-mode: forwards;
        opacity: 0;
    }
    
    .manager_button .dot:nth-child(2) {
        top: 50px;
        right: 50px;
        transform: rotate(140deg);
        animation: swag2-out 0.3s;
        animation-fill-mode: forwards;
        opacity: 0;
    }
    
    .manager_button .dot:nth-child(3) {
        bottom: 50px;
        left: 50px;
        transform: rotate(140deg);
        animation: swag3-out 0.3s;
        animation-fill-mode: forwards;
        opacity: 0;
    }
    
    .manager_button .dot:nth-child(4) {
        bottom: 50px;
        right: 50px;
        transform: rotate(-140deg);
        animation: swag4-out 0.3s;
        animation-fill-mode: forwards;
        opacity: 0;
    }
    
    .manager_button:hover .dot:nth-child(1) {
        animation: swag1 0.3s;
        animation-fill-mode: forwards;
    }
    
    .manager_button:hover .dot:nth-child(2) {
        animation: swag2 0.3s;
        animation-fill-mode: forwards;
    }
    
    .manager_button:hover .dot:nth-child(3) {
        animation: swag3 0.3s;
        animation-fill-mode: forwards;
    }
    
    .manager_button:hover .dot:nth-child(4) {
        animation: swag4 0.3s;
        animation-fill-mode: forwards;
    }
    
    @keyframes intro {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    
    @keyframes swag1 {
        0% {
            top: 50px;
            left: 50px;
            width: 8px;
        }
        50% {
            width: 30px;
            opacity: 1;
        }
        100% {
            top: 20px;
            left: 20px;
            width: 8px;
            opacity: 1;
        }
    }
    
    @keyframes swag1-out {
        0% {
            top: 20px;
            left: 20px;
            width: 8px;
        }
        50% {
            width: 30px;
            opacity: 1;
        }
        100% {
            top: 50px;
            left: 50px;
            width: 8px;
            opacity: 0;
        }
    }
    
    @keyframes swag2 {
        0% {
            top: 50px;
            right: 50px;
            width: 8px;
        }
        50% {
            width: 30px;
            opacity: 1;
        }
        100% {
            top: 20px;
            right: 20px;
            width: 8px;
            opacity: 1;
        }
    }
    
    @keyframes swag2-out {
        0% {
            top: 20px;
            right: 20px;
            width: 8px;
        }
        50% {
            width: 30px;
            opacity: 1;
        }
        100% {
            top: 50px;
            right: 50px;
            width: 8px;
            opacity: 0;
        }
    }
    
    @keyframes swag3 {
        0% {
            bottom: 50px;
            left: 50px;
            width: 8px;
        }
        50% {
            width: 30px;
            opacity: 1;
        }
        100% {
            bottom: 20px;
            left: 20px;
            width: 8px;
            opacity: 1;
        }
    }
    
    @keyframes swag3-out {
        0% {
            bottom: 20px;
            left: 20px;
            width: 8px;
        }
        50% {
            width: 30px;
            opacity: 1;
        }
        100% {
            bottom: 50px;
            left: 50px;
            width: 8px;
            opacity: 0;
        }
    }
    
    @keyframes swag4 {
        0% {
            bottom: 50px;
            right: 50px;
            width: 8px;
        }
        50% {
            width: 30px;
            opacity: 1;
        }
        100% {
            bottom: 20px;
            right: 20px;
            width: 8px;
            opacity: 1;
        }
    }
    
    @keyframes swag4-out {
        0% {
            bottom: 20px;
            right: 20px;
            width: 8px;
        }
        50% {
            width: 30px;
            opacity: 1;
        }
        100% {
            bottom: 50px;
            right: 50px;
            width: 8px;
            opacity: 0;
        }
    }
</style>