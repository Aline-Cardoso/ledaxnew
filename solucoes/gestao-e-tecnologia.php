<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Gestão e Tecnologia';
$description = "Sistema de gestão inteligente de energia, desenvolvido pela LEDAX para atender a necessidade de clientes que buscam otimizar seus custos e consumo.";
$keywords     = "Comércio de " . $title . ", Produtos de " . $title . ", Serviços de " . $title . ", " . $title . " de qualidade, " . $title . " com melhor preço, " . $title . " com menor preço";
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/head-palavras.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<section class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-6 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}" data-image-src="<?=$urlcompleta?>img/page-header/gestao-breadcrumb.jpg">
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
			<div class="col-md-8">
				<h2 class="font-weight-bold text-7 turquesa">O QUE SÃO SOLUÇÕES EM GESTÃO E TECNOLOGIA?</h2>

				<p class="text-3-5 mb-4-5 appear-animation  text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Para entregar maior eficiência, a LEDAX criou um sistema de gestão inteligente de energia, o LEDAX.io, que une o monitoramento em tempo real através de sensores inteligentes com as tecnologias de processamento em nuvem e IoT dentro do conceito da indústria 4.0. </p>

				<p class="text-3-5 mb-4-5 appear-animation  text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">As soluções do em gestão e tecnologia permitem a gestão de energia e monitoramento de equipamentos de forma automatizada e com acesso remoto, contribuindo para a tomada de decisões mais assertivas e implantação de manutenções preditivas, possibilitando uma melhor performance e otimização dos custos com energia da planta de nossos clientes. Dentro desta divisão de negócios também estão as soluções para gestão de faturas de energia e integração de sistemas de monitoramento de energia e utilidades de diferentes fornecedores.</p>

				<p class="text-3-5 mb-4-5 appear-animation  text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Nossa equipe de desenvolvimento interno garante flexibilidade para adaptar as soluções às necessidades específicas de cada perfil de cliente, oferecendo soluções se encaixam perfeitamente ao que o cliente precisa para ter uma melhor performance energética de sua planta.</p>


				<p class="text-3-5 mb-4-5 appear-animation  text-justify" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Com nosso sistema é possivel, de forma remota, monitorar o consumo de energia elétrica, traçar perfis e histórico de consumo e, também, controlar perfis horários e automatizar o consumo de aparelhos, máquinas e dispositivos. Além de ter a capacidade de gerar relatórios segmentados e em tempo real. Trouxemos a visão do cliente para a aplicação ao oferecer dashboards Gerencial e Operacional, com análises e gráficos otimizados para cada área do cliente, comparando indicadores para uma melhor tomada de decisões em investimentos.</p>


				<a href="<?= $urlcompleta; ?>fale-conosco" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-5 mb-sm-0 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="350" style="animation-delay: 350ms;">SOLICITAR ORÇAMENTO</a>
			</div>

			<div class="col-md-3">
				<img class="imgdesktop" src="<?=$urlcompleta;?>img/solucoes/gestao-1.jpg" alt="<?=$title;?>">
				<img class="imgmobile" src="<?=$urlcompleta;?>img/solucoes/gestao-2.jpg" alt="<?=$title;?>">
			</div>

		</div>
	</div>
	<!--SOBRE A SOLUÇÃO END-->

	<!--DESENHO EXPLICATIVO START-->
	<div class="shape-divider shape-divider-reverse-x">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
			<polygon fill="#034154" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
		</svg>
	</div>

	<section class="section border-0 mb-0 pb-10 pt-0 mt-0" style="background-color: #034154;">

		<div class="container" style="padding-top: 70px;">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0 ">
					<div class="owl-carousel owl-theme nav-bottom mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true,'dots': false, 'loop': true, 'nav': true}">
						<div>
							<a class="lightbox" href="<?=$urlcompleta;?>img/solucoes/gestao-3-1.jpg" data-plugin-options="{'type':'image'}">
								<img class="img-fluid" src="<?=$urlcompleta;?>img/solucoes/gestao-3.jpg" alt="<?=$title;?>">
							</a>
						</div>
						<div>
							<a class="lightbox" href="<?=$urlcompleta;?>img/solucoes/gestao-4-1.jpg" data-plugin-options="{'type':'image'}">
								<img class="img-fluid" src="<?=$urlcompleta;?>img/solucoes/gestao-4.jpg" alt="<?=$title;?>">
							</a>
						</div>
					</div>

				</div>
				<div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
					<div class="col">
						<h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1 pt-2">Conheça nosso</h3>
						<h2 class="font-weight-bold text-7 text-color-light">Sistema de gestão inteligente</h2>
					</div>

					<div class="accordion" id="accordion1">
						<div class="card card-default">
							<div class="card-header" id="collapse1HeadingOne">
								<h4 class="card-title m-0">
									<a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1One" aria-expanded="false" aria-controls="collapse1One">
										<i class="fas fa-check"></i> MONITORAMENTO
									</a>
								</h4>
							</div>
							<div id="collapse1One" class="collapse" aria-labelledby="collapse1HeadingOne" data-bs-parent="#accordion1">
								<div class="card-body">
									<p class="mb-0">O adequado monitoramento e análise dos dados são a chave para ações assertivas de eficiência energética e otimização de custos.

										Monitoramento total, setorizado ou por equipamentos, permitindo análises em tempo real ou de históricos de uso do consumo e demanda de energia elétrica

									Comparação de desempenho entre equipamentos, setores ou unidades, projeção de custos, indicadores para antecipação de manutenções evitando paradas não programadas da planta, definição e acompanhamento de metas de desempenho são algumas das ferramentas do sistema.</p>
								</div>
							</div>
						</div>
						<div class="card card-default">
							<div class="card-header" id="collapse1HeadingTwo">
								<h4 class="card-title m-0">
									<a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">
										<i class="fas fa-check"></i> CONTROLE E AUTOMAÇÃO
									</a>
								</h4>
							</div>
							<div id="collapse1Two" class="collapse" aria-labelledby="collapse1HeadingTwo" data-bs-parent="#accordion1">
								<div class="card-body">
									<p class="mb-0">Redução de consumo através de controle automatizado por perfil horário de funcionamento em equipamentos como ar condicionados e controle de iluminação por perfil horário ou dimerização, evitando desperdício de energia com esquecimento de equipamentos ligados ou com uso fora de horários especificados.</p>
								</div>
							</div>
						</div>
						<div class="card card-default">
							<div class="card-header" id="collapse1HeadingThree">
								<h4 class="card-title m-0">
									<a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1Three" aria-expanded="false" aria-controls="collapse1Three">
										<i class="fas fa-check"></i> GESTÃO DE FATURAS DE ENERGIA
									</a>
								</h4>
							</div>
							<div id="collapse1Three" class="collapse" aria-labelledby="collapse1HeadingThree" data-bs-parent="#accordion1">
								<div class="card-body">
									<p class="mb-0">Coleta de dados das faturas de energia de forma automatizada com processamento das informações através de computação em nuvem. Análises que permitem entender os detalhes do consumo, definir ações para a melhoria da eficiência energética e redução de custos.

									Configuração de alarmes e alertas de desempenho, comparação entre unidades e análises personalizadas são algumas das funcionalidades disponíveis.</p>
								</div>
							</div>
						</div>
						<div class="card card-default">
							<div class="card-header" id="collapse1HeadingFour">
								<h4 class="card-title m-0">
									<a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1Four" aria-expanded="false" aria-controls="collapse1Four">
										<i class="fas fa-check"></i> DASHBOARD GERENCIAL
									</a>
								</h4>
							</div>
							<div id="collapse1Four" class="collapse" aria-labelledby="collapse1HeadingFour" data-bs-parent="#accordion1">
								<div class="card-body">
									<p class="mb-0">Emissão de relatórios e análises customizados por intervalo temporal e segmento empresarial com foco na identificação de oportunidades para redução de custo e otimização de investimentos.</p>
								</div>
							</div>
						</div>
						<div class="card card-default">
							<div class="card-header" id="collapse1HeadingFive">
								<h4 class="card-title m-0">
									<a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1Five" aria-expanded="false" aria-controls="collapse1Five">
										<i class="fas fa-check"></i> DASHBOARD OPERACIONAL
									</a>
								</h4>
							</div>
							<div id="collapse1Five" class="collapse" aria-labelledby="collapse1HeadingFive" data-bs-parent="#accordion1">
								<div class="card-body">
									<p class="mb-0">Relatórios com medições em tempo real com foco nas ações de operação e manutenção, alarmes e alertas que permitem a antecipação de ações de manutenção reduzindo custos e preservando a vida útil dos equipamentos.</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</section>

	<!--DESENHO EXPLICATIVO END-->



</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/footer.php'; ?>
<!--end: Footer -->