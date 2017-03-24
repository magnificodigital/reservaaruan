<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name') ?></title>

		<?php wp_head(); ?> 

		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/swiper.min.css">
		<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/favicon.png">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />

		<!--[if IE 7]>
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome-ie7.min.css">
		<![endif]-->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.scrollTo.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/swiper.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/swiper.jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/main.js"></script>

		<script type="text/javascript">
			$('[data-fancybox]').fancybox({
				youtube : {
					controls : 0,
					showinfo : 0
				},
				vimeo : {
					color : 'f00'
				}
			});
		</script>

		<!-- Início do script Omnize  -->
		<script>document.addEventListener('DOMContentLoaded',function(){var JSLink=location.protocol+'//widget.omnize.com',JSElement=document.createElement('script');JSElement.async=!0;JSElement.charset='UTF-8';JSElement.src=JSLink;JSElement.onload=OnceLoaded;document.getElementsByTagName('body')[0].appendChild(JSElement);function OnceLoaded(){wOmz.init({id:3666});}},false);</script> 
		<!-- Fim do script Omnize -->

		<!--Google Analytics-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-88685938-1', 'auto');
		  ga('send', 'pageview');

		</script>

	</head>
<body>

<header id="site" role="header">
	<div class="container">
		<h1 class="logo">
			<a href="#">
				<img src="<?php bloginfo('template_url') ?>/img/logo.png" title="Reserva Aruan" alt="Reserva Aruan">
			</a>
		</h1>
		<nav class="menu">
			<ul>
				<li><a href="#slider-home">O Empreendimento</a></li>
				<li><a href="#plantas">Plantas</a></li>
				<li><a href="#localizacao">Localização</a></li>
				<li><a href="#personalize">Personalize</a></li>
				<li><a href="#contato">Contato</a></li>
			</ul>
		</nav>
		<span class="menu-mobile">
			<i class="icon-reorder"></i>
		</span>
	</div>
</header>

