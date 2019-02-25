<!DOCTYPE html>
<html lang="en">
<head>
	<title>Unica - University Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/themify-icons.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

@include ('Brytlayout.navbar')

@yield ('content')



	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('/js/jquery.countdown.js')}}"></script>
	<script src="{{asset('/js/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('/js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('/js/main.js')}}"></script>
	
    @include ('Brytlayout.footer')  
</body>
</html>