<!DOCTYPE html>
<html lang="pt-BR">
	<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
        .custom-margin {
            margin-top: -140px; /* Ajuste o valor conforme necessário */
        }
    </style>
<body>
<!--================ Start Header Area =================-->
@include('components.navbar')

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<br><br><br><br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						
						<div class="banner_content">
						
							<h3 class="intro-text">Olá,</h3>
							
							<h1 class="animate__animated animate__bounceInLeft">Lorens Cuscan</h1>

							
							<h5 class="text-uppercase">Desenvolvedor Fullstack PHP</h5>

							
													
							<div class="d-flex align-items-center">

							
								
								<a class="primary_btn" href="https://wa.me/5511965453930?"><span>Entre em contato!</span></a>
								<a class="primary_btn tr-bg" href="{{ route('curriculo') }}"><span>Projetos!</span></a>
							</div>
						</div>
					</div>
				
				
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<section class="banner_vertical_area">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <!-- Conteúdo principal -->
            <div class="col-lg-6">
                <!-- Seu conteúdo existente -->
            </div>
            <div class="col-lg-5">
                <div class="position-relative">
                    <!-- A imagem do banner vertical -->
                    <img src="images/banner/vertical-banner.webp" alt="Banner Vertical" class="vertical-banner">
                </div>
            </div>
        </div>
    </div>
</section>


	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap">		
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-1">
				<div class="offset-lg-8 col-lg-12 col-md-8">
							<div class="custom-margin">
								<div class="client-info">
							
								
								</div>
							</div>
							</div>
					
				</div>
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="img/about-us.png" alt="">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-5">
					<div class="main_title text-left">
						<h2>Quem Sou Eu?<br>
							 <br></h2>
						<p>
							<div class="about-me-text">
						Com uma base sólida, um olhar perspicaz e uma abordagem proativa, estou preparado para enfrentar desafios complexos e superar obstáculos. Meu compromisso é trazer inovação, qualidade e eficiência para cada projeto que abraço.
						</p>
						<p>
						Estou comprometido em oferecer não apenas soluções, mas sim experiências transformadoras. Meu compromisso é entregar não apenas um produto final, mas sim uma solução que ultrapasse as expectativas, impactando positivamente a vida e os negócios dos meus clientes.
						</p>
						<a class="primary_btn" href="{{ route('curriculo') }}"><span>Download Curriculo</span></a>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</section>
	<!--================ End About Us Area =================-->


	<img class="programmer" style="max-width: 100%" src="images/animations/programmer.gif"></img>

	
	<!--================ Srart Brand Area =================-->
	
	
	<!--================ End Brand Area =================-->
	<!--================ Start Features Area =================-->
	<section class="features_area">
		<div class="container-cards">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="services-text">
						<h3>Serviços oferecidos </h3><br><br>
					</div>
				</div>
			</div>
			<img src="images/banner/service-banner.webp" class="service-banner">
			<div class="row feature_inner">
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						
						<h4>data engineer</h4>
						<p>
Possuo vasta experiência em bancos de dados relacionais e não relacionais, demonstrando competência na estruturação e manipulação de dados em ambientes diversos. Minha trajetória abrange projetos sólidos em ambos os tipos de bancos</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s2.png" alt="">
						<h4>Web design</h4>
						Tenho domínio em Vue.js, um framework ágil e dinâmico para construir interfaces responsivas e modernas, permitindo criar soluções inovadoras e eficientes para os usuários.	</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s3.png" alt="">
						<h4>Responsividade</h4>
						<p>
Tenho proficiência na biblioteca JavaScript, capacitando-me a desenvolver funcionalidades interativas, dinâmicas e com alta responsividade em aplicações web de forma eficaz e ágil.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s4.png" alt="">
						<h4>PHP developing</h4>
						<p>
Possuo experiência sólida em PHP Laravel, capacitando-me a criar aplicativos web robustos, seguros e altamente escaláveis, mantendo um código limpo e de fácil manutenção.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="projects-text text-left">
						<h2>Alguns dos <br>
							meus projetos mais recentes </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
			</div>
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<div class="col-lg-4 col-md-6 all latest">
					<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p1.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p1.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Locadora de Carros</a></h4>
								<p>Vue.js, PHP</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p2.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p2.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">App Super gestão</a></h4>
								<p>Laravel</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p3.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p3.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Sismat</a></h4>
								<p>Laravel, CSS, Bootstrap</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/p4.jpg" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p4.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
	<!--================End Portfolio Area =================-->
	<!--================ Start Testimonial Area =================-->
  <div class="testimonial_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-15 text-center">
					<div class="main_text">
						<h2>Quem testou e aprovou</h2>
					</div>
				</div>
			</div>
		<div class="row row-cols-1 row-cols-md-3 g-7">
  <div class="col">
    <div class="card">
      <img src="images/testimonials/ft1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/testimonials/ft2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/testimonials/ft3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/testimonials/ft4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
	<!--================ End Newsletter Area =================-->

	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="img/logo.png" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

<div class="client-info">
									<span class="lage">4</span>
									<span class="smll">Anos desenvolvendo soluções que redefinem possibilidades! </span><br>
								
								</div>