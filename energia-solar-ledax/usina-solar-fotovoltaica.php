<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";
$title = 'Usina Solar Fotovoltaica';
$description = "Você já ouviu falar na usina solar fotovoltaica? Venha com a gente conhecer um pouco mais sobre essa tecnologia que pode ser a solução ideal para o seu negócio.";
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

           <p>A <strong>usina solar fotovoltaica</strong> é um sistema fotovoltaico de grande porte, que é projetado principalmente para geração e comercialização de energia elétrica. É nesse local onde a produção ocorre a partir das células solares, dispositivos esses que são capazes de converter radiação solar em eletricidade de forma inteligente e eficaz, além de sustentável.</p>

<p>Em geral quando falamos em usina solar fotovoltaica, ela é formada por milhares ou até mesmo centenas de células fotovoltaicas, também conhecidas como painéis solares. Ela será importante para o seu negócio principalmente quando falamos de economia e sustentabilidade<br />
 </p>

<p>Quer conhecer um pouco mais sobre a <strong>usina solar fotovoltaica</strong> e como ela funciona na prática? Venha com a gente conferir esse guia completo com todas as informações mais importantes que você precisa saber antes de investir nessa tecnologia.</p>

<h2>O que é uma usina solar fotovoltaica e como ela funciona?</h2>

<p>Você com certeza já deve ter visto por aí uma residência ou empresa que utiliza a tecnologia de energia solar para geração de energia elétrica garantindo mais economia e sustentabilidade para o seu negócio. Mas se você não sabe como funciona uma <strong>usina solar fotovoltaica</strong> veio ao lugar certo pois vamos te explicar com detalhes.</p>

<p>Uma <strong>usina solar falta voltaica</strong> é responsável pela produção de energia elétrica através de um sistema inteligente que capta a luz solar, a transformando em energia elétrica limpa e muito mais barato.</p>

<p>De acordo com os últimos dados, somente no Brasil são mais de 3893 usinas solares que estão em operação, isso não acontece por acaso, afinal o Brasil é o país que possui a climática perfeita para esse tipo de tecnologia.</p>

<p>O equipamento responsável por captar e transformá-lo em energia elétrica limpa, é a célula fotovoltaica que também é conhecida como os clássicos painéis solares.<br />
<br />
 Existem diversos tipos de painéis e eles são classificados levando em consideração os materiais utilizados em seu processo de fabricação sendo os principais tipos os cristalinos, monocristalinos, Policristalinos e Silício amorf.</p>

<p>Mas na hora de investir nos equipamentos necessários para uma <strong>usina solar fotovoltaica</strong>, é preciso ter a seu lado uma empresa que vai garantir além do equipamento da melhor qualidade uma instalação eficaz e inteligente!</p>

<h3>Quer investir em energia solar de qualidade? Conheça a Ledax!</h3>

<p>Como você já sabe a energia solar é uma opção inteligente para quem deseja reduzir drasticamente a conta de luz e ainda ser uma referência em sustentabilidade, tema esse que tem se tornado cada vez mais importante em nossa sociedade e não por acaso, afinal o colapso ambiental já é uma realidade.</p>

<p>E se você não quer errar na hora de escolher a melhor empresa para instalação de painéis solares, conheça a Ledax, uma referência em soluções energéticas que desenvolve os equipamentos da mais alta tecnologia para o seu negócio. Quer saber quais são as vantagens de investir? Confira!</p>

<ul class="list-icon list-icon-arrow">
	<li><strong>Mais economia para o seu negócio</strong><br />
	 </li>
</ul>

<p >você já sabe que um <strong>usina solar fotovoltaica</strong> é responsável pela produção de energia elétrica segura e limpa. Mas para utilizar essa tecnologia no seu negócio, é importante saber que um dos principais benefícios será uma maior economia.<br />
 </p>

<p >Aplicação de um sistema de energia solar pode reduzir a sua conta de luz em até 95% dinheiro esse que você poderá utilizar em outras esferas de sua empresa</p>

<p > </p>

<ul class="list-icon list-icon-arrow">
	<li><strong>Sustentabilidade</strong><br />
	 </li>
</ul>

<p>Infelizmente, dá para perceber que o colapso ambiental é uma realidade cada vez mais urgente e preocupante. Investir em energia solar proveniente de uma <strong>usina solar fotovoltaica</strong> é uma opção inteligente para que a sua empresa seja também uma referência em sustentabilidade.</p>
            
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