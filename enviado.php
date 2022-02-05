<?php
$title = 'Formulário enviado com sucesso!';
$description = "Formulário encaminhado a nossa caixa de e-mails";
$keywords     = "Comércio de " . $title . ", Produtos de " . $title . ", Serviços de " . $title . ", " . $title . " de qualidade, " . $title . " com melhor preço, " . $title . " com menor preço";
include 'includes/head.php';
?>

<!-- Header -->
<?php include 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<?php include "includes/breadcrumb-institucionais.php";?>
	<!-- BREADCRUMB START END-->


	<div class="container py-5-5 my-5-5">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<h3 class="font-weight-bold text-color-default line-height-1 text-4 ls-0 mb-1">Formulário enviado</h3>
				<h2 class="font-weight-bold text-8 turquesa">Obrigado!</h2>
				<p class="text-3-5 mb-4-5 appear-animation text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Estamos analisando sua mensagem e em breve retornaremos o contato.</p>
			</div>
			<div class="col-md-7">
				<img class="img-fluid" src="<?= $urlcompleta; ?>img/pg-enviado.jpg" alt="<?=$title;?>">
			</div>
		</div>
	</div>

</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<!--end: Footer -->