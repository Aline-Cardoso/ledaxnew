<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Iluminação Comercial';
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/perfiled.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/perfiled.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/perfiled.jpg" class="img-fluid" alt="Perfiled"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Perfiled</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Perfiled</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/perfiled" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/slender-light.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/slender-light.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/slender-light.jpg" class="img-fluid" alt="Slender Light"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Slender Light</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Slender Light</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/slender-light-20w-31w-41w" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/cannon-sobrepor.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/cannon-sobrepor.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/cannon-sobrepor.jpg" class="img-fluid" alt="Cannon Sobrepor"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Cannon Sobrepor</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Cannon Sobrepor</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/cannon-sobrepor-39w-59w" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/track-light.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/track-light.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/track-light.jpg" class="img-fluid" alt="Track Light"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Track Light</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Track Light</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/track-light-22w" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/cannon-embutir.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/cannon-embutir.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/cannon-embutir.jpg" class="img-fluid" alt="Cannon Embutir"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Cannon Embutir</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Cannon Embutir</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/cannon-embutir-39w-59w" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-slim.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-slim.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-slim.jpg" class="img-fluid" alt="Low Bay Slim"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Low Bay Slim</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Low Bay Slim</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/low-bay-slim-19w" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/downlight-round-sobrepor.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/downlight-round-sobrepor.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/downlight-round-sobrepor.jpg" class="img-fluid" alt="Downlight Round Sobrepor"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Downlight Round Sobrepor</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Downlight Round Sobrepor</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/downlight-round-sobrepor" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/gas-station.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/gas-station.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/gas-station.jpg" class="img-fluid" alt="Gas Station"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Gas Station</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Gas Station</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/gas-station" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/gondoled.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/gondoled.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/gondoled.jpg" class="img-fluid" alt="Gondoled"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Gondoled</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Gondoled</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/gondoled-20w-41w" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-pendente.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-pendente.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-pendente.jpg" class="img-fluid" alt="Low Bay Pendente"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Low Bay Pendente</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Low Bay Pendente</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/low-bay-pendente" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/downlight-round-embutir.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/downlight-round-embutir.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/downlight-round-embutir.jpg" class="img-fluid" alt="Downlight Round Embutir"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Downlight Round Embutir</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Downlight Round Embutir</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/downlight-round-embutir" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-sobrepor.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-sobrepor.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-sobrepor.jpg" class="img-fluid" alt="Low Bay Sobrepor"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Low Bay Sobrepor</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Low Bay Sobrepor</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/low-bay-sobrepor" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/downlight-quad-square.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/downlight-quad-square.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/downlight-quad-square.jpg" class="img-fluid" alt="Downlight Quad Square"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Downlight Quad Square</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Downlight Quad Square</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/downlight-quad-square" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/downlight-square.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/downlight-square.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/downlight-square.jpg" class="img-fluid" alt="Downlight Square"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Downlight Square</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Downlight Square</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/downlight-square" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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
								<picture><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-embutir.webp" type="image/webp"><source srcset="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-embutir.jpg" type="image/jpg"><img src="<?=$urlcompleta;?>img/solucoes/produtos/low-bay-embutir.jpg" class="img-fluid" alt="Low Bay Embutir"/></picture>
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Low Bay Embutir</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Low Bay Embutir</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/low-bay-embutir" class="btn btn-primary btn-modern text-1">Saiba mais</a>
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