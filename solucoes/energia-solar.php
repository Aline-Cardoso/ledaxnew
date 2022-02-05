<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Energia Solar';
$description = "$title. Soluções customizadas energética através de iluminação LED, sistemas de geração fotovoltaica, monitoramento e gestão de consumo de energia";
$keywords     = "Comércio de " . $title . ", Produtos de " . $title . ", Serviços de " . $title . ", " . $title . " de qualidade, " . $title . " com melhor preço, " . $title . " com menor preço";
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/head-palavras.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<section class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-6 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}" data-image-src="<?=$urlcompleta?>img/page-header/energia-solar-breadcrumb.jpg">
		<div class="container position-relative z-index-2">
			<div class="row text-center text-md-start">
				<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
					<h1 class="font-weight-bold text-color-light text-12 mb-0 order-1"><?= $title; ?></h1>
					<ul class="breadcrumb breadcrumb-light d-block text-md-start text-4 mb-0">
						<li><a href="<?= $urlcompleta; ?>index" class="text-decoration-none">Home</a></li>
						<li class="text-upeercase active"><?= $title; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- BREADCRUMB START END-->

	<!--SOBRE A SOLUÇÃO START-->
	<div class="container py-5-5 my-5-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h2 class="font-weight-bold text-7 turquesa line-height-2">ECONOMIA DE ATÉ 95% NA SUA CONTA DE ENERGIA</h2>

				<p class="text-3-5 mb-4-5 appear-animation text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Em muitas empresas, a conta de energia representa parcela considerável do custo fixo. A instalação de um sistema de energia solar, através das regras de geração distribuída, além de contribuir e aliar sua marca a causas sustentáveis, pode reduzir em até 95% esta conta. Assim, sua empresa terá: </p>

				<ul class="list list-icons list-icons-style-3 list-tertiary appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
					<li><i class="fas fa-check"></i>Maior capacidade de investimento;</li>
					<li><i class="fas fa-check"></i>Mais competitividade;</li>
					<li><i class="fas fa-check"></i>Poderá reverter tal economia em lucro;</li>
				</ul>

				<p class="text-3-5 mb-4-5 appear-animation text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">No Brasil, o mercado de energia solar tem um imenso potencial devido às condições climáticas e está em pleno crescimento, com um recorde de 768 MW de potência instantânea somente na região Nordeste em 2018. Com um retorno de investimento médio de 6 anos e vida útil de 25 anos, a energia fotovoltaica tem um retorno superior aos principais investimentos do mercado financeiro.</p>
				<a href="<?= $urlcompleta; ?>fale-conosco" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-3 mb-sm-0 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="350" style="animation-delay: 350ms;">SOLICITAR ORÇAMENTO</a>
			</div>

			<div class="col-md-5 offset-lg-1">
				<div class="owl-carousel owl-theme nav-bottom mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true,'dots': false, 'loop': true, 'nav': true}">
					<div>
						<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/energia-solar-4.jpg" data-plugin-options="{'type':'image'}">
							<img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/energia-solar-4.jpg" alt="ENERGIA SOLAR">
						</a>
					</div>
					<div>
						<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/energia-solar-5.jpg" data-plugin-options="{'type':'image'}">
							<img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/energia-solar-5.jpg" alt="ENERGIA SOLAR">
						</a>
					</div>
					<div>
						<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/energia-solar-6.jpg" data-plugin-options="{'type':'image'}">
							<img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/energia-solar-6.jpg" alt="ENERGIA SOLAR">
						</a>
					</div>
					<div>
						<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/energia-solar-7.jpg" data-plugin-options="{'type':'image'}">
							<img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/energia-solar-7.jpg" alt="ENERGIA SOLAR">
						</a>
					</div>
					<div>
						<a class="lightbox" href="<?= $urlcompleta; ?>img/solucoes/energia-solar-8.jpg" data-plugin-options="{'type':'image'}">
							<img class="img-fluid" src="<?= $urlcompleta; ?>img/solucoes/energia-solar-8.jpg" alt="ENERGIA SOLAR">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--SOBRE A SOLUÇÃO END-->

	<!--MOTIVOS PARA ESCOLHER START-->
	<section class="section background-turquesa border-0 mb-0 py-5">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-xl-8 text-center">
				<div class="overflow-hidden mb-3">
					<h4 class="font-weight-bold text-transform-none text-7 line-height-2 mb-0 appear-animation text-light animated appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400">MOTIVOS PARA ESCOLHER A ENERGIA SOLAR LEDAX</h4>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-10 py-3 mx-md-auto">
					<div class="row pt-2 clearfix">
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="feature-box-icon">
									<i class="icon-note icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light"> Proposta Personalizada</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
								<div class="feature-box-icon">
									<i class="icon-credit-card icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Pagamento facilitado</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="feature-box-icon">
									<i class="icon-check icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Qualidade e garantia</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<div class="feature-box-icon">
									<i class="fas fa-car icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Intermediação com a concessionária</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="feature-box-icon">
									<i class="icon-user-following icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Equipe dedicada de engenharia</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								<div class="feature-box-icon">
									<i class="icon-eye icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Monitoramento</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="feature-box-icon">
									<i class="icon-map icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Comissionamento</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								<div class="feature-box-icon">
									<i class="icon-like icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Ética de trabalho</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center pt-4">
				<div class="col-lg-9 col-xl-8 text-center">
					<div class="overflow-hidden mb-3">
						<a href="<?= $urlcompleta; ?>cases" class="btn btn-light-2 btn-outline font-weight-semibold px-4 btn-py-2 text-3">VEJA NOSSAS CASES</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--MOTIVOS PARA ESCOLHER END-->

	<!--QUEM PODE INVESTIR START-->
	<section class="border-0 m-0 section">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col text-center">
					<h3 class="font-weight-bold text-color-dark line-height-1 text-4 ls-0 mb-1">QUEM PODE INVESTIR EM UM</h3>
					<h2 class="font-weight-bold text-8 turquesa">Sistema de geração solar?</h2>
				</div>
			</div>

			<div class="row custom-process justify-content-center mt-4">

				<p class="text-3-5 text-color-dark mb-3 text-justify">A energia solar, através da geração distribuída, está regulamentada desde a publicação da Resolução 482 em 2012 pela ANEEL. Qualquer empresa pode produzir sua própria energia interligando na rede da distribuidora local, consumindo e gerando créditos.</p>

				<p class="text-3-5 text-color-dark mb-3 text-justify">Para isto, é preciso ter área suficiente para instalação dos painéis e pouca (ou nenhuma) sombra nesta área. O sistema é instalado de forma simples e rápida, e a LEDAX Energia Inteligente se encarrega de fazer tudo acontecer.</p>

				<p class="text-3-5 text-color-dark mb-3 text-justify">O passo a passo da instalação do sistema consiste em:</p>

				<ul class="list list-icons list-icons-style-3 list-tertiary appear-animation text-dark" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
					<li><i class="fas fa-check"></i>Pré-dimensionamento do sistema em um pré-projeto comercial (sem custo e sem compromisso);</li>
					<li><i class="fas fa-check"></i>Visita técnica ao local, para levantamento de informações para o projeto definitivo;</li>
					<li><i class="fas fa-check"></i>Elaboração do projeto e documentação necessária para entrada junto a concessionária e energia;</li>
					<li><i class="fas fa-check"></i>Submissão e acompanhamento da homologação do projeto pela concessionária;</li>
					<li><i class="fas fa-check"></i>Instalação do sistema de geração fotovoltaica;</li>
					<li><i class="fas fa-check"></i>Ativação, monitoramento do sistema fotovoltaico e garantia da produção de 100% no 1º ano.</li>
				</ul>


			</div>
		</div>
	</section>
	<!--QUEM PODE INVESTIR END-->

	<!--DESENHO EXPLICATIVO START-->
	<section class="section-with-shape-divider border-0 z-index-2 pb-0 m-0 py-5">

		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-6 ">
					<img src="<?= $urlcompleta; ?>img/ledax-esquema-solar.png" alt="Esquema Solar" />
				</div>
				<div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
					<div class="accordion" id="accordion1">
						<div class="card card-default">
							<div class="card-header" id="collapse1HeadingOne">
								<h4 class="card-title m-0">
									<a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1One" aria-expanded="false" aria-controls="collapse1One">
										1. PAINEL FOTOVOLTAICO
									</a>
								</h4>
							</div>
							<div id="collapse1One" class="collapse" aria-labelledby="collapse1HeadingOne" data-bs-parent="#accordion1">
								<div class="card-body">
									<p class="mb-0 text-justify">Os painéis fotovoltaicos transformam a energia luminosa do sol em energia elétrica através do efeitos fotovoltaico.</p>
								</div>
							</div>
						</div>
						<div class="card card-default">
							<div class="card-header" id="collapse1HeadingTwo">
								<h4 class="card-title m-0">
									<a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">
										2. CAIXA DE PROTEÇÃO (STRING BOX)
									</a>
								</h4>
							</div>
							<div id="collapse1Two" class="collapse" aria-labelledby="collapse1HeadingTwo" data-bs-parent="#accordion1">
								<div class="card-body">
									<p class="mb-0 text-justify">A String box protege os painéis e o inversor de pertubações do sistema elétrico externo.</p>
								</div>
							</div>
						</div>
						<div class="card card-default">
							<div class="card-header" id="collapse1HeadingThree">
								<h4 class="card-title m-0">
									<a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1Three" aria-expanded="false" aria-controls="collapse1Three">
										3. INVERSOR
									</a>
								</h4>
							</div>
							<div id="collapse1Three" class="collapse" aria-labelledby="collapse1HeadingThree" data-bs-parent="#accordion1">
								<div class="card-body">
									<p class="mb-0 text-justify">O Inversor converte a energia gerada pelos painéis para o padrão de rede de distribuição.</p>
								</div>
							</div>
						</div>
						<div class="card card-default">
							<div class="card-header" id="collapse1HeadingFour">
								<h4 class="card-title m-0">
									<a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1Four" aria-expanded="false" aria-controls="collapse1Four">
										4. QUADRO GERAL
									</a>
								</h4>
							</div>
							<div id="collapse1Four" class="collapse" aria-labelledby="collapse1HeadingFour" data-bs-parent="#accordion1">
								<div class="card-body">
									<p class="mb-0 text-justify">O Quadro geral conecta o sistema gerador ás cargas consumidoras.</p>
								</div>
							</div>
						</div>
						<div class="card card-default">
							<div class="card-header" id="collapse1HeadingFive">
								<h4 class="card-title m-0">
									<a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1Five" aria-expanded="false" aria-controls="collapse1Five">
										5. MEDIDOR BIDIRECIONAL
									</a>
								</h4>
							</div>
							<div id="collapse1Five" class="collapse" aria-labelledby="collapse1HeadingFive" data-bs-parent="#accordion1">
								<div class="card-body">
									<p class="mb-0 text-justify">Mede a quantidade de energia injetada e consumida da rede. É de responsabilidade da Concessionária de Energia.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<div class="shape-divider shape-divider-reverse-x">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
			<polygon fill="#034154" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
		</svg>
	</div>
	<!--DESENHO EXPLICATIVO END-->


	<!--MODELO DE NEGÓCIO START-->
	<section class="p-5" style="background: #034154;">
		<h4 class="font-weight-bold text-transform-none text-7 line-height-2 mb-0 text-light text-center pb-5">MODELO DE NEGÓCIO</h4>
		<div class="container mb-5" style="background: #008191; border-radius: 10px;">
			<div class="row align-items-center">
				<div class="col-lg-4 borda-modelo-negocio">
					<div class="justify-content-center d-flex">
						<img src="<?= $urlcompleta; ?>img/ledax-venda-direta.png" alt="VENDA DIRETA">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="owl-carousel owl-theme" style="margin: 0;" data-plugin-options="{'items': 2, 'autoplay': true, 'autoplayTimeout': 7000}">
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-notas.png" alt="Notas" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">CUSTEIO TOTAL DO SISTEMA E ECONOMIA IMEDIATA</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-executivo.png" alt="Solar" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">CONTRATANTE É DONO DO SISTEMA</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-notas.png" alt="Notas" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">DESEMBOLSO TOTAL DOS CUSTOS DO SISTEMA</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-nulo.png" alt="Sem desembolso" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">SEM PAGAMENTO MENSAL</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-garantia.png" alt="Garantia" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">GARANTIA DE SERVIÇO DE 5 ANOS</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mb-5" style="background: #008191; border-radius: 10px;">
			<div class="row align-items-center altura-card-financiamento">
				<div class="col-lg-4 borda-modelo-negocio">
					<div class="justify-content-center d-flex">
						<img src="<?= $urlcompleta; ?>img/ledax-financiamento-bancario.png" alt="FINANCIAMENTO BANCÁRIO">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="owl-carousel owl-theme" style="margin: 0;" data-plugin-options="{'items': 2, 'autoplay': true, 'autoplayTimeout': 7000}">
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-nulo.png" alt="Sem desembolso" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">SEM DESEMBOLSO INICIAL</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-executivo.png" alt="Solar" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">CONTRATANTE É DONO DO SISTEMA</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-desembolso.png" alt="Desembolso" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">ATÉ R$0,00 DE DESEMBOLSO INICIAL</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-banco.png" alt="Banco" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">PAGAMENTO MENSAL AO BANCO</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-garantia.png" alt="Garantia" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">GARANTIA DE SERVIÇO DE 5 ANOS</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="background: #008191; border-radius: 10px;">
			<div class="row align-items-center">
				<div class="col-lg-4 borda-modelo-negocio">
					<div class="justify-content-center d-flex">
						<img src="<?= $urlcompleta; ?>img/ledax-aluguel.png" alt="ALUGUEL">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="owl-carousel owl-theme" style="margin: 0;" data-plugin-options="{'items': 2, 'autoplay': true, 'autoplayTimeout': 7000}">
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-cofre.png" alt="Notas" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">SEM DESEMBOLSO E GARANTIA DE SERVIÇO EXTENDIDO</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-sistema.png" alt="Solar" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">LEDAX É DONA DO SISTEMA</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-nulo.png" alt="Sem desembolso" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">SEM DESEMBOLSO INICIAL</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-desembolso.png" alt="Pagamento mensal" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">PAGAMENTO MENSAL À LEDAX (MENOR QUE A CONTA DE ENERGIA)</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 justify-content-center d-flex aling-itens-center">
								<blockquote>
									<div class="justify-content-center d-flex">
										<img src="<?= $urlcompleta; ?>img/icone-servico.png" alt="Garantia" style="width: 50px;">
									</div>
									<p class="mb-0 text-2 text-light">GARANTIA DE SERVIÇO DURANTE TODO O CONTRATO</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--MODELO DE NEGÓCIO END-->

</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/footer.php'; ?>
<!--end: Footer -->