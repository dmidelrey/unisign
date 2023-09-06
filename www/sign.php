<?session_start();
include "datab.php";
if (!empty($_SESSION['login']) and !empty($_SESSION['password']))
{
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$result = mysql_query("SELECT * FROM users WHERE login='$login' AND password='$password'"); 
$myrow = mysql_fetch_array($result);
header("Location: homepage.php");
}

else
{?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>ЮниСайн &mdash; Авторизация</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./favicon.png" type="image/png">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0"><span class="text-primary"><img src="images/logo.png"></span> </a></h1>
          </div>
        </div>
      </div>
      
    </header>
	<br><br><br>
	<div class="site-section">
	<div class="container">
        <div class="row align-items-lg-center">
		<div class="col-md-6 mb-5 mb-lg-0 position-relative">
            <img src="images/about_1.jpg" class="img-fluid" alt="Image">
            <div class="experience">
              <span class="year">Гарантия</span>
              <span class="caption">Безопасности</span>
            </div>
          </div>
		<div class="col-md-5 ml-auto">
		<h3 class="section-sub-title">Система электронных подписей</h3>
		<h3 class="section-title mb-3">Авторизация</h3>
							<br>
							<br>
                           <form action="login.php" class="form-signin" method="post" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control input-md" name="login1" id="login1" placeholder="Логин" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-md" name="password" id="password" placeholder="Пароль" required>
                                </div>
								<br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" id="login" name="login">Войти</button>
									<a href="register_form1.php" class="btn btn-primary btn-block">Регистрация</a></p><br>
									<a href="index.html" class="btn btn-primary btn-block">Назад</a>
									
                                </div>
</div>
</div></div></div>
    
    <footer class="site-footer">
      <div class="container">
              <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<a href="https://vk.com/dmitriievs"> Дмитрий Евстигнеев </a> </a>
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>
<?}?>