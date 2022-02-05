<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Iluminação Pública - BR 324';
$description = "$title. Soluções customizadas energética através de iluminação LED, sistemas de geração fotovoltaica, monitoramento e gestão de consumo de energia";
$keywords     = "Comércio de " . $title . ", Produtos de " . $title . ", Serviços de " . $title . ", " . $title . " de qualidade, " . $title . " com melhor preço, " . $title . " com menor preço";
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/head.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/header.php'; ?>
<!-- end: Header -->

    <!-- BREADCRUMB START-->
    <?php include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina. "includes/breadcrumb-institucionais.php";?>
    <!-- BREADCRUMB START END-->

<div role="main" class="main">

    <div class="container pt-5">

        <div class="row">
            <div class="col-md-7">
                <div class="overflow-hidden">
                    <h2 class="turquesa font-weight-bold text-7 mb-2 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">BR 324 (TRECHO SALVADOR - SIMÕES FILHO)</h2>
                </div>
                <div class="mb-5">
                    <div class="col">
                        <span class="local appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Simões Filho | BA</span>
                        <span class="categoria appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">ILUMINAÇÃO PÚBLICA</span>
                    </div>
                </div>
                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Foram 22km de via iluminada com 1100 unidades da Polaris 170W, gerando maior uniformidade na iluminação, visibilidade e segurança. Como resultado, houve uma redução de 60% na carga instalada, comparando com as luminárias existentes anteriormente.</p>
                <div class="row">
                    <div class="col">
                        <div class="pricing-block rounded">
                            <div class="row">
                                <div class="col py-3">
                                    <div class="row">
                                        <ul class="list list-icons list-primary mb-0">
                                            <li><i class="icons icon-bulb text-color-primary"></i> Luminárias Usadas</li>
                                        </ul>
                                    </div>
                                    <div style="max-width: max-content;">
                                        <img src="<?= $urlcompleta; ?>img/cases/luminarias/street-polaris.jpg" width="130" alt="Street Polaris">
                                        <span class="font-weight-bold" style="color: #54a8b3!important;">Street Polaris</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="owl-carousel owl-theme nav-style-1 nav-bottom mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': false,'dots': false, 'loop': false, 'nav': true}">
                    <div>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/PpYafIQ05h0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div>
                        <a class="lightbox" href="<?= $urlcompleta; ?>img/cases/case-br-324.jpg" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="<?= $urlcompleta; ?>img/cases/case-br-324.jpg" alt="BR 324">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section style="background: #f5f5f5;">
        <div class="container my-4" style="margin-bottom: 0!important;">
            <div class="row">
                <div class="col">

                    <div class="tabs tabs-bottom tabs-center tabs-simple custom-tabs-style-1">
                        <ul class="nav nav-tabs">
                            <li class="nav-item w-25">
                                <a class="nav-link pb-2 px-5-5 active" href="#tabsNavigationSimpleIcons1" data-bs-toggle="tab">
                                    <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                            <span class="box-content p-0 m-0">
                                                <img src="<?= $urlcompleta; ?>img/icons/caution.png" alt="Problema" class="px-4 py-4" />
                                                <h4 class="positive-ls-3 font-weight-bold text-3">PROBLEMA</h4>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-25">
                                <a class="nav-link pb-2 px-5-5" href="#tabsNavigationSimpleIcons2" data-bs-toggle="tab">
                                    <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                            <span class="box-content p-0 m-0">
                                                <img src="<?= $urlcompleta; ?>img/icons/idea.png" alt="Solução" class="px-4 py-4" />
                                                <h4 class="positive-ls-3 font-weight-bold text-3">SOLUÇÃO</h4>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-25">
                                <a class="nav-link pb-2 px-5-5" href="#tabsNavigationSimpleIcons3" data-bs-toggle="tab">
                                    <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                            <span class="box-content p-0 m-0">
                                                <img src="<?= $urlcompleta; ?>img/icons/medical-result.png" alt="Resultados" class="px-4 py-4" />
                                                <h4 class="positive-ls-3 font-weight-bold text-3">RESULTADOS</h4>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content px-lg-5 mx-lg-5">
                            <div class="tab-pane active" id="tabsNavigationSimpleIcons1">
                                <div class="text-center">
                                    <p class="text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet massa tellus, vitae lacinia arcu mollis ac. Nulla ex enim, pellente que vitae tristique vel, porttitor in quam. Vestibulum mattis quam gravida malesuada faucibus. Duis nec est ac metuspulvinar nunc commodo nisi orci, sit amet fermentum sapien tempus eu. </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                                <div class="text-center">
                                    <p class="text-3-5 line-height-9">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis fuga nesciunt, assumenda ipsam quod et quos deleniti nemo fugiat ex in tenetur sequi recusandae hic, ullam ea perspiciatis sit? Quod.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabsNavigationSimpleIcons3">
                                <div class="text-center">
                                    <p class="text-3-5 line-height-9">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel consequuntur suscipit laboriosam, est eveniet vitae fugit illo aliquid labore fugiat similique sit obcaecati voluptas. Unde perferendis assumenda ducimus consequuntur voluptates.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/footer.php'; ?>
    <!--end: Footer -->