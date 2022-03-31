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

<html>
<head>
<title>
OPTUNES Music Page Prototype
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
                 <li class="currentPage"><a href="html/UnloggedMusicBrowse.html">Music</a></li>
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
                            <input type="submit" value="Back" class="backBtn">
                            <input type="submit" value="Login" class="loginBtn">
                        </div>
                        </form>
                    </div>

                    
                </div>
             </div>
            </div>
         </div>
</body>

</html>