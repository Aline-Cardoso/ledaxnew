<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Projector Slim';
$description = "$title. Soluções customizadas energética através de iluminação LED, sistemas de geração fotovoltaica, monitoramento e gestão de consumo de energia";
$keywords     = "Comércio de " . $title . ", Produtos de " . $title . ", Serviços de " . $title . ", " . $title . " de qualidade, " . $title . " com melhor preço, " . $title . " com menor preço";
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/head-palavras.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . "includes/breadcrumb.php"; ?>
	<!-- BREADCRUMB START END-->





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
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-3">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<img src="<?=$urlcompleta;?>img/solucoes/produtos/projector-slim-39w-59w.jpg" class="img-fluid" alt="Projector Slim 39W/59W">
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Projector Slim 39W/59W</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Projector Slim 39W/59W</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/projector-slim-39w-59w" class="btn btn-primary btn-modern text-1">Saiba mais</a>
										</span>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<img src="<?=$urlcompleta;?>img/solucoes/produtos/projector-slim-74w-113w.jpg" class="img-fluid" alt="Projector Slim 74W/113W">
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Projector Slim 74W/113W</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Projector Slim 74W/113W</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/projector-slim-74w-113w" class="btn btn-primary btn-modern text-1">Saiba mais</a>
										</span>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<img src="<?=$urlcompleta;?>img/solucoes/produtos/projector-slim.jpg" class="img-fluid" alt="Projector Slim 108W/174W">
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Projector Slim 108W/174W</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Projector Slim 108W/174W</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/projector-slim-108w-174w" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
	<section class="section border-0 mb-0 py-5 mt-0" style="background: #034154;">
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





</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/footer.php'; ?>
<!--end: Footer -->