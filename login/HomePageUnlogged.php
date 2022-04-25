<?php
session_start();

include("connection.php");
include("functions.php");
$user_data = check_login($con);

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OPTUNES</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/webStyle.css">

    </head>
    <body>
        <header>
            <img class="logo" href="HomePage.php" src="Images/OptunesLogo.png">
            <nav>
                <ul class="navLinks">
                    <li><a href="HomePageUnlogged.php" class="currentPage">HOME</a></li>
                    <li><a href="MusicBrowseUnlogged.php">MUSIC</a></li>
                    <li><a href="AboutPageUnlogged.php">ABOUT</a></li>
                </ul>
            </nav>
            <div class="accountOptions">
            <a class="loginLink" href="LoginPage.php"><button>LOG IN</button></a>
            <a class="signUpLink" href="RegisterPage.php"><button>SIGN UP</button></a>
            </div>
        </header>

        <div class="main">
            <div class="leftContent">
                <div class="relaxationSpace">
                    <div class="relaxationContent">
                <h2>FOR RELAXATION</h2>
                <span class="dot"></span>
                <hr>
                <h4>TAKE A BREAK FROM WORK</h4>
                <h3>AND ENJOY VISUALLY PLEASING ANIMATIONS
                    PAIRED WITH YOUR FAVOURITE SONGS</h3>
            </div>
            </div>
            <div class="signUpAdvSpace">
                <span>See your own music come to life with generated animations. Sign up and upload any song<br>
                    of your choice.
                    
                    <br><br>Share your favourite animated song with others using the sharing feature, spread the word<br>
                    and bring the entertainment to others!</span>
                    <a class="advSpaceButton" href="RegisterPage.php"><button>SIGN UP</button></a>
            </div>
        </div>
            <div class="rightContent">
                <div class="relaxationSpaceRight">
                    <div class="relaxationContentRight">
                <h2>WITH ENTERTAINMENT</h2>
                <span class="dotRight"></span>
                <hr>
                <h4>ALLOW YOUR MUSIC TO</h4>
                <h3>COME TO LIFE</h3>
                <span>OPTUNES is a website that generates random<br>
                    animations for any song that you play.<br>
                    <br>
                    Upload your own song  by signing up or browse<br>
                    through a selection of preloaded songs.<br>
                    You may also find songs uploaded by other<br>
                    users, have a browse through our music<br>
                    selection and find a song animation that<br>
                    relaxes you the most!<br>
                    </span>
            </div>
            </div>
            </div>
        </div>
        
    </body>
</html>
