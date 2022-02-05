<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-borders">
            <div class="container h-100 top-bar-oculto">
                <div class="header-row h-100">

                    <?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/top-bar.php';?>

                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="<?=$urlcompleta;?>" class="<?=$nomeEmpresa;?>" data-dark-logo="<?=$logo;?>">
                                <img src="<?=$logo;?>" alt="<?=$nomeEmpresa;?>">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active" href="<?=$urlcompleta;?>">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item dropdown-toggle" href="<?=$urlcompleta;?>institucional">
                                                Institucional
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="<?=$urlcompleta;?>solucoes">
                                                Soluções
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="<?=$urlcompleta;?>solucoes/iluminacao">Iluminação</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=$urlcompleta;?>solucoes/energia-solar">Energia Solar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=$urlcompleta;?>solucoes/mercado-livre-de-energia">Mercado Livre de Energia</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=$urlcompleta;?>solucoes/gestao-e-tecnologia">Gestão e Tecnologia</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="<?=$urlcompleta;?>solucoes/eletromobilidade">Eletromobilidade</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item dropdown-toggle" href="<?=$urlcompleta;?>cases">
                                                Cases LEDAX
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item dropdown-toggle" href="<?=$urlcompleta;?>blog">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="<?=$urlcompleta;?>fale-conosco">
                                                Contato
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="<?=$urlcompleta;?>fale-conosco">Fale Conosco</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="https://interno.ledax.com/vagas/">Vagas</a>
                                                </li>
<!--                                                 <li>
                                                    <a class="dropdown-item" href="<?=$urlcompleta;?>orbit">Orbit</a>
                                                </li> -->
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div role="main" class="main">