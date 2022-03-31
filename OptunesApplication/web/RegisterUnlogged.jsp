<%-- 
    Document   : RegisterUnlogged
    Created on : 14-Mar-2022, 20:36:53
    Author     : igorh
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
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
                <img class="solidNavLogo" href="html/HomePage.html" src="images/OptunesLogo.png">
                <div class="solidNavigation">
                    <ul class="solidNavLinks">
                        <li><a href="html/UnloggedHomePage.html">Home</a></li>
                        <li class="currentPage"><a href="html/UnloggedMusicBrowse.html">Music</a></li>
                        <li><a href="#">Play List</a></li>
                        <li><a href="#">About</a></li>

                    </ul>
                </div>
                <a class="unLogged-login" href="html/LoginPage.html"><button>Login</button></a>
                <a class="unLogged-register" href="html/RegisterPage.html"><button>Register</button></a>
            </div>


            <div class="mainContent">
                <div class="accountDetailsWrapper">
                    <div class="leftAccountSection">
                    </div>
                    <div class="rightAccountSection">

                        <form action="UserServlet" method="post">
                            <input type="hidden" name="action" value="addUser">
                            <div class="accountForm">

                                <div class="accountTitle"><h1>REGISTER</h1></div>
                                <div class="inputField">
                                    <label>Username</label>
                                    <input type="text" name="username" class="input">
                                </div>
                                <div class="inputField">
                                    <label>Email</label>
                                    <input type="text" name="email" class="input">
                                </div>
                                <div class="inputField">
                                    <label>Password</label>
                                    <input type="password" name="password" class="input">
                                </div>
                                <div class="account_Btns">
                                    <button  value="Register" class="registerBtn">Register</button
                                </div>
                    </div>
                </div>
                    </form>
            </div>
                
        </div>
    </div>
</body>

</html>