<main id="content-site">
	<section id="row1" class="row-site bgParallax" data-speed="3">
		<div class="mask-white"></div>
		<div class="container">
			<div class="row">
				<div class="content-row col-lg-5 col-md-6">
					<header>
						<h2>Todos apartamentos com <strong>vista privilegiada do mar e da mata preservada</strong></h2>
						<h3>Cadastre-se e saiba mais</h3>
					</header>
					<div class="form-box">
						<form name="formcontato" method="post" id="formcontato">
							<p><input type="text" name="nome" placeholder="Nome:" required></p>
							<p><input type="text" name="email" placeholder="E-mail:" required></p>
							<p><input type="text" name="tel" placeholder="Telefone:" required></p>
							<p><button type="button" id="enviaform" class="btn-site btn-form">Garanta Esta Oportunidade <strong>></strong></button></p>
						</form>
					</div>
				</div>
				<div class="col-lg-7 col-md-6 hidden-sm-down">
					<a data-fancybox class="play-video" href="https://www.youtube.com/watch?v=eWocmw-iPaM">
						<!--<span class=""></span>-->
					</a>
					<!--<span class="open-lightbox play-video"></span>-->
				</div>
			</div>
		</div>
	</section>

	<section id="row2" class="row-site">
		<div class="container">
			<div class="row">
				<div class="content-row col-lg-5 col-md-6 col-sm-12">
					<article class="content-info">
						<p><strong>2  dormitórios</strong>(1suíte), <strong>salão de festas</strong>, salão de jogos, <strong>espaço fitness,</strong> spa e sauna.</p>
						<p><strong>60% das unidades vendidas</strong> área comum <strong>equipada e decorada.</strong></p>
						<a href="#plantas" class="btn-site btn2 ver-plantas">Ver plantas <strong>></strong></a>
					</article>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div id="photos-galery" class="galeria">
						<div class="swiper-container">
							<div class="swiper-wrapper">

								<div class="swiper-slide">
									<a href="<?php bloginfo('template_url') ?>/img/galeria/EKO-CARAGUA-02-ACADEMIA_00.jpg" data-fancybox="gallery1" class="galery">
										<img src="<?php bloginfo('template_url') ?>/img/galeria/thumb-EKO-CARAGUA-02-ACADEMIA_00.jpg" alt="slide">
									</a>
								</div>

								<div class="swiper-slide">
									<a href="<?php bloginfo('template_url') ?>/img/galeria/EKO-CARAGUA-02-LOUNGE_01.jpg" data-fancybox="gallery1" class="galery">
										<img src="<?php bloginfo('template_url') ?>/img/galeria/thumb-EKO-CARAGUA-02-LOUNGE_01.jpg" alt="slide">
									</a>
								</div>

								<div class="swiper-slide">
									<a href="<?php bloginfo('template_url') ?>/img/galeria/EKO-CARAGUA-02-SPA_03.jpg" data-fancybox="gallery1" class="galery">
										<img src="<?php bloginfo('template_url') ?>/img/galeria/thumb-EKO-CARAGUA-02-SPA_03.jpg" alt="slide">
									</a>
								</div>
		
							
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>

			</div>

				
		</div>

		<div class="clearfix"></div>

	</section>

	<!--slider-->
	<section id="slider-home">
		<div class="swiper-container slide-home">
			<div class="swiper-wrapper">
				
				<div class="swiper-slide" style="background: url('<?php bloginfo('template_url') ?>/img/slides/01.jpg') center; background-size: cover;" data-swiper-autoplay="4000" >
					<div class="container">
						<div class="col-md-6 content-row">
							<h2><strong>Salão de Festas e jogos</strong><br />Integração dos espaços</h2>
							<p>Manter a forma também será um momento de contemplar a vista privilegiada do mar.</p>
						</div>
					</div>
				</div>

				<div class="swiper-slide" style="background: url('<?php bloginfo('template_url') ?>/img/slides/02.jpg') center; background-size: cover;" data-swiper-autoplay="4000">
					<div class="container">
						<div class="col-md-6 content-row">
							<h2><strong>Espaço Fitness</strong><br />Exercício e bem estar sem sair de casa.</h2>
							<p>Manter a forma também será um momento de contemplar a vista privilegiada do mar.</p>
						</div>
					</div>
				</div>

				<div class="swiper-slide" style="background: url('<?php bloginfo('template_url') ?>/img/slides/03.jpg') center; background-size: cover;" data-swiper-autoplay="4000">
					<div class="container">
						<div class="col-md-6 content-row">
							<h2><strong>Spa e Sauna</strong><br />Renove sua energia</h2>
							<p>O <strong>SPA & SAUNA Reserva Aruan</strong> te levará ao ápice do bem estar.</p>
						</div>
					</div>
				</div>

				<div class="swiper-slide" style="background: url('<?php bloginfo('template_url') ?>/img/slides/04.jpg') center; background-size: cover;" data-swiper-autoplay="4000">
					<div class="container">
						<div class="col-md-6 content-row">
							<h2><strong>Sala de estar</strong><br />Reuna-se com pessoas especiais</h2>
							<p>Ambiente aconchegante e com vista privilegiada do mar e da mata preservada</p>
						</div>
					</div>
				</div>

				<div class="swiper-slide" style="background: url('<?php bloginfo('template_url') ?>/img/slides/05.jpg') center; background-size: cover;" data-swiper-autoplay="4000" >
					<div class="container">
						<div class="col-md-6 content-row">
							<h2><strong>Apenas 36 unidades</strong></h2>
							<p>Todas com vista para o mar.</p>
						</div>
					</div>
				</div>

			</div>
			<div class="swiper-pagination swiper-pagination-white"></div>
		</div>
	</section>

	<section id="plantas">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 content-row">
					<h4><strong>Plantas, 2 Dormitórios (1 suíte)</strong></h4>
						<!--
						<div class="col-md-4">
							<a href="#" class="btn1">Garanta Esta Oportunidade</a>
							<a href="#" class="btn2">Saiba mais</a>
						</div>
						-->
					<div class="swiper-container galery-plantas">
						<div class="swiper-wrapper">

							<div class="swiper-slide" data-swiper-autoplay="5000">
								<a href="<?php bloginfo('template_url') ?>/img/plantas/planta1.jpg" data-fancybox="gallery2" class="galery a-plantas">
									<img src="<?php bloginfo('template_url') ?>/img/plantas/planta1.jpg">
								</a>
							</div>

						</div>
						<div class="swiper-pagination"></div>
					</div>

					<ul>
						<div class="row">
						<li class="col-md-6 col-sm-6"><strong>Finais 01 e 02</strong> - 82,39 m²</li>
						<li class="col-md-6 col-sm-6"><strong>Finais 03 e 04</strong> - 75,46 m²</li>
						<li class="col-md-6 col-sm-6"><strong>Finais 91 e 92</strong> - 82,39 m²</li>
						<li class="col-md-6 col-sm-6"><strong>Finais 93 e 94</strong> - 82,39 m²</li>
						</div>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="localizacao">
		<div class="map">

			<div class="boxes">
				<div class="balao  nova-rodovia-de-acesso animated"></div>
				<div class="balao shopping-serra-mar animated"></div>
				<div class="balao centro-esportivo animated"></div>
				<div class="balao escola-municipal animated"></div>
				<div class="balao spani animated"></div>
				<div class="balao ciclovia animated"></div>
				<div class="logo-reserva animated infinite pulse"></div>
			</div>
			<div class="container">
				<div class="content-row col-lg-5">
					<h2><strong>Na melhor localização da cidade de Caraguatatuba</strong></h2>
					<p>Apenas a <strong>2km do Shopping SerraMar</strong><br />e com <strong>todos os Privilégios que você merece.</strong></p>
				</div>

				<div class="texto-vista col-lg-3 col-sm-12 center">
					<p>Todos com <strong>vista eterna e privilegiada do mar</strong></p>
				</div>
			</div>

		</div>
	</section>

	<section id="personalize">
		<div class="container">
			<div class="row">
				<div class="content-row col-lg-4 col-md-12">
					<img src="<?php bloginfo('template_url') ?>/img/logo-personalize.png" alt="Personalize" title="Personalize" style="margin-bottom: 50px;">
					<h2><strong>Você pode personalizar<br /> sua unidade</strong></h2>
					<!--<a href="#">Conheça o Personalize</a>-->
					<ul>
						<li><strong>Garantia</strong> em todos os serviços executados.</li>
						<li><strong>Evite gastar tempo</strong> buscando orçamentos, <br />Já encontramos o melhor para você.</li>
						<li><strong>Cuidamos de tudo!</strong> Inclusive dos entulhos, <br />Funcionários, qualidade e prazos.</li>
						<li><strong>Corpo técnico qualificado e experiente.</strong></li>
					</ul>
					
				</div>
			</div>
		</div>
	</section>

	<section id="contato" class="bgParallax" data-speed="30">
		<div class="container">
			<div class="row">
				<div class="content-row col-lg-8 col-md-6 col-sm-12">
					<h2><strong>Garanta esta oportunidade</strong></h2>
					<p><strong>Preencha o formulário ao lado</strong><br /> e saiba como aproveitar</p>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<aside id="form">
						<div class="content-row">
							<div class="form-box">
								<h3>Cadastre-se e saiba mais</h3>
								<form method="post" name="formcontato2" id="formcontato2">
									<p><input type="text" name="nome" placeholder="Nome:" required></p>
									<p><input type="email" name="email" placeholder="E-mail:" required></p>
									<p><input type="tel" name="tel" placeholder="Telefone:" required></p>
									<p style="margin-bottom: 0;">
										<button type="button" class="btn-tel">Clique para <strong>exibir o telefone</strong></button>
										<button type="button" class="btn-form" id="enviaform2">Enviar</button>
										<div class="clearfix"></div>
									</p>
								</form>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
