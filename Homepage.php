<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/homepage.js" defer></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            choresmanagementsystem
        </title>
        <style>
            .sec1_options {
                position: relative;
                cursor: pointer;
            }

            .tooltip {
                visibility: hidden;
                position: absolute;
                background-color: #333;
                color: #fff;
                padding: 5px;
                border-radius: 5px;
                bottom: 125%;
                left: 50%;
                transform: translateX(-50%);
                opacity: 0;
                transition: opacity 0.3s;
            }

            .sec1_options:hover .tooltip {
                visibility: visible;
                opacity: 1;
            }
        </style>
    </head>
    <body>
        <header>
            <!-- Add any content you want in the header here -->
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            </a>
        </div>
        </header>
          <section class="sec1">
            <div class="content_sec1">
                <div class="sec1_options">
                    <h1 class="main_menu_options" onclick="scrollToSec2()">LOG IN</h1>
                    <div class="tooltip">Click here to log in</div>
                </div>
                <div class="sec1_options">
                    <a href="view/Register.php">
                    <h1 class="main_menu_options">SIGN UP</h1>
                    </a>
                    <div class="tooltip">Sign up for a new account</div>
                </div>
                <div class="sec1_options">
                    <a href="view/AdminDash.php">
                        <h1 class="main_menu_options">DASHBOARD</h1>
                        <div class="tooltip">Access your dashboard</div>
                    </a>
                </div>                
            </div>
            <div class="picture1">
                <img src="images/opt3.jpg" alt="chore with family">
            </div>
        </section>
        <section class="sec2" id="loginsec">
            <div class="content_sec2">
                <div class="container" id="container">
                    <div class="form-container log-in-container">
                        <form action="actions/login_user.php" method="post" name="login" id="login_user">
                            <h1 class="formh1">Login</h1>
                            <span>or use your account</span>
                            <input type="email" placeholder="Enter your Email" name="email" id="email" pattern="[a-z0-9._%+-]+@example\.com" required/>
                            <input type="password" placeholder="Password" name="password" id="password" minlength="8" maxlength="20" required/>
                            <a href="#">Forgot your password?</a>
                            <a href="view/Register.php">Sign Up</a>
                            <button type="submit" name="sign-in-button" id="sign-in-button">Log In</button>
                        </form>
                    </div>
                    <div class="overlay-container">
                        <div class="overlay">
                            <div class="overlay-panel overlay-right">
                                <h1>CHORES MS</h1>
                                <p>Login to your account to manage chores efficiently.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <!-- © 2021 All Rights Reserved | Design by <a href="#">The -->
        </footer>
    </body>
</html>