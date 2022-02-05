<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/",$_SERVER['PHP_SELF'])[1]."/" : "/";

$title = 'Cases';
$description = "$title. Soluções customizadas energética através de iluminação LED, sistemas de geração fotovoltaica, monitoramento e gestão de consumo de energia";
$keywords     = "Comércio de ".$title.", Produtos de ".$title.", Serviços de ".$title.", ".$title." de qualidade, ".$title." com melhor preço, ".$title." com menor preço";
include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. 'includes/head.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. "includes/breadcrumb-institucionais.php";?>
	<!-- BREADCRUMB START END-->

	<!--INDUSTRIA START-->
	<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. "includes/cases/industria.php";?>
	<!--INDUSTRIA END-->

	<!--SUPERMERCADOS START-->
	<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. "includes/cases/supermecados.php";?>
	<!--SUPERMERCADOS END-->
	
	<!--ILUMINAÇÃO PÚBLICA START-->
	<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. "includes/cases/iluminacao-publica.php";?>
	<!--ILUMINAÇÃO PÚBLICA END-->

	<!--OUTROS START-->
	<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. "includes/cases/outros.php";?>
	<!--OUTROS END-->

	<!--SOLAR START-->
	<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. "includes/cases/solar.php";?>
	<!--SOLAR END-->

	<!--MERCADO LIVRE START-->
	<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. "includes/cases/mercado-livre.php";?>
	<!--MERCADO LIVRE END-->
</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. 'includes/footer.php'; ?>
<!--end: Footer -->