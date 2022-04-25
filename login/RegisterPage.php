<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username)){

        //save to database
        $userID = random_num(20);
        $query = "insert into user (username,password,userID) values ('$username','$password','$userID')";

        mysqli_query($con, $query);
        header("Location: LoginPage.php");
        die;

    }else {

        echo "Please Enter Valid Details!";
    }
}

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
                    <li><a href="HomePage.php" class="currentPage">HOME</a></li>
                    <li><a href="MusicBrowse.php">MUSIC</a></li>
                    <li><a href="AboutPage.php">ABOUT</a></li>
                </ul>
            </nav>
            <div class="accountOptions">
            <a class="loginLink" href="LoginPage.php"><button>LOG IN</button></a>
            <a class="signUpLink" href="RegisterPage.php"><button>SIGN UP</button></a>
            </div>
        </header>

        <div class="mainNoBackgroundAccount">
            <div class="accountDetailsWrapper">
                <div class="leftAccountSection">
                </div>
                <div class="rightAccountSection">
                    <div class="accountForm">
                    <form method="post">
                        <div class="accountTitle"><h1>REGISTER</h1></div>
                        <div class="inputField">
                            <label>Username</label>
                            <input type="text" class="input" name="username">
                        </div>
                        <div class="inputField">
                            <label>Password</label>
                            <input type="password" class="input" name="password">
                        </div>
                        <div class="account_Btns">
                            <input type="submit" value="Cancel" class="cancelBtn">
                            <input type="submit" value="Register" class="registerLink">
                        </div>
                            </form>
                    </div>

                    
                </div>
             </div>
        </div>
        
    </body>
</html>