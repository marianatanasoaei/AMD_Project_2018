<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Inregistrati-vă pe site-ul nostru</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Introduceti datele:</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Nume de utilizator</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Parola</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirmare parola</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Înregistrați-vă</button>
  	</div>
  	<p>
  		Sunteți deja un membru al site-ului nostru? <a href="login.php">Autentificati-va aici!</a>
  	</p>
  </form>
</body>
</html>