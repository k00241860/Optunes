<%-- 
    Document   : UnloggedHomePage
    Created on : 26-Mar-2022, 18:51:23
    Author     : igorh
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<title>
OPTUNES Homepage Prototype
</title>

<link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="homePageContainer">

        <div class="header">
        <div class="navigation">
            <ul class="navLinks">
                 <li class="currentPage"><a href="../html/unLoggedHomePage.html">Home</a></li>
                 <li><a href="../html/unLoggedMusicBrowse.html">Music</a></li>
                 <li><a href="#">Play List</a></li>
                 <li><a href="#">About</a></li>
                 
            </ul>
                </div>
                <a class="unLogged-login" href="../html/LoginPage.html"><button>Login</button></a>
                <a class="unLogged-register" href="../html/RegisterPage.html"><button>Register</button></a>
        </div>
         <div class="leftContent">
            <img class="logo" href="../html/HomePage.html" src="images/OptunesLogo.png">
            <iframe src='https://my.spline.design/optuneshomepage-5f04d241f5c302f1be1258178eadbef4/' frameborder='0' width='100%' height='100%'></iframe>
         </div>
         <div class="rightContent">
             <div class="sloganSpace">
             <h1 class="homepageSloganVisualise">VISUALISE</h1>
             <hr class="headerLine">
             <h1 class="homepageSloganMusic">YOUR MUSIC</h1>
            </div>
        <div class="rightContentOptions">
            <form class="rContent" action="#">
                <button class="rContent" type="submit">BROWSE</button>
                </form>
            <h2 class="rContent">Unique 3D Animated Tracks</h2>
            <h2 class="rContent">OR</h2>
            <h2 class="rContent">Upload Your Own</h2>
            <form class="rContent" action="#">
            <button class="rContent" type="submit">UPLOAD</button>
            </form>
        </div>
         </div>
        </div>
    </div>
</body>

</html>
