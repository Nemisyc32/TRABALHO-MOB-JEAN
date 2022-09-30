<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Corsy - Propriedades Digitais</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/flaticon/flaticon.css') }}">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
<body>
	<!--================Header Menu Area =================-->
	<header class="header_area">
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
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item active"><a class="nav-link" href="index.html">Inicio</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us.html">Sobre nós</a></li>
							<li class="nav-item"><a class="nav-link" href="gallery.html">Avaliações</a>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Informações</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="price.html">Equipe</a>
									<li class="nav-item"><a class="nav-link" href="games.html">Midias Sociais</a>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Detalhes do Blog</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contato</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="{{ route('login') }}" class="primary_btn">PAINEL</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="home_left_img">
							<img class="img-fluid" src="img/banner/home-left.png" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner_content">
							<h2>
								Somos a melhor empresa para <br>
                                vender sua propriedade digital
							</h2>
							<p>
								Nunca foi tão facil vender sua propriedade digital com segurança. Trazemos segurança e transparência em suas vendas, com disponibilizade de acomapanhamento de nossos agentes. Compramos seu canal do youtube monetizado e mais.
							</p>
							<div class="d-flex align-items-center">
								<a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=vParh5wE-tM">
									<span></span>
								</a>
								<div class="watch_video text-uppercase">
									Assista o nosso video
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Start About Us Area =================-->
	<section class="about_us_area section_gap_top">
		<div class="container">
			<div class="row about_content align-items-center">
				<div class="col-lg-6">
					<div class="section_content">
						<h6>Sobre nós</h6>
						<h1>A sua propriedade digital</h1>
						<p>A nossa empresa foi desenvolvida a partir do ano de 2022. Nosso objetivo e facilitar a venda de propriedades digitais em vários aspectos, melhorando a segurança de venda com nossos agentes sempre presente.</p>
						<a class="primary_btn" href="#">Leia...</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_us_image_box justify-content-center">
						<img class="img-fluid w-100" src="{{ asset('img/about_img.png') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End About Us Area =================-->

	<!--================First Upcoming Games Area =================-->
	<section class="upcoming_games_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>PROPRIEDADES DIGITAIS ATIVAS</h2>
						<h1>PROPRIEDADES DIGITAIS ATIVAS</h1>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/b_map1.png" alt="">
						<div class="upcoming_title">
							<h3><a href="games.html">Youtube</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/b_map2.png" alt="">
						<div class="upcoming_title">
							<h3><a href="games.html">Instagram</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/b_map3.png" alt="">
						<div class="upcoming_title">
							<h3><a href="games.html">TikTok</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Upcoming Games Area =================-->

	<!--================Start Recent Update Area =================-->
	<section class="recent_update_area section_gap">
		<div class="container">
			<div class="recent_update_inner">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
							Canal do Youtube
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
						 aria-selected="false">
							TikTok
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
						 aria-selected="false">
							Instagram
						</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/youtube.png" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>Sobre</h6>
									<h1>Sobre a nossa compra de canais do youtube</h1>
									<p>Sim, isso mesmo. Compramos canais do youtube monetizados, infelizmente apenas compramos canais monetizados no momento, mas você pode postar seu canal não monetizado dentro de nosso site se assim desejar.</p>
									<a class="primary_btn" href="#">Ler mais...</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/tiktok.png" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>TikTok</h6>
									<h1>Sobre a venda de contas do TikTok</h1>
									<p>Isso mesmo, também trabalhamos com vendas de contas TikTokers. Quer começar a ser um TikToker com um engajamento alto? Está no lugar certo, estamos sempre trabalhando para trazer melhores qualidade de contas com engajamentos do baixo ao alto.</p>
									<a class="primary_btn" href="#">Leia mais...</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/instagram.png" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>Instagram</h6>
									<h1>Sobre a venda de contas do Instagram</h1>
									<p>Também trabalhamos com vendas de contas do instagram, tentando trazer as mais variedades tipos de contéudos para nosso clientes.</p>
									<a class="primary_btn" href="#">Leia mais...</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Recent Update Area =================-->


	<!--================ Start Gallery Area =================-->
	<section class="gallery_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>REDES SOCIAIS TRABALHADAS</h2>
						<h1>REDES SOCIAIS TRABALHADAS</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="single-gallery">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/youtube.png" alt="">
								<div class="content">
									<a class="pop-up-image" href="img/youtube.png">
										<i class="lnr lnr-eye"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="single-gallery">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/instagram.png" alt="">
								<div class="content">
									<a class="pop-up-image" href="img/instagram.png">
										<i class="lnr lnr-eye"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 hidden-md hidden-sm">
					<div class="single-gallery">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="img/tiktok.png" alt="">
						<div class="content">
							<a class="pop-up-image" href="img/tiktok.png">
								<i class="lnr lnr-eye"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Gallery Area =================-->
	<!--================ Start Frequently Asked Questions Area ================-->
	<section class="frequently_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Perguntas Frequentes</h2>
						<h1>Perguntas Frequentes</h1>
					</div>
				</div>
			</div>
			<div class="row frequent_inner">
				<div class="col-lg-5 col-md-5">
					<div class="frequent_item">
						<h3>Como posso vender meu canal por vocês?</h3>
						<p>Quando você realiza o cadastro dentro do nosso site, e realiza o login. Você será redirecionado para o painel de usuário com um botão grande escrito "Vender", você deve inserir todos os dados da sua conta que lhé foi pedido.</p>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5">
					<div class="frequent_item">
						<h3>Como funciona a venda?</h3>
						<p>Ao realizar o pedido de venda do seu canal, inserindo todas as informações corretamente. Iremos pedir um prazo de até 5 dia úteis para realizar a analise, a analise podendo ser ate no mesmo dia. Após a analise, iremos oferecer você um valor pela sua propriedade.</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-5">
					<div class="frequent_item">
						<h3>O que acontece com meus dados da conta?</h3>
						<p>Todos os dados informados são colocados separadamente do nosso site, e os dados de acessos são automaticamente criptografados.</p>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5">
					<div class="frequent_item">
						<h3>Quanto e a comissão de vocês?</h3>
						<p>A nossa comissão e de ate 10% do valor da propriedade! Dependendo da moeda que está ocorrendo a transação.</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-5">
					<div class="frequent_item last-child">
						<h3>Como posso comprar uma propriedade?</h3>
						<p>Entre em contato com algum dos nossos agentes, que eles irão lhe orientar.</p>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5">
					<div class="frequent_item last-child">
						<h3>O depósito é reembolsável?</h3>
						<p>Sim. Depois de fazer o depósito, o comprador tem acesso a todas as métricas da propriedade. Se depois de realizar a sua análise decidir não avançar com a compra o depósito será devolvido. Caso decida comprar a propriedade o valor do depósito será descontado do valor total da propriedade.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Frequently Asked Questions Area ================-->

	<!--================ Start Blog Area ================-->
	<section class="blog_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Últimas postagens do blog</h2>
						<h1>Últimas postagens do blog</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="blog_items">
						<div class="blog_img_box">
							<img class="img-fluid" src="img/youtube.png" alt="">
						</div>
						<div class="blog_content">
							<a class="title" href="blog.html">Como funciona a avaliação do seu canal!</a>
							<p>O canal e passado por várias etapas para termos um valor correto do valor do seu canal. Isso pode levar de 24h a 72h ...</p>
							<div class="date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>28 de Maio </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog_items">
						<div class="blog_img_box">
							<img class="img-fluid" src="img/TikTok.png" alt="">
						</div>
						<div class="blog_content">
							<a class="title" href="blog.html">Quanto mais alcance melhor!</a>
							<p>Você que deseja vender seu canal do TikTok, você precisa saber que quanto mais engajamento seu canal tiver melhor o valor de venda dele ...</p>
							<div class="date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>28 de Maio </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 hidden-md">
					<div class="blog_items">
						<div class="blog_img_box">
							<img class="img-fluid" src="img/instagram.png" alt="">
						</div>
						<div class="blog_content">
							<a class="title" href="blog.html">Seguidores aumenta muito o valor?</a>
							<p>Na maioria dos casos ouvimos perguntas se muito seguires influenciam no valor da sua conta do Instagram, mas va...</p>
							<div class="date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>28 de Maio </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Blog Area ================-->

	<!--================ Start Newsletter Area ================-->
	<section class="newsletter_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="newsletter_inner">
						<h1>Assine nosso boletim informativo</h1>
						<p>Não enviaremos nenhum tipo de spam.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<aside class="newsletter_widget">
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu endereço de email'"
									 required="" type="email">
									<button class="btn primary_btn">Se inscrever</button>
								</div>
							</form>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Newsletter Area ================-->

	<!--================Footer Area =================-->
	<footer class="footer_area section_gap_top">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Sobre Corsy</h4>
						</div>
						<ul>
							<li><a href="#"></a>Avaliações</a></li>
							<li><a href="#"></a>Como funciona</a></li>
							<li><a href="#"></a>Corsy Blog</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Companhia</h4>
						</div>
						<ul>
							<li><a href="#"></a>Sobre nós</a></li><a href="#">
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Suporte</h4>
						</div>
						<ul>
							<li><a href="#"></a>Contato</a></li><a href="#">
							<li><a href="#"></a>Avaliação</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Legal</h4>
						</div>
						<ul>
							<li><a href="#"></a>Termos e Condições</a></li><a href="#">
							<li><a href="#"></a>Política de Privacidade</a></li>
						</ul>
					</aside>
				</div>
			</div>
			<div class="row single-footer-widget">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="copy_right_text">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Este modelo é feito com <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="social_widget">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/stellar.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendors/isotope/isotope-min.js') }}"></script>
        <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('vendors/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/mail-script.js') }}"></script>

    </body>
</html>