</main>
<footer id="site">
	<div class="container">
		<ul>
			<li class="contact-us"><p><strong>Fale conosco</strong></p></li>
			<li><a href="http://www.ekoconstrutora.com.br/fale-conosco/" class="ico-mail" target="_blank"><p>Atendimento <span>por e-mail</span></p></a></li>
			<li><a href="http://www.ekoconstrutora.com.br/ligamos-para-voce/" class="ico-tel" target="_blank"><p>Ligamos <span>para você</span></p></a></li>
			<li><a href="http://www.ekoconstrutora.com.br/agende-uma-visita/" class="ico-agenda" target="_blank"><p>Agende <span>uma visita</span></p></a></li>
			<li><a href="#" class="ico-whatsapp" target="_blank"><p>Atendimento <span>via whatsapp</span></p></a></li>
		</ul>
	</div>
</footer>


<script type="text/javascript">

	var slider = new Swiper('.galeria .swiper-container', {
	    spaceBetween: 10,
	    loop:false,
	    slidesPerView: 2,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        breakpoints: {
        	480: {
		    	slidesPerView: 1,
		    	spaceBetween: 0
		    }
        }
	});

	var slider = new Swiper('.slide-home', {
	    spaceBetween: 0,
	    loop:true,
	    //autoplay: true,
	    slidesPerView: 1,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        speed: 750
	});

	var slider = new Swiper('.galery-plantas', {
	    //loop:true,
	    //autoplay: true,
	    slidesPerView: 1,
        pagination: '.swiper-pagination',
        paginationClickable: true,
	});

