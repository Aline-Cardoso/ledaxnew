<?php
$title = 'Fale Conosco';
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


	<div class="container contato">

		<div class="row py-4">
			<div class="col-lg-6">

				<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">

					<h4 class="mt-2 mb-1 turquesa"><strong>Telefone:</strong></h4>

					<ul class="list list-icons list-icons-l">
						<li class="mb-1"><i class="fas fa-phone text-color-primary"></i>
							<p class="m-0"><a class="text-color-dark" href="<?=$tellink;?>" title="<?=$ddd . $tel;?>"><?=$ddd . $tel;?></a></p>
						</li>
						<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i>
							<p class="m-0"><a target="_blank" class="text-color-dark"  href="<?=$whatslink;?>" title="Atendimento Online"><?=$dddwhats . $whats;?></a></p>
						</li>
					</ul>

					<h4 class="mt-2 mb-1 turquesa"><strong>Endereços</strong></h4>

					<strong class="turquesa text-4 mt-2">Fábrica:</strong>
					<ul class="list list-icons list-icons-l">
						<li class="mb-1"><i class="fas fa-map-marked-alt text-color-primary"></i><a target="_blank" class="text-color-dark"  href="<?=$linkMapa;?>"> <?=$endereco;?> - <?=$bairro;?> <br><?=$cidade;?> - CEP: <?=$cep;?></a>
						</li>
					</ul>

					<strong class="turquesa text-4 mt-2">Matriz Comercial Bahia:</strong>
					<ul class="list list-icons list-icons-l">
						<li class="mb-1"><i class="fas fa-map-marked-alt text-color-primary"></i><a target="_blank" class="text-color-dark"  href="<?=$linkMapamatriz;?>"> <?=$enderecomatriz;?> <br><?=$complementomatriz;?> <br><?=$bairromatriz;?> <?=$cidadematriz;?> - CEP: <?=$cepmatriz;?></a>
						</li>
					</ul>

					<strong class="turquesa text-4 mt-2">Regional Minas Gerais:</strong>
					<ul class="list list-icons list-icons-l">
						<li class="mb-1"><i class="fas fa-map-marked-alt text-color-primary"></i><a target="_blank" class="text-color-dark"  href="<?=$linkminas;?>"> <?=$enderecominas;?> <?=$complementominas;?> - <?=$bairrominas;?> <br><?=$cidademinas;?> - CEP: <?=$cepminas;?></a>
						</li>
					</ul>

					<strong class="turquesa text-4 mt-2">Regional Rio Grande do Sul:</strong>
					<ul class="list list-icons list-icons-l">
						<li class="mb-1"><i class="fas fa-map-marked-alt text-color-primary"></i><a target="_blank" class="text-color-dark"  href="<?=$linkMapars;?>"> <?=$enderecors;?> <?=$complementors;?> - <?=$bairrors;?> <br><?=$cidaders;?> - CEP: <?=$ceprs;?></a>
						</li>
					</ul>

					<strong class="turquesa text-4 mt-2">Unidade de Negócios Shanghai:</strong>
					<ul class="list list-icons list-icons-l">
						<li class="mb-1"><i class="fas fa-map-marked-alt text-color-primary"></i><a target="_blank" class="text-color-dark"  href="<?=$linkMapashanghai;?>"> <?=$enderecoshanghai;?> <?=$complementoshanghai;?> <br><?=$bairroshanghai;?> - <?=$cidadeshanghai;?></a>
						</li>
					</ul>

				</div>


			</div>
			<div class="col-lg-6">

				<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">

					<h4 class="mt-2 mb-1 turquesa"><strong>E-mails:</strong></h4>

					<ul class="list list-icons list-icons-l">
						<li class="mb-1"><i class="fas fa-envelope text-color-primary"></i>
							<p class="m-0"><a class="text-color-dark" href="mailto:<?=$email;?>"><?=$email?></a></p>
						</li>
						<li class="mb-1"><i class="fas fa-envelope text-color-primary"></i>
							<p class="m-0"><a class="text-color-dark" href="mailto:<?=$emailmatriz;?>"><?=$emailmatriz?></a></p>
						</li>
						<li class="mb-1"><i class="fas fa-envelope text-color-primary"></i>
							<p class="m-0"><a class="text-color-dark" href="mailto:<?=$emailmg;?>"><?=$emailmg?></a></p>
						</li>
						<li class="mb-1"><i class="fas fa-envelope text-color-primary"></i>
							<p class="m-0"><a class="text-color-dark" href="mailto:<?=$emailsp;?>"><?=$emailsp?></a></p>
						</li>
						<li class="mb-1"><i class="fas fa-envelope text-color-primary"></i>
							<p class="m-0"><a class="text-color-dark" href="mailto:<?=$emailrs;?>"><?=$emailrs?></a></p>
						</li>
					</ul>

				</div>

				<div class="overflow-hidden mb-0">
					<h2 class="font-weight-bold text-6 turquesa">Nos envie uma mensagem!</h2>
				</div>

				<!-- Formulário -->
				<?php include 'includes/formulario.php' ;?>
				<!-- end: Formulário -->

			</div>

		</div>

	</div>
</div>			

<!-- Footer -->
<?php include 'includes/footer.php'; ?>
<!--end: Footer -->