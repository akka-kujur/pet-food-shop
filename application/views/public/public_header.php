<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>dog food</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?= base_url("Assets/home_assets/css/bootstrap.min.css") ?>">

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="<?= base_url("Assets/home_assets/css/slick.css") ?>">
		<link type="text/css" rel="stylesheet" href="<?= base_url("Assets/home_assets/css/slick-theme.css") ?>">

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?= base_url("Assets/home_assets/css/nouislider.min.css") ?>">

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?= base_url("Assets/home_assets/css/font-awesome.min.css") ?>">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?= base_url("Assets/home_assets/css/style.css") ?>">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i>8827276044-8435877219</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> akka5796kujur@gmail.com</a></li>
						<!-- <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li> -->
					</ul>
					<!-- <ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul> -->
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="Assets/home_assets/img/logo.png" width="120px" height="80px" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Dog</option>
										<option value="2">Fish</option>
										<option value="3">Cat</option>
										<option value="4">Birds</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="admin.php">
										<i class="fa fa-user-o"></i>
										<span>Account</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">3</div>
									</a>