</script>

<script type="text/javascript">

	//adiciona a classe js no documento
	var root = document.documentElement;
	root.className += ' js';

	//Essa função é responsável por calcular a distância entre cada elemento que adicionarmos a classe anime e o topo da página
	function boxTop(idBox) {
		var boxOffset = $(idBox).offset().top;
		return boxOffset;
	}

	//inicia funcao
	$(document).ready(function() {
		//baloes do mapa
		var $target = $('.balao'),
				animationClass = 'bounceInDown',
				//animationClass2 = 'animated',
				windowHeight = $(window).height(),
				offset = windowHeight - (windowHeight / 4);

		function animeScroll() {
			var documentTop = $(document).scrollTop();
			$target.each(function() {
				if (documentTop > boxTop(this) - offset) {
					$(this).addClass(animationClass);
				} else {
					$(this).removeClass(animationClass);
				}
			});
		}

		animeScroll();

		$(document).scroll(function() {
			setTimeout(function() {animeScroll()}, 150);
		});
	});

</script>

<script type="text/javascript">
	//Diminui menu ao rolar
	$(function(){
		var form = $('aside#form');
		var secao = $('#localizacao').offset().top;
		var alturaSecao = $('#localizacao').height();
		var secaoFim = (secao + alturaSecao)
		$(window).scroll(function () { 
			
			function entraform () {
				if ($(this).width() > 991) {
					form.fadeIn('fast');	
				}
			}

			if ($(this).scrollTop() > 500 && $(this).scrollTop() < secao) { 
				entraform();
			} else if ($(this).scrollTop() > secaoFim) { 
				entraform();
			} else {
				form.fadeOut('fast');
			}

		});
	});
</script>

<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>  
<script type="text/javascript">
    var meus_campos = {
        'nome': 'nome',
        'email': 'email',
        'tel': 'telefone'
     };
    options = { fieldMapping: meus_campos };
    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', 'Reserva Aruan - Form Contato 1', options);  
</script>

</body>
</html>
