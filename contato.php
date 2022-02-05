<?php
$title = 'Contato';
$description = "$title. Soluções customizadas energética através de iluminação LED, sistemas de geração fotovoltaica, monitoramento e gestão de consumo de energia";
$keywords     = "Comércio de ".$title.", Produtos de ".$title.", Serviços de ".$title.", ".$title." de qualidade, ".$title." com melhor preço, ".$title." com menor preço";
include 'includes/head.php';
?>

<!-- Header -->
<?php include 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<?php include "includes/breadcrumb-institucionais.php";?>
	<!-- BREADCRUMB START END-->


	<div class="container pb-4 pt-4">


		<div class="featured-boxes featured-boxes-style-2">

			<div class="row justify-content-center">

				<div class="col-md-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
					<div class="featured-box featured-box-effect-2">
						<div class="box-content px-lg-4 px-xl-5 py-lg-5">
							<i class="icon-featured icon-envelope-letter"></i>
							<h4 class="font-weight-bold">Fale Conosco</h4>
							<a href="<?=$urlcompleta;?>fale-conosco" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="350" style="animation-delay: 350ms;">SAIBA MAIS</a>
						</div>
					</div>
				</div>

				<div class="col-md-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
					<div class="featured-box featured-box-effect-2">
						<div class="box-content px-lg-4 px-xl-5 py-lg-5">
							<i class="icon-featured icon-people"></i>
							<h4 class="font-weight-bold">Trabalhe Conosco</h4>
							<a href="<?=$urlcompleta;?>trabalhe-conosco" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="350" style="animation-delay: 350ms;">SAIBA MAIS</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		


<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<!--end: Footer -->