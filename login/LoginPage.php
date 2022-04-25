<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username)){


        //read from database
        $query = "select * from user where username = '$username' limit 1";

        $result = mysqli_query($con, $query);

        if($result) {
            if($result && mysqli_num_rows($result) > 0){

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password){
                    
                    $_SESSION['userID'] = $user_data['userID'];
                    header("Location: HomePage.php");
                    die;
                }
            }
        }

        echo "Please Enter Valid Details!";
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

        <div class="mainNoBackgroundAccount">
            <div class="accountDetailsWrapper">
                <div class="leftAccountSection">
                </div>
                <div class="rightAccountSection">
                    <div class="accountForm">
                    <form method="post">
                        <div class="accountTitle"><h1>LOGIN</h1></div>
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
                            <input type="submit" value="Login" class="loginLink">
                        </div>
                        </form>
                    </div>

                    
                </div>
             </div>
        </div>
        
    </body>
</html>