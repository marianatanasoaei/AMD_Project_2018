<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Acasa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Acasa</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
	
	<?php  if (isset($_SESSION['username'])) : ?>
    	<p>Bună <strong><?php echo $_SESSION['username']; ?> !
    <?php endif ?>
		<?php if( ($_SESSION['username'])===('admin') || ($_SESSION['username'])==('student')) {  ?> 
		<p> Accesul pentru tine este autorizat! </p>
	 </strong><h1><a href="index1.html"></h1>Acces site:</p>
		<?php } ?>
		<?php if( ($_SESSION['username'])<>(('admin')  || ('student') )) {  ?> 
			<!--</strong><h1><a href="login.php"></h1>Accesul pentru tine este interzis!</p>-->
			<p> Accesul pentru tine este interzis! </p>
		<?php } ?>
    <!-- logged in user information -->
	<p> <a href="index.php?logout='1'" style="color: red;">Deconectati-va!</a> </p>
</div>