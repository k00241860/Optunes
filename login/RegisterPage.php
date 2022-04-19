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

<html>
<head>
<title>
OPTUNES
</title>

<link rel="stylesheet" href="css/style.css">
<script src="https://kit.fontawesome.com/85b3032907.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="loginPageContainer">
        <div class="solidHeader">
            <img class="solidNavLogo" href="HomePage.php" src="Images/OptunesLogo.png">
        <div class="solidNavigation">
            <ul class="solidNavLinks">
                 <li><a href="HomePage.php">Home</a></li>
                 <li class="currentPage"><a href="UnloggedMusicBrowse.php">Music</a></li>
                 <li><a href="#">Play List</a></li>
                 <li><a href="#">About</a></li>
                 
            </ul>
                </div>
                <a class="unLogged-login" href="LoginPage.php"><button>Login</button></a>
                <a class="unLogged-register" href="RegisterPage.php"><button>Register</button></a>
        </div>


         <div class="mainContent">
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
                            <input type="submit" value="Back" class="backBtn">
                            <input type="submit" value="Register" class="registerBtn">
                        </div>
                    </form>
                    </div>

                    
                </div>
             </div>
            </div>
         </div>
</body>

</html>