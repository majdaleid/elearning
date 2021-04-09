<!DOCTYPE HTML>
 <html lang="{{ app()->getLocale() }}">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="/frontend/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/frontend/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/frontend/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/frontend/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/frontend/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/frontend/css/style.css">

	<!-- Modernizr JS -->
	<script src="/frontend/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
  <!---navbar from navabaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaar includes-navbar-->
  @include('includes.navbar')
 


  <!--end of the header -->
<!-- start content -->
@yield('content')
<!--end content -->
<!-- start footer -->
	<div id="fh5co-started" style="background-image:url(/frontend/images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Lets Get Started</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">Create A Free Course</a></p>
				</div>
			</div>
		</div>
	</div>

  @include('includes.footer')

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="/frontend/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/frontend/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/frontend/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/frontend/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="/frontend/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="/frontend/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="/frontend/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="/frontend/js/jquery.magnific-popup.min.js"></script>
	<script src="/frontend/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="/frontend/js/main.js"></script>

	</body>
</html>
