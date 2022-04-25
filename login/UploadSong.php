<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);

?>
<!DOCTYPE html>

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
                    <li><a href="HomePage.php">HOME</a></li>
                    <li><a href="MusicBrowse.php" class="currentPage">MUSIC</a></li>
                    <li><a href="AboutPage.php">ABOUT</a></li>
                </ul>
            </nav>
            <div class="accountOptions">
            <a class="loginLink" href="logout.php"><button><?php echo $user_data['username'];?></button></a>
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
                    <a  href="UploadSong.php" class="currentLeftMenuPage">UPLOAD SONGS</a><br>
                    <a  href="#">EDIT UPLOADS</a><br>
                </div>
 
        </div>
            <div class="rightMusicList">
                <div class="uploadWrapper">
                    <div class="leftUploadSection">
                        <img src="Images/cloud-upload.png" class="uploadIcon">
                        <span class="upload-file-span">Upload Your File</span>
                    </div>
                    <div class="rightUploadSection">
                        <div class="songForm">
                            <div class="inputField">
                                <label>Song Name</label>
                                <input type="text" class="input">
                            </div>
                            <div class="inputField">
                                <label>Artist</label>
                                <input type="password" class="input">
                            </div>
                            <div class="account_Btns">
                                <input type="submit" value="Upload" class="uploadBtn">
                            </div>
                        </div>
    
                    </div>
                 </div>

            </div>
        </div>
        
    </body>
</html>
