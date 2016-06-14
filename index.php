<?php 
require __DIR__.'/vendor/autoload.php';

use App\Controllers\HomeController;
use App\Lib\Plugin;
use App\Lib\Config\Config;

$msg = new Plugin("markogrady1", 15, "My Repos", new Config());
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
    <link rel="stylesheet" type="text/css" href="public/css/widgit.css">

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
				<div class="intro"><p class="intro-para">My name is Mark O Grady. I am a recent Computer Science graduate. Also first and foremost, I am very passionate	about sofware development. I find it absolutely fascinating that almost anything is possible, with the implementation of a bit of code.</p><p class="intro-para">I am currently freelancing my services on various projects. I am also a Git fanatic, and some of the repositories in my GitHub account can be seen below.</p></div>
			</div>
	<div class="clear"></div>
		</div>


        <div class="repo-list">

		<?php


		$repoData = $msg->getData(true);
        echo $repoData;
?>
            </div>

        <div class="twit-feed"><a class="twitter-timeline" width="500px" height="300"  href="https://twitter.com/mark_o_grady" data-theme="dark" data-link-color="#a9a9a9">Tweets by mark_o_grady</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
		 	<script src="public/js/index.js"></script>

</body>
</html>
