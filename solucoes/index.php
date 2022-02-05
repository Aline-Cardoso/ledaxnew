<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Soluções';
$description = "$title. Soluções customizadas energética através de iluminação LED, sistemas de geração fotovoltaica, monitoramento e gestão de consumo de energia";
$keywords     = "Comércio de " . $title . ", Produtos de " . $title . ", Serviços de " . $title . ", " . $title . " de qualidade, " . $title . " com melhor preço, " . $title . " com menor preço";
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/head.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

    <!-- BREADCRUMB START-->
    <?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. "includes/breadcrumb-institucionais.php";?>
    <!-- BREADCRUMB START END-->


    <section class=" border-0 z-index-2 pb-5 pt-5">

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="card card-background-image-hover border-0" style="background-image: url(<?= $urlcompleta; ?>img/iluminacao-bg.jpg); height: 311px;">
                        <div class="card-body text-center p-5 pb-4">
                            <picture><source srcset="<?= $urlcompleta; ?>img/iluminacao-1.webp" type="image/webp"><source srcset="<?= $urlcompleta; ?>img/iluminacao-1.png" type="image/png"><img src="<?= $urlcompleta; ?>img/iluminacao-1.png" alt="Iluminação" style="height: 50px;"/></picture>
                            <h4 class="card-title mt-2 mb-2 text-5 font-weight-bold text-light" style="text-shadow: 1px 1px 7px #000000;">ILUMINAÇÃO</h4>
                            <p class="card-text" style="font-size: 13px; color: #fff;text-shadow: 1px 1px 7px #000000;">A preocupação de trazer aos clientes o que há de mais avançado no mercado se estende também aos demais componentes das luminárias.</p>
                            <a href="<?=$urlcompleta;?>solucoes/iluminacao" class="btn btn-light btn-modern">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="card card-background-image-hover border-0" style="background-image: url(<?= $urlcompleta; ?>img/solar-bg.jpg); height: 311px;">
                        <div class="card-body text-center p-5">
                            <picture><source srcset="<?= $urlcompleta; ?>img/solar-1.webp" type="image/webp"><source srcset="<?= $urlcompleta; ?>img/solar-1.png" type="image/png"><img src="<?= $urlcompleta; ?>img/solar-1.png" alt="Energia Solar" style="height: 50px;"/></picture>
                            <h4 class="card-title mt-2 mb-2 text-5 font-weight-bold text-light" style="text-shadow: 1px 1px 7px #000000;">ENERGIA SOLAR</h4>
                            <p class="card-text" style="font-size: 13px; color: #fff;text-shadow: 1px 1px 7px #000000;">Qualquer empresa pode produzir sua própria energia interligando na rede da distribuidora local, consumindo e gerando créditos.</p>
                            <a href="<?=$urlcompleta;?>solucoes/energia-solar" class="btn btn-light btn-modern">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation mt-4" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="card card-background-image-hover border-0" style="background-image: url(<?= $urlcompleta; ?>img/eletrico-1-bg.jpg); height: 276px;">
                        <div class="card-body text-center p-3">
                            <picture><source srcset="<?= $urlcompleta; ?>img/poste-1.webp" type="image/webp"><source srcset="<?= $urlcompleta; ?>img/poste-1.png" type="image/png"><img src="<?= $urlcompleta; ?>img/poste-1.png" alt="Mercado Livre de Energia" style="height: 50px;"/></picture>
                            <h4 class="card-title mt-2 mb-2 text-5 font-weight-bold text-light" style="text-shadow: 1px 1px 7px #000000;">MERCADO LIVRE DE ENERGIA</h4>
                            <p class="card-text" style="font-size: 13px;color: #fff;text-shadow: 1px 1px 7px #000000;">O Mercado Livre de Energia é um ambiente onde grandes consumidores negociam a aquisição de energia direto com as geradoras.</p>
                            <a href="<?=$urlcompleta;?>solucoes/mercado-livre-de-energia" class="btn btn-light btn-modern">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation mt-4" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="card card-background-image-hover border-0" style="background-image: url(<?= $urlcompleta; ?>img/sobre-nos-bg.jpg); height: 276px;">
                        <div class="card-body text-center p-3">
                            <picture><source srcset="<?= $urlcompleta; ?>img/eletro-1.webp" type="image/webp"><source srcset="<?= $urlcompleta; ?>img/eletro-1.png" type="image/png"><img src="<?= $urlcompleta; ?>img/eletro-1.png" alt="Eletromobilidade" style="height: 50px;"/></picture>
                            <h4 class="card-title mt-2 mb-2 text-5 font-weight-bold text-light" style="text-shadow: 1px 1px 7px #000000;">ELETROMOBILIDADE</h4>
                            <p class="card-text" style="font-size: 13px;color: #fff;text-shadow: 1px 1px 7px #000000;">Os veículos elétricos já estão presentes no país, até 2030 as vendas de veículos híbridos alcancem a marca de 180 mil unidades por ano.</p>
                            <a href="<?=$urlcompleta;?>solucoes/eletromobilidade" class="btn btn-light btn-modern">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation mt-4" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="card card-background-image-hover border-0" style="background-image: url(<?= $urlcompleta; ?>img/tecnologia-bg-1.jpg); height: 276px;">
                        <div class="card-body text-center p-3">
                            <picture><source srcset="<?= $urlcompleta; ?>img/gestao-1.webp" type="image/webp"><source srcset="<?= $urlcompleta; ?>img/gestao-1.png" type="image/png"><img src="<?= $urlcompleta; ?>img/gestao-1.png" alt="Gestão e Tecnologia" style="height: 50px;"/></picture>
                            <h4 class="card-title mt-2 mb-2 text-5 font-weight-bold text-light" style="text-shadow: 1px 1px 7px #000000;">GESTÃO E TECNOLOGIA</h4>
                            <p class="card-text" style="font-size: 13px;color: #fff;text-shadow: 1px 1px 7px #000000;">Para entregar maior eficiência, a LEDAX criou um sistema de gestão inteligente de energia, o LEDAX.io.</p>
                            <a href="<?=$urlcompleta;?>solucoes/gestao-e-tecnologia" class="btn btn-light btn-modern">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>

            </div>
    </section>

</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/footer.php'; ?>
<!--end: Footer -->