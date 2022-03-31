<?php
session_start();

include("connection.php");
include("functions.php");
$user_data = check_login($con);

?>

<html>
<head>
<title>
OPTUNES Music Page Prototype
</title>

<link rel="stylesheet" href="css/style.css">
<script src="https://kit.fontawesome.com/85b3032907.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="musicBrowserContainer">
        <div class="solidHeader">
            <img class="solidNavLogo" href="omePage.php" src="Images/OptunesLogo.png">
        <div class="solidNavigation">
            <ul class="solidNavLinks">
                 <li><a href="HomePage.php">Home</a></li>
                 <li class="currentPage"><a href="MusicBrowse.php">Music</a></li>
                 <li><a href="#">Play List</a></li>
                 <li><a href="#">About</a></li>
                 
            </ul>
                </div>
                <a class="profile" href="#"><button><?php echo $user_data['username'];?></button></a>
        </div>
        <div class="subHeader">
            <div class="breadCrumbs">
                <h3>BROWSE MUSIC</h3>
                <p>home / <a class="currentPage" href="#">music</a></p>
            </div>
            <div class="searchBarWrap">
                <div class="searchBox">
                    <input type="text" class="input" placeholder="Search...">
                    <div class="btn btn_common">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
         <div class="leftMenu">
             <div class="leftMenuSortArea">
             <h2>SORT</h2>
             <ul>
                 <li><input type="checkbox" id="sortAlphabetically" name="sortAlphabetically" value="Alphabetically">
                     <label for="sortAlphabetically">Alphabetically</label> 
                </li>
                 <li><input type="checkbox" id="myUploads" name="myUploads" value="MyUploads">
                     <label for="myUploads">My Uploads</label>  
                </li>
                 <li><input type="radio" id="sortNewest" name="sortDate" value="Newest">
                     <label for="sortNewest">Newest</label>
                    
                </li>
                 <li><input type="radio" id="sortOldest" name="sortDate" value="Oldest">
                     <label for="sortOldest">Oldest</label>    
                </li>
             </ul>

            <h2 class="leftMenuSortAreaOptions">OPTIONS</h2>
            <ul>
                <li class="currentPage"><a href="MusicBrowse.php">Browse Songs</a></li>
                <li><a href="UploadSong.php">Upload Songs</a></li>
                <li><a href="#">Edit Uploads</a></li>
            </ul>
        </div>
           </div>


         <div class="mainContent">
            <div class="songWrapper">
                <div class="playMediaWrapper">
                    <i class="fas fa-play"></i>
            </div>
                <div class="songDetails">
                    <div class="uploadDetails">
                    <p class="uploaderName">Uploaded by: XXXXXX</p>
                    <p class="uploadDate">Sep 26, 2019</p>
                    <p class="addPlayListButton">Add to playlist</p>
                    <button class="playFullButton">Play Full</button>
                </div>
                    <p class="songTitle">The Beatles - Here Comes The Sun</p>
                </div>
            </div>
         </div>
</body>

</html>