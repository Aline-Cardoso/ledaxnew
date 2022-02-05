<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Projector Slim 74W/113W';
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



	<div role="main" class="main shop pt-4 pb-5">

		<div class="container">

			<div class="row">
				<div class="col">
					<ul class="breadcrumb breadcrumb-style-2 d-block text-4 mb-4">
						<li><a href="<?=$urlcompleta;?>index" class="text-color-default text-color-hover-primary text-decoration-none">Home</a></li>
						<li><a href="<?=$urlcompleta;?>solucoes/iluminacao/" class="text-color-default text-color-hover-primary text-decoration-none">Iluminação</a></li>
						<li><?=$title;?></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 mb-2 mb-md-0">

					<div class="thumb-gallery-wrapper">
						<div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
							<div>
								<img alt="<?=$title;?>" class="img-fluid" src="<?=$urlcompleta;?>img/solucoes/produtos/projector-slim-74w-113w.jpg">
							</div>
						</div>
					</div>

				</div>

				<div class="col-md-7">

					<div class="summary entry-summary position-relative">

						<h1 class="mb-0 font-weight-bold text-7 turquesa"><?=$title;?></h1>

						<div class="divider divider-small">
							<hr class="bg-color-grey-scale-4">
						</div>
						<table class="table table-striped m-0">
							<tbody>
								<tr>
									<th class="border-top-0">
										Fluxo Luminoso:
									</th>
									<td class="border-top-0">
										10.092 lm / 13.876 lm
									</td>
								</tr>
								<tr>
									<th>
										Temperatura Cor:
									</th>
									<td>
										3000K / 4000K / 5000K / 6500K
									</td>
								</tr>
								<tr>
									<th>
										Ângulo de Facho
									</th>
									<td>
										56°x56° / 90°x90°
									</td>
								</tr>
								<tr>
									<th>
										Peso:
									</th>
									<td>
										3,4 kg
									</td>
								</tr>
								<tr>
									<th>
										Dimensões:
									</th>
									<td>
										256x145x158mm
									</td>
								</tr>
								<tr>
									<th>
										Indice de Proteção:
									</th>
									<td>
										IP 66
									</td>
								</tr>
								<tr>
									<th>
										Vida Útil:
									</th>
									<td>
										70.000h
									</td>
								</tr>
							</tbody>
						</table>
						<hr>

						<!--<a href="<?=$urlcompleta;?>#" target="_blank" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary"><i class="fas fa-image"></i> Desenho Técnico</a>-->
						<a href="<?=$urlcompleta;?>fale-conosco" class="btn btn-primary btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Solicite um orçamento</a>


					</div>

				</div>
			</div>

		</div>

	</div>



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