<?php
include "datab.php";
?>
<?php
require_once('session1.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ЮниСайн &mdash; Мои документы</title>
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
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="homepage.php" class="nav-link">Мой аккаунт</a></li>
                <li><a href="docs.php" class="nav-link">Мои документы</a></li>
                <li><a href="session_logout.php" class="nav-link">Выйти</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header><br><br><br><br><br><div class="site-section">
	<div class="container">
        <div class="row align-items-lg-center">
<div class="col-md-6 mb-5 mb-lg-0 position-relative">
            <h2 class="section-title mb-3">Как проверить подпись?</h2>
            <p class="mb-4">Сосканируйте QR-код с документа и введите полученные данные в строку. Или отправьте документ и система сама его проверит. </p>
          </div>
<div class="col-md-5 ml-auto">		
                        <div class="div-tran text-center">
						<?php
	if (isset($_POST['check'])){
		$sign = $_POST['sign'];
		$qu = mysql_query("select * from docs where sign = '$sign'")or die(mysql_error());
		$co = mysql_num_rows($qu);
		$row=mysql_fetch_array($qu);
		$login = $row['user_id'];
		$query = mysql_query("select * from users where user_id = '$login'")or die(mysql_error());
		$ro=mysql_fetch_array($query);
		$name = $row['name'];
		$filename = $row['filename'];
		if ($co > 0)
		{
			echo "Файл авторизирован и подписан пользователем: ";
			echo $ro['fname']; echo " ";
			echo $ro['mname']; echo " ";
			echo $ro['lname']; echo ".<br> Ссылка на файл:";
			?>
			<a href="<?php echo $filename; ?>"><?php echo $name; ?></a>
			<?php 
			echo "<br><br>";
		}
		else
		{
			echo "Файл не подписан<br><br>";
		}
	}
	if ($_FILES && $_FILES['filename']['error']== UPLOAD_ERR_OK)
{
	$hash=hash_file('md5', $_FILES['filename']['tmp_name']);
	$qu = mysql_query("select * from docs where hash = '$hash'")or die(mysql_error());
	$co = mysql_num_rows($qu);
	$row=mysql_fetch_array($qu);
	$login = $row['user_id'];
		$query = mysql_query("select * from users where user_id = '$login'")or die(mysql_error());
		$ro=mysql_fetch_array($query);
	if ($co > 0)
		{
			echo "Файл авторизирован и подписан пользователем: ";
			echo $ro['fname']; echo " ";
			echo $ro['mname']; echo " ";
			echo $ro['lname']; echo ".<br><br><br>";
		}
		else
		{
			echo "Файл не подписан<br><br>";
		}
}
		?>		  
								<form method="post" role="form">
                                     <div class="form-group">
                                            <input type="text" name="sign" id="sign"class="form-control" placeholder="Введите подпись" required autofocus/><br>
											<button type="submit" id="submit" name="check" class="btn btn-primary">Проверить по подписи</button>
                                        </div></form><br><br>
										<form method="post" enctype='multipart/form-data'>
          
Выберите файл: <input type='file' class="btn btn-primary" name='filename' size='10' /><br /><br />
<input class="btn btn-primary " type='submit' value='Проверить по файлу' name="down" id="down" />
</form>
</div></div></div></div></div>
  
  
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
