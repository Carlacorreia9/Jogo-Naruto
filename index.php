<?php
$zip_filename = "/var/www/html/";
$saida = '';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/login.css">

  <script defer src="js/login.js"></script>
  <link rel="shortcut icon" href="./image/icone.png" type="image/x-icon">
  <title>Jogo da Memoria Naruto | Login</title>
</head>
<body>
	<div class="wrapper">
	<form class="login-form">
        <div class="login__header">
        <img src="image/png-transparent-naruto.png" alt="logo">
        <img src="image/equipe naruto.png" alt="brain icon">
        <h1>Jogo da Memoria Naruto</h1>
        </div>

        <input type="text" placeholder="Name" class="login__input">
        <button type="submit" class="login__button">Play</button>
  </form>
	
		<?php
		if (isset($_POST['submit'])) {
			$url = $_POST['website'];
			$pasta = $_POST['website_2'];
		}
		?>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
