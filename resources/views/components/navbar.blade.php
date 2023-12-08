<!DOCTYPE html>
<html lang="pt-BR">
<head>
	@yield('navbar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorens Cuscan Alcala </title>
    <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Lorens Portfolio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- scripts --> 
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
				<label>
				<input type="checkbox" id="myCheckbox" style="display: none;" />
				<div  class="switch-btn" for="myCheckbox"></div>
				<span class="left-text">pt-BR</span>
				<span class="left-text">en-US</span>
				</label>
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Sobre</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('portifolio') }}">Portfolio</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>


	<!--================ End Header Area =================-->

	

	<script>

		
    $(document).ready(function() {
        $('#myCheckbox').change(function() {
            var language = $(this).is(':checked') ? 'en-us' : 'pt-br';
            $('.nav-item a').each(function() {
                var href = $(this).attr('href');
                $(this).attr('href', '/' + language + href.substr(3));
            });
        });
    });
	</script>

<script>
    $(document).ready(function() {
        alert("jQuery está funcionando!");
        
        $('#myCheckbox').change(function() {
            alert("Checkbox mudou!");
            
            var language = $(this).is(':checked') ? 'en-us' : 'pt-br';
            
            $('.nav-item a').each(function() {
                var href = $(this).attr('href');
                alert("index" + href);
                
                $(this).attr('href', '/' + language + href.substr(3));
                
                var newHref = $(this).attr('href');
                alert("index/en-us" + newHref);
            });
        });
    });
</script>

</body>
</html>