<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";
$title = 'Empresa de Energia Solar';
$description = "O que você precisa saber sobre uma empresa de energia solar.";
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
                    <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                        <div>
                            <img src="<?=$urlcompleta;?>img/palavras-chave/<?= $imagem;?>" class="img-responsive" alt="<?=$title;?>" itemprop="image">
                        </div>
                        <div>
                            <img src="<?=$urlcompleta;?>img/palavras-chave/<?= $imagem2;?>" class="img-responsive" alt="<?=$title;?>" itemprop="image">
                        </div>
                        <div>
                            <img src="<?=$urlcompleta;?>img/palavras-chave/<?= $imagem3;?>" class="img-responsive" alt="<?=$title;?>" itemprop="image">
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-animation="fadeInRight" data-animation-delay="0">
                    <?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/formulario.php' ;?>
                    <?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/bts-redes-sociais.php' ;?>
                </div>
            </div>

           <p>Tudo o que você precisa saber a respeito da atuação de uma <strong>empresa de energia solar</strong> você vai conferir nesta breve leitura. Seja você um estudante ou profissional da área, seja você uma pessoa interessada na contratação de energia solar, não perca a oportunidade de conhecer mais!</p>

<p>A energia solar, de fato, não é novidade para o mundo. Porém, hoje ela alcançou patamares nunca antes atingidos e é uma fonte de energia com o maior potencial de crescimento em demanda no Brasil e no mundo. Além de ser uma fonte de energia limpa e sustentável, é extremamente econômica.</p>

<p>O mundo de hoje pede atenção com desperdícios, pede otimização de infra-estruturas, sistemas, processos e formas de operação e abastecimento de energia. E a energia solar está na dianteira dessas melhorias e inovações.</p>

<p>Confira a seguir tudo o que você precisa saber de imediato sobre uma <strong>empresa de energia solar</strong> e quais as vantagens ela pode oferecer para você:</p>

<h2>Conheça mais sobre uma empresa de energia solar</h2>

<p>O que você precisa saber de antemão sobre uma <strong>empresa de energia solar</strong> é que este é um tipo de empresa comprometida com a ciência, as inovações e a melhoria constante no mercado de abastecimento inteligente de energia.</p>

<p>Essas empresas irão atuar de forma incessante para garantir a qualidade e o sucesso de um projeto desde o seu primeiro contato com o cliente até a manutenção e acompanhamento do desempenho do sistema instalado.</p>

<p>Quando falamos em energia solar, estamos falando de um sistema de abastecimento chamado modelo fotovoltaico. Ele corresponde àqueles painéis de metal que são dispostos sobre uma superfície plana, sem sombras, e que captam a energia do sol transformando-a em energia.</p>

<p>Esse modelo fotovoltaico terá um dimensionamento personalizado feito pela <strong>empresa de energia solar</strong> para o porte e demanda de cada projeto, sendo ele industrial, residencial, comercial, hospitalar ou o que for</p>

<p>Na verdade, a energia solar está despontando como o maior potencial de abastecimento energético do país, chegando a bater um recorde de instalações no Nordeste em 2018. Essa tendência só tem a aumentar, pois, as vantagens são inúmeras.</p>

<p>Dentre elas destaca-se principalmente:</p>

<ul class="list-icon list-icon-arrow">
	<li>fonte de energia limpa</li>
	<li>investimento retornável</li>
	<li>redução dos gastos fixos com energia em até 95%</li>
</ul>

<p>Conheça as vantagens que uma <strong>empresa de energia solar</strong> pode oferecer para você:</p>

<h3>Vantagens na contratação de uma empresa de energia solar</h3>

<p>Quando se trata da contratação de uma <strong>empresa de energia solar</strong>, além das vantagens em relação à economia e a sustentabilidade, o consumidor pode optar por soluções como, por exemplo:</p>

<ol>
	<li>A aquisição de um sistema fotovoltaico</li>
	<li>O aluguel de um sistema fotovoltaico</li>
	<li>Otimização e  manutenção periódica de um sistema fotovoltaico</li>
</ol>

<p>Quando se decide investir em energia solar adquirindo um sistema próprio, o cliente terá um desembolso inicial com a instalação dos painéis e estrutura que é retornável em uma média de 5 anos.</p>

<p>Um sistema dessa natureza pode chegar a ter uma vida útil de 25 anos, e lembrando que a redução com os gastos fixos com energia é 95%.</p>

<p>Para aqueles que não pretendem realizar a aquisição do sistema, é possível alugá-lo. Neste caso, a <strong>empresa de energia solar</strong> instala o sistema e cobra uma conta mensal consideravelmente inferior a uma conta de luz tradicional.</p>

<p>É possível ainda obter soluções específicas, manutenção preventiva e acompanhamento do desempenho e qualidade do fornecimento.</p>

<p>Conheça uma empresa que oferece todas essas soluções e vantagens:</p>

<h3>Conheça Ledax, a melhor solução em energia para o seu empreendimento</h3>

<p>A Ledax é a <strong>empresa de energia solar</strong> mais eficiente do mercado. Conheça já!</p>
            
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