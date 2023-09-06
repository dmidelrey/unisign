<?php
include "datab.php";
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>ЮниСайн &mdash; Регистрация</title>
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
            <h2 class="section-title mb-3">Что такое "Код Регистрации"?</h2>
            <p class="mb-4">Так как проект находиться в разработке, то его тестирование закрытое. Мы не можем вам дать доступ к тестированию системы без одобрения администрации. Поэтому временно на нашем проекте вы можете зарегистрироваться только по одобренному коду - коду регистрации. </p>
          </div>		
		<div class="col-md-5 ml-auto">		
                        <div class="div-tran text-center">
                            <h3>Регистрация</h3>
                            <div class="col-lg-12 col-md-12 col-sm-12" > 
							
                                <form method="post" role="form">
                                    
                                     <div class="form-group">
                                            <input type="text" name="fname" id="fname"class="form-control" placeholder="Фамилия" required autofocus/>
                                        </div>
										<div class="form-group">
                                            <input type="text" name="mname" id="mname"class="form-control" placeholder="Имя" required autofocus/>
                                        </div>
										<div class="form-group">
                                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Отчество" required autofocus/>
                                        </div>
										
				<div class="form-group">
							  
							 
						<input type="date" name="age" id = "age" class="form-control input-md" title="Дата рождения" placeholder="Дата рождения" required/>
					
				</div>
				
										<div class="form-group">
                                            <input type="text" name="login" id="login"class="form-control" placeholder="Придумайте Логин" required autofocus/>
                                        </div>
                                      <div class="form-group">
                                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Придумайте Пароль" required/>
											</div>
											<div class="form-group">
                                            <input type="text" name="unicode" id="unicode" class="form-control" placeholder="Код Регистрации" required/>
											</div>
										<div class="row-md-5 col-md-offset-6 column">
                                     <button type="submit" id="submit" name="register" class="btn btn-primary">ОК</button> 
									<a href="sign.php" class="btn btn-primary">Назад</a>
									 </div>
                                        
										
                                    </form>
                            </div>
                           </div>
                        </div>
                    </div>
                
                
        </div></div></div>
		<br>
				 

  
   
	<?php
	if (isset($_POST['register'])){
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$age=$_POST['age'];
	$login=$_POST['login'];
	$password=$_POST['pass'];
	$unicode=$_POST['unicode'];
	$monthh = strtotime('now');
	$mon = date('Y-m-d',$monthh);
	$query = mysql_query("select * from users where login = '$login' and password = '$password'")or die(mysql_error());
$count = mysql_num_rows($query);
$qu = mysql_query("select * from users where login = '$login' and password = '$password'")or die(mysql_error());
$co = mysql_num_rows($qu);
if ($count > 0 && $co > 0){ ?>
<script>
alert('Уже есть аккаунт');
</script>
<?php
}else{
	$quer = mysql_query("select * from unique_keys where key_value = '$unicode'")or die(mysql_error());
    $coun = mysql_num_rows($quer);
	if ($coun <= 0){ ?>
	<script>
	alert('Не существует такого кода регистрации');
	</script>
	<?php
	}else{
	mysql_query("insert into users (age,fname,mname,lname,login,password,date_registered,unicode) values('$age','$fname','$mname','$lname','$login','$password','$mon','$unicode')")or die(mysql_error());
	mysql_query("DELETE FROM unique_keys where key_value = '$unicode'")or die(mysql_error());
	?>
	<script>
alert('успешно');
window.location = "sign.php";
</script>
<?php }}}?>

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