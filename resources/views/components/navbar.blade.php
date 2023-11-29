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
	<title>Satner Portfolio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="/resources/demos/style.css">

	<!-- scripts --> 
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
		<script src="
	https://cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.js
	"></script>
	<link href="
	https://cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.css
	" rel="stylesheet">
	</head>

<body>
<header class="header_area">
<div class="language-toggle">
    <label for="language-slider">Selecione o idioma:</label>
    <div id="language-slider"></div>
    <span id="selected-language">Português</span>
</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
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

	<script>
    $(function() {
        let languages = ["Português", "Inglês"]; // Array de idiomas disponíveis
        let selectedLanguageIndex = 0; // Índice do idioma selecionado (0 para Português, 1 para Inglês)

        $("#language-slider").slider({
            min: 0,
            max: languages.length - 1,
            value: selectedLanguageIndex,
            slide: function(event, ui) {
                $("#selected-language").text(languages[ui.value]);
            },
            stop: function(event, ui) {
                // Quando o controle deslizante é solto, você pode adicionar a lógica para alternar o idioma
                let selectedLanguage = languages[ui.value];
                if (selectedLanguage === "Inglês") {
                    // Lógica para alterar para inglês
                  
                } else {
                    // Lógica para alterar para português ou outro idioma
                    
                }
            }
        });
    });
</script>
	<!--================ End Header Area =================-->
