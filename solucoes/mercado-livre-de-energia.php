<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Mercado Livre de Energia Ledax';
$description = "Ambiente ideal para quem deseja pagar somente o que consome.";
$keywords     = "Comércio de " . $title . ", Produtos de " . $title . ", Serviços de " . $title . ", " . $title . " de qualidade, " . $title . " com melhor preço, " . $title . " com menor preço";
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/head-palavras.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<section class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-6 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}" data-image-src="<?=$urlcompleta?>img/page-header/mercado-livre-breadcrumb.jpg">
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
				<h2 class="font-weight-bold text-7 turquesa line-height-2">ENERGIA COM ECONOMIA E BAIXO INVESTIMENTO</h2>

				<p class="text-3-5 mb-4-5 appear-animation text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">O Mercado Livre de Energia é um ambiente onde grandes consumidores negociam a aquisição de energia direto com as geradoras, ao invés de continuarem no Mercado Cativo com a concessionária local. </p>

				<p class="text-3-5 mb-4-5 appear-animation text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Este ambiente de negociação permite que o cliente adquira, com considerável economia e baixo investimento, a quantidade de energia ideal baseada no seu perfil de consumo. Além da redução de custos, estes consumidores poderão usufruir de benefícios como previsibilidade no orçamento para energia, ausência de cobrança de bandeira tarifária, tarifas de geração iguais na ponta e fora da ponta, e o poder de escolha de onde irá adquirir a sua energia.</p>

				<p class="text-3-5 mb-4-5 appear-animation text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Assim como a geração distribuída através da energia solar é uma excelente solução para pequenos e médios consumidores, o Mercado Livre de Energia é a melhor opção para economia de grandes consumidores. </p>



				<a href="<?= $urlcompleta; ?>fale-conosco" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-3 mb-sm-0 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="350" style="animation-delay: 350ms;">SOLICITAR ORÇAMENTO</a>
			</div>

			<div class="col-md-5 offset-lg-1">
				<div class="owl-carousel owl-theme nav-bottom mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true,'dots': false, 'loop': true, 'nav': true}">
					<div>
						<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/mercado-livre-de-energia-1.jpg" data-plugin-options="{'type':'image'}">
							<img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/mercado-livre-de-energia-1.jpg" alt="<?=$title;?>">
						</a>
					</div>
					<div>
						<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/mercado-livre-de-energia-2.jpg" data-plugin-options="{'type':'image'}">
							<img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/mercado-livre-de-energia-2.jpg" alt="<?=$title;?>">
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!--SOBRE A SOLUÇÃO END-->

	<!--QUEM PODE MIGRAR START-->
	<section class="border-0 m-0 section">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col text-center">
					<h3 class="font-weight-bold text-color-dark line-height-1 text-4 ls-0 mb-1">QUEM PODE MIGRAR PARA O</h3>
					<h2 class="font-weight-bold text-8 turquesa">Mercado livre de energia?</h2>
				</div>
			</div>

			<div class="row custom-process justify-content-center mt-4">

				<p class="text-3-5 text-color-dark mb-3 text-justify">Existes duas categorias de consumidores livres: </p>

				<ul class="list list-icons list-icons-style-3 list-tertiary appear-animation text-dark" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
					<li><i class="fas fa-check"></i> Consumidores livres, que devem ter, no mínimo, 2.000kW de demanda contratada e seu grau de liberdade permite a contratação de energia proveniente de qualquer fonte de geração; </li>
					<li><i class="fas fa-check"></i>Consumidores especiais, que têm entre 500 kW e 2.000kW de demanda contratada e podem contratar energia apenas de energia incentivada (biomassa, pequenas centrais hidroelétricas, eólicas e solar) ou hidráulica de empreendimentos com potência menor ou igual a 50.000kW. Além disso, esses consumidores tem incentivo na demanda e TUSD ponta. </li>
				</ul>

				<p class="text-3-5 text-color-dark mb-3 text-justify">Para os consumidores que possuem o mesmo CNPJ raiz ou estão localizados em áreas contíguas (sem separação por vias públicas), é possível fazer o que se chama de comunhão, que consiste em juntar as cargas para alcançar o nível de demanda de 500kW obrigatório para entrar na categoria de consumidor especial.</p>

			</div>
		</div>
	</section>
	<!--QUEM PODE MIGRAR END-->


	<!--COMO É FEITO A MIGRAÇÃO START-->
	<section class="border-0 m-0">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col text-center">
					<h3 class="font-weight-bold text-color-dark line-height-1 text-4 ls-0 mb-1">COMO É FEITO A MIGRAÇÃO PARA O</h3>
					<h2 class="font-weight-bold text-8 turquesa">Mercado livre de energia?</h2>
				</div>
			</div>

			<div class="row custom-process justify-content-center mt-4">
				<div class="col-md-6">
					<p class="text-3-5 text-color-dark mb-3 text-justify">A migração para o Mercado Livre de Energia envolve diversos atores, contando com o cliente, geradores, os agentes de comercialização e as gestoras, compondo, assim, o Ambiente de Contratação Livre (ACL). </p>

					<p class="text-3-5 text-color-dark mb-3 text-justify">O ACL tem a relação dos seus atores gerida pela Câmara de Comercialização de Energia Elétrica (CCEE), onde todos deverão estar associados. Este ambiente é regulamentado pela Agência Nacional de Energia Elétrica (ANEEL) e é controlado pelo Operador Nacional do Sistema (ONS). </p>

					<p class="text-3-5 text-color-dark mb-3 text-justify">Estes atores e agentes têm de ser acionados em alguma fase, tanto na transição “mercado cativo X mercado livre” quanto nas transações de prestação de contas de geração, consumo, compra e venda de energia durante a permanência do cliente no ACL. </p>

					<p class="text-3-5 text-color-dark mb-3 text-justify">Assim, se torna importante ter uma empresa especializada como a LEDAX realizando o processo de migração e gerindo os contratos e operações no Mercado Livre de Energia.</p>
				</div>

				<div class="col-md-5 offset-lg-1">

					<img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/mercado-livre-de-energia-3.jpg" alt="<?=$title;?>">
					
				</div>

			</div>
		</div>


	</section>
	<!--COMO É FEITO A MIGRAÇÃO END-->

	<!--MODELO DE NEGÓCIO START-->
	<div class="shape-divider shape-divider-reverse-x">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
			<polygon fill="#034154" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
		</svg>
	</div>
	<section class="section border-0 mb-0 pb-10 pt-0 mt-0" style="background-color: #034154;">

		<div class="container" style="padding-top: 70px;">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0 ">

					<img class="img-fluid" src="<?=$urlcompleta;?>img/solucoes/energia.png" alt="<?=$title;?>">

				</div>
				<div class="col-lg-7 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
					<div class="col">
						<h2 class="font-weight-bold text-5 text-color-light line-height-2">Confira alguns passos essenciais para uma migração eficaz: </h2>
					</div>

					<div class="row custom-process justify-content-center mt-4">

						<p class="text-3-5 text-color-dark mb-3 text-justify text-color-light">1. Analise atual e futura de viabilidade para migração para o ambiente de contratação livre. Levantamento de todos os documentos necessários para migração e estruturação com a concessionária local e órgãos responsáveis. </p>

						<ul class="list list-icons list-icons-style-3 list-tertiary appear-animation text-color-light" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
							<li><i class="fas fa-check"></i>a. Adesão do CNPJ junto à CCEE;</li>
							<li><i class="fas fa-check"></i>b. Carta denúncia frente à distribuidora local;</li>
							<li><i class="fas fa-check"></i>c. Assessoria junto a concessionária local durante todo o processo de realização da Adequação Física do Sistema de Medição e Faturamento (SMF). </li>
						</ul>

						<p class="text-3-5 text-color-dark mb-3 text-justify text-color-light">2. Escolha da melhor fonte de energia, levando em conta tempo de contrato e preço. Tudo isso para garantir a melhor estratégia para o cliente. </p>


					</div>
				</div>
			</div>
		</div>

	</section>
	<!--MODELO DE NEGÓCIO END-->

</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/footer.php'; ?>
<!--end: Footer -->