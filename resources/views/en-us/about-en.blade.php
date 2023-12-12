<!-- index.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	@yield('navbar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorens Cuscan Alcala </title>

</head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Lorens Portfolio</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">.
	
	<!-- scripts --> 
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
@include('components.navbar.navbar')
</body>
</html>