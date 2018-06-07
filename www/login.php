<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Autentificare site echipa AMD</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Autentificare</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Introduceti numele de utilizator:</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Introduceti parola:</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Autentificare</button>
  	</div>
  	<p>
  		Nu sunteți membru site-ului nostru? <a href="register.php">Va puteti crea un cont aici dar trebuie sa asteptati aprobarea noastra pentru acces!</a>
  	</p>
  </form>
</body>
</html>