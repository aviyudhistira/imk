<?php
 session_start();
 if(!isset($_SESSION['username'])) {
  header("Location: index.php?access_denied");
 }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header">
	<div id="menu" class="container">
		<ul>
			<li class="current_page_item"><a href="index.html" accesskey="1" title="">Homepage</a></li>
			<li><a href="jurusan.html" accesskey="1" title="">Jurusan</a></li>
			<li><a href="about.html" accesskey="3" title="">About Us</a></li>
			<li><a href="register.php" accesskey="3" title="">SIGN UP</a></li>
			<li><a href="login1.php" accesskey="3" title="">LOG IN</a></li>
			<li><a href="logout.php" accesskey="3" title="">Log Out</a></li>
		</ul>
	</div>
</div>
<div id="logo" class="container">
	<h1><a href="learning.com" class="icon icon-tasks"><span>Tempat belajar online
yang Lengkap, Seru, dan Bikin Ketagihan</span></a></h1>
</div>
<div id="page" class="container">
	<div id="content">
		<div class="title">
			<h2>Welcome to Learning</h2>
			<span class="byline">Ujian Itu Mudah</span>
		</div>
		<p>Ini Adalah Sebuah Website  <strong>Learning</strong>, yang memakai konsep dan fitur yang sangat menarik dan mudah di <a href="index.html" rel="nofollow">gunakan</a>.Website Ini menggunakan suber yang tepercaya seperti <a href="http://video.quipper.com">Quipper</a> dan<a href="http://ruangguru.com/"> Ruang Guru </a>.</p>
	</div>
	<div id="sidebar"><a href="#" class="image image-full"><img src="images/1.png" alt="" /></a></div>
</div>
<div id="featured-wrapper">
	<div id="featured" class="container">
		<div class="major">
			<h2><a href="#" class="image image-full"><img src="images/1.png" alt="" /></a></h2>
			<span class="byline">Website ini Di Dukung Oleh :</span>
		</div>
		<div class="column1">
			<span class=""><a href="#" class="image image-full"><img src="images/s1.png" alt="" /></a></span>
			<div class="title">
				<h2>Quipper School</h2>
				<span class="byline">Belajar itu Mudah</span>
			</div>
		</div>
		<div class="column2">
			<span class=""><a href="#" class="image image-full"><img src="images/s2.png" alt="" /></a></span>
			<div class="title">
				<h2>Ruang Guru</h2>
				<span class="byline">Belajar Itu Asik</span>
			</div>
		</div>
		<div class="column3">
			<span class=""><a href="https://ristekdikti.go.id" class="image image-full"><img src="images/s3.png" alt="" /></a></span>
			<div class="title">
				<h2>Ristekdikti</h2>
				<span class="byline">Tetap Semangat Demi Masa Depan</span>
			</div>
		</div>
		<div class="column4">
			<span class=""><a href="https://www.zenius.net/" class="image image-full"><img src="images/s4.png" alt="" /></a></span>
			<div class="title">
				<h2>Zenius</h2>
				<span class="byline">Kerja Keras Yang Utama</span>
			</div>
		</div>
	</div>
</div>
<div id="portfolio-wrapper">
	<div id="portfolio" class="container">
		<div class="major">
			<h2>TEMUKAN MATERI PELAJARAN DI SINI</h2>
			<span class="byline">Terus Memberi Dan Selalu Berbagi Bersama Kami</span>
		</div>
		<div class="column1">
			<a href="#" class="image image-full"><img src="images/mtk.jpg" height="150" alt="" /></a>
			<div class="box">
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="button">Read More</a>
			</div>
		</div>			
		<div class="column2">
			<a href="#" class="image image-full"><img src="images/bindo.jg" height="150" alt="" /></a>
			<div class="box">
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="button">Read More</a>
			</div>
		</div>			
		<div class="column3">
			<a href="#" class="image image-full"><img src="images/english.jpg" height="150" alt="" /></a>
			<div class="box">
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="button">Read More</a>
			</div>
		</div>			
		<div class="column4">
			<a href="#" class="image image-full"><img src="images/pic04.jpg" height="150" alt="" /></a>
			<div class="box">
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="button">Read More</a>
			</div>
		</div>			
	</div>
</div>
<div id="contact" class="container">
		<div class="major">
			<h2>HUBUNGI KAMI</h2>
			<span class="byline">Silahkan Hubungi Kami Dari Berbagai Media Di Bawah Ini</span>
		</div>
		<ul class="contact">
			<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
			<li><a href="#" class="icon icon-facebook"><span></span></a></li>
			<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
			<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
			<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
		</ul>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://learning.com" rel="nofollow">TEMPLATED</a> |Hak Cipta Website E-Learnig Di Lindungi Oleh Hukum.</p>
</div>
</body>
</html>



</body>
</html>