<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Eletromobilidade';
$description = "A LEDAX em parceria com a Schneider Electric tem o carregador para veículo elétrico perfeito para cada tipo de necessidade.";
$keywords     = "Comércio de " . $title . ", Produtos de " . $title . ", Serviços de " . $title . ", " . $title . " de qualidade, " . $title . " com melhor preço, " . $title . " com menor preço";
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/head-palavras.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<section class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-6 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}" data-image-src="<?=$urlcompleta?>img/page-header/eletromobilidade-breadcrumb.jpg">
		<div class="container position-relative z-index-2">
			<div class="row text-center text-md-start">
				<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
					<h1 class="font-weight-bold text-color-light text-12 mb-0 order-1"><?= $title; ?></h1>
					<ul class="breadcrumb breadcrumb-light d-block text-md-start text-4 mb-0">
						<li><a href="<?= $urlcompleta; ?>index" class="text-decoration-none">Home</a></li>
						<li class="text-upeercase active"><?= $title; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- BREADCRUMB START END-->

	<!--SOBRE A SOLUÇÃO START-->
	<div class="container py-5-5 my-5-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h2 class="font-weight-bold text-7 turquesa">INOVAÇÃO EM VEÍCULOS HÍBRIDOS</h2>

				<p class="text-3-5 mb-4-5 appear-animation text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Os veículos elétricos já estão presentes no país e, segundo a Empresa de Pesquisa Energética, até 2030 as vendas de veículos híbridos alcancem a marca de 180 mil unidades por ano, em todo território nacional. A previsão é de que até 2040, esses veículos sejam o equivalente a 58% da frota mundial, somando o total de 56 milhões de unidades.Em parceria com a Schneider Electric, apresentamos o portfólio ideal de carregadores para diversas necessidade, seja ela residencial ou comercial. </p>


				<a href="<?= $urlcompleta; ?>fale-conosco" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-3 mb-sm-0 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="350" style="animation-delay: 350ms;">SOLICITAR ORÇAMENTO</a>
			</div>

			<div class="col-md-5 offset-lg-1">
				<div class="owl-carousel owl-theme nav-bottom mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true,'dots': false, 'loop': true, 'nav': true}">
					<div>
						<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/eletromobilidade-1-1.jpg" data-plugin-options="{'type':'image'}">
							<img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/eletromobilidade-1.jpg" alt="ENERGIA SOLAR">
						</a>
					</div>
					<div>
						<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/eletromobilidade-2-1.jpg" data-plugin-options="{'type':'image'}">
							<img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/eletromobilidade-2.jpg" alt="ENERGIA SOLAR">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--SOBRE A SOLUÇÃO END-->

	<!--POR QUE INVESTIR EM ELETROMOBILIDADE START-->
	<section class="border-0 m-0 section pb-0">
		<div class="container pt-5 pb-3">
			<div class="row">
				<div class="col text-center">
					<h3 class="font-weight-bold text-color-dark line-height-1 text-4 ls-0 mb-1">POR QUE INVESTIR EM</h3>
					<h2 class="font-weight-bold text-8 turquesa">Eletromobilidade?</h2>
				</div>
			</div>

			<div class="row custom-process justify-content-center mt-4">

				<ul class="list list-icons list-icons-style-3 list-tertiary appear-animation text-dark" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
					<li><i class="fas fa-check"></i>Veículos Elétricos consomem menos energia durante o uso (para se locomover) comparado ao consumo de energia a partir de outras formas de combustível como diesel e gasolina, por exemplo.</li>
					<li><i class="fas fa-check"></i>O uso de veículos elétricos diminui a emissão de CO2 na atmosfera, pois eles são considerados não-emissores do gás carbônico.</li>
					<li><i class="fas fa-check"></i>A previsão é de que entre 2017 e 2030 os custos com veículos elétricos cairão, principalmente, devido à redução nos custos das baterias.</li>
					<li><i class="fas fa-check"></i>Os VEs se tornarão a opção de melhor custo-benefício, em todos os segmentos, nos próximos 5-10 anos.</li>
					<li><i class="fas fa-check"></i>O mercado já investe em tecnologias futuras que permitirão a eletrificação de veículos mais pesados, que atualmente são mais difíceis de eletrificar. E essa eletrificação duplicará a demanda de eletricidade até 2050.</li>
				</ul>


			</div>
		</div>
	</section>
	<!--POR QUE INVESTIR EM ELETROMOBILIDADE END-->

	<!--SOLUÇÕES DE CARREGAMENTO START-->

	<div class="shape-divider shape-divider-reverse-x" style="background-color: #f7f7f7;">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
			<polygon fill="#034154" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
		</svg>
	</div>

	<section class="p-5" style="background: #034154;">
		<h4 class="font-weight-bold text-transform-none text-7 line-height-2 mb-0 text-light text-center pb-5">SOLUÇÕES DE CARREGAMENTO</h4>
		<div class="container mb-5">
			<div class="row align-items-center">
				<div class="col-lg-4">
					<div class="py-4 px-4 alturacoluna" style="background: #008191; border-radius: 10px;">
						<img style="width: 100%;" src="<?= $urlcompleta; ?>img/solucoes/smart-wallbox.png" alt="EVlink Smart Wallbox">
						<h4 class="mb-2 mt-3 text-5 text-color-light text-center"> EVlink Smart Wallbox</h4>
						<p class="text-3 mb-2 appear-animation text-justify animated appear-animation-visible text-color-light" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">A estação do carregamento conectada para um carregamento mais inteligente. Ideal para estacionamentos semi-públicos. </p>
				<ul class="list list-icons list-icons-style-3 list-tertiary appear-animation text-color-light" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
					<li class="mb-2"><i class="fas fa-check"></i>Moderno, Robusto e Compacto.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Monitoramento.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Plugue & Carregue.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Controle de Acesso por chave ou cartão RFID.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Instalação em área interna ou externa.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Faixa de Potência 3,4kW até 22kW.</li>
					<li class="mb-2"><i class="fas fa-check"></i>1 tomada tipo 2.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Manutenção Remota.</li>
				</ul>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="py-4 px-4 alturacoluna" style="background: #008191; border-radius: 10px;">
						<img style="width: 100%;" src="<?= $urlcompleta; ?>img/solucoes/wallbox.png" alt="EVlink WallBox">
						<h4 class="mb-2 mt-3 text-5 text-color-light text-center"> EVlink WallBox</h4>
						<p class="text-3 mb-2 appear-animation text-justify animated appear-animation-visible text-color-light" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Soluções de carregamento veicular para casas ou propriedades privadas para uso interno e externo. A estação de carregamento EVlink Wallbox é robusta e a prova de intempéries.</p>
				<ul class="list list-icons list-icons-style-3 list-tertiary appear-animation text-color-light" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
					<li class="mb-2"><i class="fas fa-check"></i>Moderno e Compacto.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Plugue & Carregue.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Fixação na parede ou suporte (totem).</li>
					<li class="mb-2"><i class="fas fa-check"></i>Instalação em área interna ou externa.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Faixa de Potência 3,4kW até 22kW.</li>
					<li class="mb-2"><i class="fas fa-check"></i>1 tomada tipo 2.</li>
				</ul>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="py-4 px-4 alturacoluna" style="background: #008191; border-radius: 10px;">
						<img style="width: 100%;" src="<?= $urlcompleta; ?>img/solucoes/parking.png" alt="EVlink Parking">
						<h4 class="mb-2 mt-3 text-5 text-color-light text-center"> EVlink Parking</h4>
						<p class="text-3 mb-2 appear-animation text-justify animated appear-animation-visible text-color-light" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Soluções de carregamento veicular para todos os ambientes de estacionamento: urbanos, condomínios, escritórios, hotéis.</p>
				<ul class="list list-icons list-icons-style-3 list-tertiary appear-animation text-color-light" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
					<li class="mb-2"><i class="fas fa-check"></i>Robusto e eficiente.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Monitoramento.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Controle de Acesso por chave ou cartão RFID.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Instalação em área interna ou externa.</li>
					<li class="mb-2"><i class="fas fa-check"></i>Faixa de Potência 7,4kW até 22kW.</li>
					<li class="mb-2"><i class="fas fa-check"></i>2 tomadas tipo 2.</li>
				</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--SOLUÇÕES DE CARREGAMENTO END-->


</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/footer.php'; ?>
<!--end: Footer -->