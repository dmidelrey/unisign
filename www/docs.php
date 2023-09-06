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
      
    </header><center>
	<br><br><br><br><div class="container">
									<form method="post">
									<div class="table-responsive">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
										<thead>
										  <tr>
												
												<th><center>Имя</center></th>
												<th><center>Hash</center></th>
												<th><center>Подпись</center></th>
												
										   </tr>
										</thead>
										<tbody>
													<?php 
						$id=$_SESSION['login'];
						$query=mysql_query("SELECT doc_id, name, hash, filename, sign FROM docs WHERE login = '$id' ORDER BY doc_id")or die(mysql_error());
						while($row=mysql_fetch_array($query)){
						$name = $row['name'];
						$hash = $row['hash'];
						$sign = $row['sign'];
						$filename = $row['filename'];
						?>
												<tr>
												
												
												<td><center><a href="<?php echo $filename; ?>"><?php echo $name; ?></a></center></td>
												<td><center><?php echo $hash; ?></center></td>
												<td><center><?php echo $sign; ?></center></td>
											
												
												
											
							</tr>
												<?php } ?>
										</tbody>
									</table>
									
									</div>
								</form><a href="add_doc.php" class="btn btn-primary btn-block">Добавить документ</a>
									<a href="checksign.php" class="btn btn-primary btn-block">Проверить подпись</a>
								<br><br><br><br><br><br><br><br></div>
								
                               
                       
    </div>
    </div>
    </div>
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
