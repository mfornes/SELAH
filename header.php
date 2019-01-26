<!DOCTYPE HTML>
<html <?php language_attributes();?>>
	<head>
	<meta charset="<?php bloginfo('charset');?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" /> -->

  <!-- Facebook and Twitter integration -->
<!-- 	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" /> -->

	<!-- <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet"> -->
	
    <title><?php wp_title();?></title>
    <?php wp_head();?>

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="upper-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<p>The ideal WordPress theme for online learning center</p>
						</div>
						<div class="col-xs-6 col-md-push-2 text-right">
							<p class="btn-apply"><a href="#">Our Vision</a> <a href="#">Our Missions</a> <a href="#">Sign Up</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.html">Knowledge</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li class="has-dropdown">
									<a href="courses.html">Courses</a>
									<ul class="dropdown">
										<li><a href="courses-single.html">Courses Single</a></li>
										<li><a href="#">Mobile Apps</a></li>
										<li><a href="#">Website</a></li>
										<li><a href="#">Web Design</a></li>
										<li><a href="#">WordPress</a></li>
									</ul>
								</li>
								<li><a href="teachers.html">Teachers</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="event.html">Events</a></li>
								<li><a href="news.html">News</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li class="btn-cta"><a href="#"><span>Get started</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>