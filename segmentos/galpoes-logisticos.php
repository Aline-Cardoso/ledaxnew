<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Galpões Logísticos';
$description = "$title. Soluções customizadas energética através de iluminação LED, sistemas de geração fotovoltaica, monitoramento e gestão de consumo de energia";
$keywords     = "Comércio de " . $title . ", Produtos de " . $title . ", Serviços de " . $title . ", " . $title . " de qualidade, " . $title . " com melhor preço, " . $title . " com menor preço";
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/head.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . "includes/breadcrumb.php"; ?>
	<!-- BREADCRUMB START END-->

	<!--SOBRE A SOLUÇÃO START-->
	<div class="container py-5-5 my-5-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h2 class="font-weight-bold text-7 turquesa">Projetos personalizados para cada setor!</h2>

				<p class="text-3-5 mb-4-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec risus turpis. Suspendisse eu odio placerat, facilisis velit at, semper nunc. Donec sit amet orci a sapien pellentesque posuere eget a justo:
				<ul class="list list-icons list-icons-style-3 list-tertiary appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
					<li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur; </li>
					<li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur;</li>
					<li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur;</li>
				</ul>

				<p class="text-3-5 mb-4-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Suspendisse potenti. In mi ipsum, aliquam in consectetur viverra, varius quis nulla. Phasellus vehicula est at pulvinar vehicula. Sed dapibus enim in felis commodo lacinia. Fusce ornare nunc sit amet feugiat pellentesque. Cras commodo orci quis scelerisque tincidunt. Morbi scelerisque eleifend eros sed blandit. Etiam sagittis nec tortor eu elementum. Integer eu eros at lacus dictum iaculis ut in purus.</p>
				<a href="<?= $urlcompleta; ?>fale-conosco" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-3 mb-sm-0 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="350" style="animation-delay: 350ms;">SOLICITAR ORÇAMENTO</a>
			</div>

			<div class="col-md-5 offset-lg-1">
				<div class="owl-carousel owl-theme nav-bottom mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true,'dots': false, 'loop': true, 'nav': true}">
					<div>
						<a class="lightbox" href="<?= $urlcompleta; ?>img/segmentos/galpoes-logisticos-1-1.jpg" data-plugin-options="{'type':'image'}">
							<img class="img-fluid" src="<?= $urlcompleta; ?>img/segmentos/galpoes-logisticos-1.jpg" alt="<?=$title;?>">
						</a>
					</div>
					<div>
						<a class="lightbox" href="<?= $urlcompleta; ?>img/segmentos/galpoes-logisticos-2-1.jpg" data-plugin-options="{'type':'image'}">
							<img class="img-fluid" src="<?= $urlcompleta; ?>img/segmentos/galpoes-logisticos-2.jpg" alt="<?=$title;?>">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--SOBRE A SOLUÇÃO END-->


</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/footer.php'; ?>
<!--end: Footer -->