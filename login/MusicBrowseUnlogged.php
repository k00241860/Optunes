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
        <script src="https://kit.fontawesome.com/85b3032907.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <header>
            <img class="logo" src="Images/OptunesLogo.png">
            <nav>
                <ul class="navLinks">
                    <li><a href="HomePageUnlogged.php">HOME</a></li>
                    <li><a href="MusicBrowseUnlogged.php" class="currentPage">MUSIC</a></li>
                    <li><a href="AboutPageUnlogged.php">ABOUT</a></li>
                </ul>
            </nav>
            <div class="accountOptions">
            <a class="loginLink" href="LoginPage.php"><button>LOG IN</button></a>
            <a class="signUpLink" href="RegisterPage.php"><button>SIGN UP</button></a>
            </div>
        </header>

        <div class="mainNoBackground">
            <div class="leftMenu">
                <div class="leftMenuContent">
                    <hr class="leftTopMenuSeperator">
                    <span class="leftMenuTitle">SORT BY</span>
                    <hr class="leftBotMenuSeperator">
                    <a  href="#" class="currentLeftMenuPage">RECENT</a><br>
                    <a  href="#">OLDEST</a><br>
                    <a  href="#">MY UPLOADS</a>
                    <hr class="leftTopMenuSeperator">
                    <span class="leftMenuTitle" href="#">OPTIONS</span>
                    <hr class="leftBotMenuSeperator">
                    <a  href="LoginPage.php">UPLOAD SONGS</a><br>
                    <a  href="#" class="unavailableOption">EDIT UPLOADS</a><br>
                </div>
 
        </div>
            <div class="rightMusicList">
                <div class="searchBarWrap">
                    <div class="searchBox">
                        <input type="text" class="input" placeholder="Search...">
                        <div class="btn btn_common">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="songWrapper">
                    <div class="playMediaWrapper">
                        <i class="fas fa-play"></i>
                </div>
                    <div class="songDetails">
                        <div class="uploadDetails">
                        <p class="uploaderName">Uploaded by: XXXXXX</p>
                        <p class="uploadDate">Sep 26, 2019</p>
                    </div>
                        <p class="songTitle">The Beatles - Here Comes The Sun</p>
                    </div>
                </div>
                
                <div class="songWrapper">
                    <div class="playMediaWrapper">
                        <i class="fas fa-play"></i>
                </div>
                    <div class="songDetails">
                        <div class="uploadDetails">
                        <p class="uploaderName">Uploaded by: XXXXXX</p>
                        <p class="uploadDate">Sep 26, 2019</p>
                    </div>
                        <p class="songTitle">The Beatles - Here Comes The Sun</p>
                    </div>
                </div>

                <div class="songWrapper">
                    <div class="playMediaWrapper">
                        <i class="fas fa-play"></i>
                </div>
                    <div class="songDetails">
                        <div class="uploadDetails">
                        <p class="uploaderName">Uploaded by: XXXXXX</p>
                        <p class="uploadDate">Sep 26, 2019</p>
                    </div>
                        <p class="songTitle">The Beatles - Here Comes The Sun</p>
                    </div>
                </div>

            </div>
        </div>
        
    </body>
</html>