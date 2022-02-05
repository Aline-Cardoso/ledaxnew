<?php
$title = 'Formulário não enviado!';
$description = "Formulário não foi encaminhado";
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
				<h3 class="font-weight-bold text-color-default line-height-1 text-4 ls-0 mb-1">Atenção!</h3>
				<h2 class="font-weight-bold text-8 turquesa">Erro ao enviar o formulário</h2>
				<p class="text-3-5 mb-4-5 appear-animation text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Houve um problema ao enviar sua mensagem por favor tente novamente mais tarde..</p>
			</div>
			<div class="col-md-7">
				<img class="img-fluid" src="<?= $urlcompleta; ?>img/pg-falha.jpg" alt="<?=$title;?>">
			</div>
		</div>
	</div>

</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<!--end: Footer -->