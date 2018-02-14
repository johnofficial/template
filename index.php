<!DOCTYPE html>
<html>
<head>
	<title>Personal shit</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<style>
      /* Ensure elements are hidden while ScrollEntrance is loading */
      [data-entrance] { visibility: hidden; }
</style>
</head>
<header class="bgc-white">
	<div class="header-wrap">
	<div class="logo color-black">
		<img src="assets/img/logo.png">
	</div>
	<div class="navbar">
		<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active color-black" href="#">Welcome</a>
  </li>
  <li class="nav-item">
    <a class="nav-link color-black" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link color-black" href="#">Contact</a>
 </li>
</ul>
</div>
</div>
</header>
<body class="bgc-yellow">
<div class="container">
	<div class="text-section">
<p><?php include 'assets/text/randomtext.html' ?> 
</p>
</div>
<div class="image-section">
	<div class="ja"></div>
</div>
</div>
<div class="features">
<div class="features-text bgc-white" data-entrance="fade">
	<div class="featurestext">
	<?php include 'assets/text/feature-text.html' ?>
    </div>
</div>
<div class="usluge bgc-white color-black" data-entrance="from-bottom">
	<div class="usluga"><p><?php include 'assets/text/bug.html' ?> </p></div>
	<div class="usluga"><p><?php include 'assets/text/android.html' ?> </p></div>
	<div class="usluga"><p><?php include 'assets/text/suitcase.html' ?> </p></div>
</div>
<div class="usluge bgc-white color-black" data-entrance="from-bottom">
	<div class="usluga"><p><?php include 'assets/text/motorcycle.html' ?> </p></div>
	<div class="usluga"><p><?php include 'assets/text/translate.html' ?> </p></div>
	<div class="usluga"><p><?php include 'assets/text/store.html' ?> </p></div>
</div>
</div>
<div class="footer bgc-black color-white">
	<div class="keep-in-touch">
		<?php include 'assets/text/keeptext.html' ?>
	</div>
	<div class="leavemail">
	<input class="form-control" id="inputdefault" type="text" align="center" placeholder="Your e-mail here:">
	<button type="button" class="btn bgc-yellow">Contact me!</button>
	</div>
	<div class="contact">
		<img src="assets/img/gmail.png" class='contactlogo'>
		<img src="assets/img/ig.png" class='contactlogo'>
		<img src="assets/img/facebook.png" class='contactlogo'>
	</div>
	<div class="footer-links">
		<ul class="links">
  <li class="links-item">
    <a class="links-link" href="#">Help</a>
  </li><li class="links-item">
    <a class="links-link" href="#">Poor</a>
  </li>
  <li class="links-item">
    <a class="links-link" href="#">Rich</a>
  </li>
  <li class="links-item">
    <a class="links-link" href="#">Homie</a>
  </li>
	</ul>
	<ul class="links">
  <li class="links-item">
    <a class="links-link" href="#">Service</a>
  </li>
  <li class="links-item">
    <a class="links-link" href="#">Xenia</a>
  </li>
  <li class="links-item">
    <a class="links-link" href="#">Marko</a>
  </li>
  <li class="links-item">
    <a class="links-link" href="#">Savke</a>
  </li>
	</ul>
	<ul class="links">
  <li class="links-item">
    <a class="links-link" href="#">Products</a>
  </li>
  <li class="links-item">
    <a class="links-link" href="#">Glass</a>
  </li>
  <li class="links-item">
    <a class="links-link" href="#">Spoon</a>
  </li>
  <li class="links-item">
    <a class="links-link" href="#">Phone</a>
  </li>
	</ul>
	<ul class="links">
  <li class="links-item">
    <a class="links-link" href="#">Welcome</a>
  </li>
  <li class="links-item">
    <a class="links-link" href="#">About</a>
  </li>
  <li class="links-item">
    <a class="links-link" href="#">Home</a>
  </li>
  <li class="links-item">
    <a class="links-link" href="#">Security</a>
  </li>
	</ul>
	</div>
</div>
	<script type="text/javascript" src="assets/js/scroll-entrance.js"></script>
</body>
</html>