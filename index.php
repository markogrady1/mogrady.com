<?php 
require __DIR__.'/vendor/autoload.php';

use App\Controllers\HomeController as Home;
$msg = new Home("construction");
?>
<html>
<head>
	<title>Mogrady | Home</title>
	<meta charset="UTF-8" />
	<meta name="author" content="Mark O Grady" />
	<meta name="copyright" content="Mark O Grady" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="Viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<script   src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="public/img/pro_pic_30_30.ico">
</head>
<body>
	<header>
		<a href="" class="logo">Mark O Grady</a>
		<ul class="nav-menu">
			<li><a href="">About</a></li>
			<li><a href="">Blog</a></li>
			<li><a href="">Contact Me</a></li>
			<li></li>
		</ul>	
<div class="bar-wrp">
<div class="bars" title="Sample"></div></div>
	</header>
		<div class="main-img-wrap">
		<img class="main-home-img" src="public/img/clear_dot.gif">
			<p class="blk-band band">Mark O Grady</p>   
			<p class="blk-band2 band">Software Developer</p>   
			<p class="blk-band3 band"><div class=blk-band4>View Blog</div></p>  
		</div>
	<div class="scrolling-content">
		<img src="public/img/arrow_up.png" alt="" class="arrow-up"/>
		&nbsp; <h1 class="whoami">Who Am I </h1>
		<div class="intro-wrap">
			<div class="set-1">
				<img src="public/img/moi_pic.jpg" alt="" class="my-image"/>
			</div>
			<div class="set-2">
				<div class="intro"><p class="intro-para"><?php
				
				echo $msg->getIntroduction(1);
				
				?></p><p class="intro-para">I am currently freelancing my services on various projects. I am also a Git fanatic, and my acccount can be found <a href="https://github.com/markogrady1" target="__blank">here </a>on GitHub.</p></div>
			</div>
	<div class="clear"></div>
		</div>
		<?php 
		
		$m = $msg->getMessage();
		echo $m;
		 ?>
		 	<script src="public/js/index.js"></script>

</body>
</html>
