<?php
$title = 'Mapa do Site';
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


	<div class="container pb-4 pt-5">

		<div class="overflow-hidden mb-3">
			<h2 class="font-weight-bold text-6 mb-0 appear-animation turquesa" data-appear-animation="maskUp">
				Navegue por todas as nossas páginas
			</h2>
		</div>
		
		<ul class="list list-icons list-icons-sm">
			<?php $mapaSite = true; include'includes/menu-rodape.php';?>
		</ul>

	</div>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<!--end: Footer -->