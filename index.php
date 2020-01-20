<!DOCTYPE html>
<html>
<head>
	<title>My Biodata - Tugas Dicoding</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="run">
		<marquee scrolldelay="70" title="greating">Selamat datang di website Ade Hasanudin, ini merupakan tugas pembuatan web oleh Dicoding.com</marquee>
	</div>
	<div class="container">
		
		<div class="header">
			<h2>Welcome to My Website</h2>
			<p>Dalam website ini kita akan belajar dari non sampai mahir memuat website dengan bahasa HTML, PHP, CSS, JS, BOOTSTRAP dll.</p>
		</div>
		<div class="menu">
			<ul>
				<li class="tama"><a href="?page=home">Home</a></li>
				<li class="tama"><a href="?page=news">News</a></li>
				<li class="tama"><a href="?page=about">About Me</a></li>
			</ul>    
		</div>
		<div class="content">
			<?php
			$page = @$_GET['page'];
			if($page == "home"){
				include "halaman/home.php";
			}else if($page == "news"){
				include "halaman/news.php";
			}else if($page == "about"){
				include "halaman/about.php";
			}else{
				include "halaman/home.php";
			}
			?>
		</div>
		<div class="footer">
			<p>Copyright 2019 - Ade Hasanudin</p>
		</div>
	</div>
</body>
</html>