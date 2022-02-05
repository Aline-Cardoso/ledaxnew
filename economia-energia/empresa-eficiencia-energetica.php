<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";
$title = 'Empresa de Eficiência Energética';
$description = "Conheça a Ledax, a melhor empresa de eficiência energética!";
$keywords     = "Comércio de ".$title.", Produtos de ".$title.", Serviços de ".$title.", ".$title." de qualidade, ".$title." com melhor preço, ".$title." com menor preço";
$keyregiao      = $title;
include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/head-palavras.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. "includes/breadcrumb-institucionais.php";?>
	<!-- BREADCRUMB START END-->

    <section>

        <div class="container">

            <div class="row mt-5 mb-3">
                <div class="col-md-6" data-animation="fadeInLeft" data-animation-delay="0">
                    <img src="<?=$urlcompleta;?>img/palavras-chave/<?= $imagem;?>" class="img-responsive" alt="<?=$title;?>" itemprop="image">
                </div>

                <div class="col-md-6" data-animation="fadeInRight" data-animation-delay="0">
                    <?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/formulario.php' ;?>
                    <?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/bts-redes-sociais.php' ;?>
                </div>
            </div>

           <p>Você sabe do que se trata um <strong>empresa de eficiência energética</strong>? Esse tipo de empresa é especializado em oferecer produtos, serviços e soluções que visam melhorar o desempenho e a fonte de energia de diversas áreas do mercado.</p>

<p>No mundo em que vivemos hoje, já não há mais espaço para desperdício, principalmente em se tratando de energia. Uma <strong>empresa de eficiência energética</strong> irá desenvolver projetos específicos e personalizados para atender a demanda dos clientes e reverter gastos excessivos em lucros e produtividade.</p>

<p>Aproveite essa breve leitura para conhecer mais a respeito desse importante segmento do comércio de energia no Brasil e do mundo e conheça uma das empresas líderes do ramo: a Ledax, soluções em energia inteligente. A seguir:</p>

<h2>O que você precisa saber sobre empresa de eficiência energética</h2>

<p>Já de antemão, a principal coisa que você precisa saber sobre uma <strong>empresa de eficiência energética</strong> é o seu compromisso com um mundo mais eficiente, produtivo e sustentável.</p>

<p>Hoje em dia existem diversas formas de explorar o abastecimento energético de empresas, indústrias, residências e estabelecimentos de toda natureza de forma a economizar mais energia e depredar menos o meio ambiente.</p>

<p>A eficiência energética é uma forma otimizada e revolucionária de suprimento em energia e que está comprometida com a ciência e com a inovação, sempre realizando pesquisas e melhorias e descobrindo a melhor forma de atender as demandas do mercado.</p>

<p>Quando falamos da atuação de uma <strong>empresa de eficiência energética</strong> no Brasil, estamos principalmente falando em duas categorias de soluções que estão ganhando cada vez mais espaço e destaque em terras nacionais e fora:</p>

<ul class="list-icon list-icon-arrow">
	<li>O Investimento em Energia Solar</li>
	<li>A Migração para o Mercado Livre de energia</li>
</ul>

<p>A Energia Solar não é novidade, ela vem sendo desenvolvida e melhor utilizada há décadas e hoje representa um dos maiores potenciais de crescimento do país. É uma energia limpa e barata cujo investimento inicial é retornável em 5 anos.</p>

<p>Já a respeito da migração para o sistema de Mercado Livre de Energia, confira a seguir mais a respeito, as vantagens e como funciona:</p>

<h3>O Mercado Livre de Energia e suas vantagens em eficiência energética</h3>

<p>Uma <strong>empresa de eficiência energética</strong> responsável e comprometida com sua atuação, poderá oferecer para seus clientes a possibilidade de realizar uma migração para o Mercado Livre de Energia.</p>

<p>O Mercado Livre de Energia oferece as seguintes vantagens para o consumidor de energia:</p>

<ul class="list-icon list-icon-arrow">
	<li>Negociação de abastecimento personalizada, de acordo com a demanda de potência do contratante</li>
	<li>Negociação e contratação realizada diretamente com a geradora de energia e não com as concessionárias locais</li>
	<li>Redução significativa nos gastos fixos com energia</li>
	<li>Maior produtividade e competitividade no Mercado</li>
	<li>Processo todo é regulamentado pelas autoridades em Comercialização de Energia e a mediação é feita através de uma <strong>empresa de eficiência energética</strong>, ou seja, acessória com mais segurança e experiência no decorrer do processo.</li>
</ul>

<p>Nessa modalidade, basicamente a empresa contratante irá negociar o abastecimento de energia de sua empresa direto com uma geradora de energia, isso permite uma redução drástica nas contas fixas além de uma injeção de potência personalizada e que melhor atenda cada tipo de negócio.</p>

<p>É preciso atender a alguns critérios e realizar todo um processo e é aí que uma boa <strong>empresa de eficiência energética</strong> fará a diferença, garantindo que esta seja a melhor solução para o seu negócio e atuando em cada etapa do processo de implementação dessa nova fonte de energia e contrato.</p>

<p>Conheça a melhor:</p>

<h3>Mais eficiência energética com a Ledax, Soluções em energia inteligente</h3>

<p>A Ledax é a melhor <strong>empresa de eficiência energética</strong> do mercado e está pronta para oferecer as melhores soluções!</p>
            
            <?php 
            include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/carrossel.php' ;
            include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/tags.php' ;
            include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/regioes.php' ;

            ?>

        </div>

    </section>
<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/footer.php'; ?>
<!--end: Footer -->