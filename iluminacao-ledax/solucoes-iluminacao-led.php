<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";
$title = 'Soluções em iluminação LED';
$description = "Você sabe quais são as soluções em iluminação LED perfeitas para o seu negócio? Venha conhecer com a gente!";
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

           <p>Quando falamos em economia energética, estamos falando sobre uma das maiores parcelas dos gastos de uma empresa, seja ela de qualquer nicho. Muitas pessoas não sabem que a iluminação é um dos pontos que mais pode prejudicar a sua conta elétrica no final do mês, e é por isso mesmo que cada vez mais empresas têm investido em <strong>soluções Em iluminação LED</strong>.</p>

<p>Um investimento como esse pode não somente fazer a sua conta de luz ficar mais barata no final do mês, mas também vai ser essencial para criar ambientes únicos no seu estabelecimento, onde seus clientes e funcionários se sentiram mais confortáveis e aconchegantes.</p>

<p>Quer saber como investir de forma inteligente em <strong>soluções em iluminação LED</strong>? Venha com a gente conferir esse guia completo com todas as informações mais importantes sobre suas funcionalidades e benefícios principais. Confira!</p>

<h2>O que são a soluções iluminação LED e porque você deveria investir nessa tecnologia para o seu negócio?</h2>

<p>As luzes LED já são conhecidas há mais de meio século e têm sido utilizadas em uma infinidade de diferentes aplicações desde simples como os mostradores luminosos até os mais complexos. Com um aumento significativo na taxa de luz que apenas em 2020 foi de mais de 15%, cada vez mais investir em uma tecnologia como as luzes LED tem sido uma tendência no Brasil e no mundo.</p>

<p>Um projeto de iluminação inteligente é aquele que vai permitir um maior foco nos pontos principais do seu negócio. A construção de um ambiente confortável e aconchegante é primordial principalmente em locais de alto fluxo de pessoas, ou ambientes que são utilizados para o trabalho.</p>

<p>Quando falamos em <strong>solução em iluminação LED</strong> estamos falando de uma tecnologia que vem crescendo cada vez mais e não por acaso, afinal além de proporcionar uma maior economia para o seu negócio que vai passar a gastar muito menos com a conta de luz você também terá a sua disposição uma tecnologia inteligente e de alta eficácia energética.<br />
Essa é uma ótima forma de fazer com que o seu negócio seja uma verdadeira referência e atraia ainda mais clientes!</p>

<p>Mas na hora de escolher uma empresa ideal para investir em <strong>soluções em iluminação LED</strong>, você pode contar com a Ledax, que é referência em soluções energéticas no Brasil, com anos de experiência na execução de projetos inteligentes para empresas e indústrias.</p>

<h3>Quais são as vantagens de investir em solução de iluminação em LED?</h3>

<p>Você já sabe que quando o assunto são <strong>soluções em iluminação LED</strong>, a Ledax oferece o melhor serviço tanto em equipamentos quanto a instalação, com total garantia de que seu investimento será inteligente e de qualidade.</p>

<p>Mas se você está se perguntando por que investir em soluções de iluminação em led, venha conhecer com a gente algumas das principais vantagens dessa tecnologia!</p>

<ul class="list-icon list-icon-arrow">
	<li><strong>Eficiência energética</strong></li>
</ul>

<p> A luz de LED Possui uma eficiência energética superior há outras opções do mercado, afinal, a economia de energia será de 50 a 80% quando comparadas a tecnologias tradicionais o que reduz também a emissão de carbono na atmosfera.</p>

<ul class="list-icon list-icon-arrow">
	<li><strong>Segurança</strong></li>
</ul>

<p>Quando estamos falando sobre a segurança de um local, seja ele público ou privado, é preciso investir em soluções de iluminação LED para que seus clientes ou funcionários têm uma visibilidade superior nos ambientes reduzindo também a poluição visual.</p>

<ul class="list-icon list-icon-arrow">
	<li><strong>Sustentabilidade</strong></li>
</ul>

<p>E por último, mas com certeza não menos importante vírgula investir em <strong>soluções em iluminação led</strong> é uma forma inteligente de fazer com que a sua empresa também seja uma referência sustentabilidade.</p>
            
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