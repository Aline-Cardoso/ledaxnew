<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";
$title = 'Sistema De Energia Solar';
$description = "O Sistema De Energia Solar é a solução perfeita para a economia e sustentabilidade! Venha conhecer a gente!";
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

           <p>Se você tem uma empresa com alta demanda energética, sabe melhor do que ninguém que no fim do mês, pagar a conta de luz pode ser um verdadeiro pesadelo! Isso acontece principalmente com empresas que não fazem um investimento inteligente em soluções energéticas de qualidade, como o <strong>Sistema De Energia Solar, </strong>capaz de reduzir os custos em até 95%!<br />
<br />
Utilizar a energia solar como fonte de energia sustentável é uma opção inteligente para as empresas que não se preocupam apenas com a redução de custos, mas também com o bem estar do meio ambiente, assunto esse que tem se tornado cada vez mais urgente!<br />
<br />
Quer saber tudo sobre o <strong>Sistema De Energia Solar </strong>e quais os principais benefícios de investir? Então venha com a gente conhecer isso e muito mais no nosso guia completo com as melhores soluções energéticas para o seu negócio!<br />
 </p>

<h2>O que é o Sistema De Energia Solar e como ele funciona na prática?<strong> </strong></h2>

<p>Economizar na conta de luz da sua empresa se tornou um dos desejos número um dos empreendedores que já não aguentam as taxas abusivas pagas às empresas de distribuição de energia elétricas, que apenas no ano de 2021 já fizeram reajuste superior a 15% nas taxas, e que fez do brasil um dos países mais caros quando o assunto é energia elétrica.</p>

<p><br />
Por isso mesmo, investir em <strong>Sistema De Energia Solar </strong>tem se tornado uma opção cada vez mais comum, e não por acaso, já que essa escolha pode poupar nada menos do que 15% do orçamento de sua empresa!<br />
<br />
Mas como o <strong>Sistema De Energia Solar </strong>funciona na prática? Esse equipamento é movido à luz do sol, e também podem ser conhecidos como sistema de energia fotovoltaica ou sistemas fotovoltaicos.<br />
<br />
Instalando um conjunto de equipamentos adequados, eles serão responsáveis por transformar a luz solar em energia elétrica limpa e sustentável. Instalando uma placa solar o seu negócio vai reduzir de forma drástica o consumo de energia, além de ser uma referência em sustentabilidade.<br />
 </p>

<h3>Quais são as vantagens de investir no Sistema De Energia Solar da Ledax?<strong> </strong></h3>

<p>Como você viu, investir em um <strong>Sistema De Energia Solar </strong>de qualidade é uma forma econômica e inteligente de fazer do seu negócio uma referência! Mas para usufruir de todos os benefícios, é preciso optar por uma empresa que vai te oferecer um equipamento e instalação de qualidade, como a Ledax, que é referência no assunto!</p>

<h3>Equipamentos de alta tecnologia</h3>

<p>Os equipamentos de <strong>Sistema De Energia Solar </strong>da Ledax são desenvolvidos utilizando a mais alta tecnologia disponível no mercado, garantindo uma performance superior e zero gastos em manutenções desnecessárias!<br />
 </p>

<h3>Economia é lucro!</h3>

<p>Imagine só que investindo em um <strong>Sistema De Energia Solar </strong>da Ledax, a sua empresa vai ter uma economia de energia de cerca de 95%! Em 5 anos, o seu investimento terá sido pago, e você poderá direcionar o seu orçamento para outras aplicações de melhoria em sua empresa.<br />
 </p>

<h3>Clima perfeito!</h3>

<p>Não são todos os países que têm o privilégio de utilizar o <strong>Sistema De Energia Solar </strong>como no Brasil, já que aqui temos o clima ideal para que esse sistema funcione plenamente, garantindo uma redução drástica no consumo energético.<br />
<br />
E agora que você já sabe que fazer um investimento inteligente no <strong>Sistema De Energia Solar </strong>da Ledax é a opção ideal para seu negócio, não perca mais tempo e entre agora em contato com a equipe, que vai te guiar de forma inteligente por todas as etapas de instalação!</p>
            
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