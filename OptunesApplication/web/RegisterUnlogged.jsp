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
                        <div class="accountForm">
                            <form action="UserServlet" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="addUser">

                                <table cellpadding=0 cellspacing=10>

                                    <div class="accountTitle"><h1>REGISTER</h1></div>
                                    <div class="inputField">
                                        <tr><td><span>Username</span><input type="text" class="input" id="user" name="user"></td></tr>
                                    </div>
                                    <div class="inputField">
                                        <tr><td><span>Email</span><input type="text" class="input" id="email" name="email"></td></tr>
                                    </div>
                                    <div class="inputField">
                                        <tr><td><span>Password</span><input type="password" class="input" id="password" name="password"></td></tr>
                                    </div>
                                    <div class="inputField">
                                        <tr><td> <span>Repeat Password</span><input type="password" class="input"></td></tr>
                                    </div>
                                    <div class="account_Btns">
                                        <input type="submit" value="Back" class="backBtn">
                                        <input type="submit" value="Register" class="registerBtn">
                                    </div>
                                    </div>


                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </body>

                                    </html>
