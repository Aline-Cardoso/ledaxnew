<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Iluminação';
$description = "$title. Soluções customizadas energética através de iluminação LED, sistemas de geração fotovoltaica, monitoramento e gestão de consumo de energia";
$keywords     = "Comércio de " . $title . ", Produtos de " . $title . ", Serviços de " . $title . ", " . $title . " de qualidade, " . $title . " com melhor preço, " . $title . " com menor preço";
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/head-palavras.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">


	<!-- BREADCRUMB START-->
	<section class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-6 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}" data-image-src="<?=$urlcompleta?>img/page-header/iluminacao-breadcrumb.jpg">
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


	<!--PRINCIPAIS VANTAGENS DAS LUMINÁRIAS START-->
	<section class="border-0 m-0 section">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col text-center">
					<h3 class="font-weight-bold text-color-dark line-height-1 text-4 ls-0 mb-1"> PRINCIPAIS VANTAGENS DAS LUMINÁRIAS LEDAX</h3>
					<h2 class="font-weight-bold text-8 turquesa">como Solução em Iluminação</h2>
				</div>
			</div>

			<div class="row custom-process justify-content-center mt-4">

				<div class="col-md-5">
					<div class="owl-carousel owl-theme nav-bottom mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true,'dots': false, 'loop': true, 'nav': true}">
						<div>
							<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/iluminacao-1-1.jpg" data-plugin-options="{'type':'image'}">
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-1.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-1.jpg" type="image/jpg"><img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/iluminacao-1.jpg" alt="<?=$title;?>"></picture>
							</a>
						</div>
						<div>
							<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/iluminacao-2-1.jpg" data-plugin-options="{'type':'image'}">
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-2.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-2.jpg" type="image/jpg"><img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/iluminacao-2.jpg" alt="<?=$title;?>"></picture>
							</a>
						</div>
						<div>
							<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/iluminacao-3-1.jpg" data-plugin-options="{'type':'image'}">
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-3.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-3.jpg" type="image/jpg"><img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/iluminacao-3.jpg" alt="<?=$title;?>"></picture>
							</a>
						</div>
						<div>
							<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/iluminacao-4-1.jpg" data-plugin-options="{'type':'image'}">
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-4.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-4.jpg" type="image/jpg"><img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/iluminacao-4.jpg" alt="<?=$title;?>"></picture>
							</a>
						</div>

						<div>
							<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/iluminacao-5-1.jpg" data-plugin-options="{'type':'image'}">
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-5.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-5.jpg" type="image/jpg"><img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/iluminacao-5.jpg" alt="<?=$title;?>"></picture>
							</a>
						</div>

						<div>
							<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/iluminacao-6-1.jpg" data-plugin-options="{'type':'image'}">
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-6.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/iluminacao-6.jpg" type="image/jpg"><img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/iluminacao-6.jpg" alt="<?=$title;?>"></picture>
							</a>
						</div>

					</div>
				</div>

				<div class="col-md-6">
					<ul class="list list-icons list-icons-style-3 list-tertiary appear-animation text-dark" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
						<li><i class="fas fa-check"></i>Baixa emissão de calor.</li>
						<li><i class="fas fa-check"></i>Alta Eficiência Energética.</li>
						<li><i class="fas fa-check"></i>Fácil Instalação.</li>
						<li><i class="fas fa-check"></i>80% de economia de energia comparado a lâmpadas convencionais.</li>
						<li><i class="fas fa-check"></i>Qualidade de luz.</li>
						<li><i class="fas fa-check"></i>Baixa necessidade de manutenção.</li>
						<li><i class="fas fa-check"></i>São atóxicas: não tem chumbo ou mercúrio na composição.</li>
						<li><i class="fas fa-check"></i>Maior economia financeira a longo prazo.</li>
						<li><i class="fas fa-check"></i>Até 70.000 horas de vida úti.</li>
						<li><i class="fas fa-check"></i>5 anos de garantia.</li>
					</ul>
				</div>

			</div>
		</div>
	</section>
	<!--PRINCIPAIS VANTAGENS DAS LUMINÁRIAS END-->

	<!--PRODUTOS START-->
	<section class="pb-4">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-xl-8 text-center">
				<div class="overflow-hidden mb-3">
					<h4 class="font-weight-bold text-transform-none text-7 line-height-2 mb-0"  style="color: #008191; padding-top: 50px;">PRODUTOS</h4>
				</div>
			</div>
		</div>


		<div class="container mb-5">
			<div class="row align-items-center">
				<div class="col-lg-4">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/industrial.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/industrial.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/industrial.jpg" class="img-fluid" alt="Iluminação Industrial"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-4 text-uppercase">Iluminação Industrial</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-4 line-height-5">Iluminação Industrial</p>
										<!-- 	<p class="mb-3 text-1 line-height-5 ps-2 pe-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam erat neque, consectetur quis scelerisque at, vestibulum ut augue consectetur adipiscing elit. </p> -->
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/iluminacao-industrial" class="btn btn-primary btn-modern text-1">Saiba mais</a>
										</span>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/comercial.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/comercial.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/comercial.jpg" class="img-fluid" alt="Iluminação Comercial"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-4 text-uppercase">Iluminação Comercial</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-4 line-height-5">Iluminação Comercial</p>
										<!-- 	<p class="mb-3 text-1 line-height-5 ps-2 pe-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam erat neque, consectetur quis scelerisque at, vestibulum ut augue consectetur adipiscing elit. </p> -->
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/iluminacao-comercial" class="btn btn-primary btn-modern text-1">Saiba mais</a>
										</span>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/publica.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/publica.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/publica.jpg" class="img-fluid" alt="Iluminação Pública"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-4 text-uppercase">Iluminação Pública</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-4 line-height-5">Iluminação Pública</p>
										<!-- 	<p class="mb-3 text-1 line-height-5 ps-2 pe-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam erat neque, consectetur quis scelerisque at, vestibulum ut augue consectetur adipiscing elit. </p> -->
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/iluminacao-publica" class="btn btn-primary btn-modern text-1">Saiba mais</a>
										</span>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!--PRODUTOS END-->
	
	<!--NOSSAS CASES START-->
	<section class="section background-turquesa border-0 mb-0 py-5 mt-0">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-xl-8 text-center">
				<div class="overflow-hidden mb-3">
					<h4 class="font-weight-bold text-transform-none text-7 line-height-2 mb-0 appear-animation text-light animated appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400">VEJA NOSSAS CASES</h4>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row justify-content-center pt-2">
				<div class="col-lg-9 col-xl-8 text-center">
					<div class="overflow-hidden mb-3">
						<p class="text-3-5 mb-4-5 text-justify text-light text-center">Atendendo com qualidade e alta eficiência os projetos personalizados de acordo com a real necessidade do cliente! </p>
						<a href="<?= $urlcompleta; ?>cases" class="btn btn-light-2 btn-outline font-weight-semibold px-4 btn-py-2 text-3">SAIBA MAIS</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--NOSSAS CASES END-->

	<!--O LED E A LEDAX START-->
	<div class="container py-5-5 my-5-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h2 class="font-weight-bold text-7 turquesa line-height-2">O LED E A LEDAX</h2>

				<p class="text-3-5 mb-4-5 appear-animation text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">O LED (sigla em inglês para Diodo Emissor de Luz) foi uma invenção simples com grande potencial de melhorias na indústria, especialmente a de iluminação. Trata-se de uma tecnologia limpa, de baixo consumo energético e de alta eficiência, que viabiliza diversas soluções de problemas ligados a iluminação, como a confiabilidade da continuidade do serviço, redução da potência instalada, redução dos custos com mão-de-obra, ligação imediata das luminárias (sem precisar aguardar aquecimento ou estabilização, etc. </p>
				<p class="text-3-5 mb-4-5 appear-animation text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"><strong>A LEDAX utiliza na fabricação das suas luminárias LEDS de alta performance e eficiência, do tipo SMD (do inglês surface mounted diode).</strong> A preocupação de trazer aos clientes o que há de mais avançado no mercado se estende também aos demais componentes das luminárias, como drivers e lentes ópticas, trabalhando em parceira com os maiores nomes mundiais de cada segmento.</p>

				<a href="<?= $urlcompleta; ?>fale-conosco" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-3 mb-sm-0 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="350" style="animation-delay: 350ms;">SOLICITAR ORÇAMENTO</a>
			</div>

			<div class="col-md-5 offset-lg-1">				
				<img class="width150" src="<?= $urlcompleta; ?>img/solucoes/gif-iluminacao.gif" alt="<?=$title;?>">
			</div>
		</div>
	</div>
	<!--O LED E A LEDAX END-->



</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/footer.php'; ?>
<!--end: Footer -->
