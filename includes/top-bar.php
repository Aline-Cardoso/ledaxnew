<div class="header-column justify-content-start">
    <div class="header-row">
        <nav class="header-nav-top">
            <ul class="nav nav-pills">
                <li class="nav-item nav-item-borders py-2">
                    <a target="_blank" href="<?= $whatslink; ?>"><i class="fab fa-whatsapp text-4" style="top: 0; color: #008191;"></i><?= $ddd; ?> <?= $whats; ?></a>
                </li>
                <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
                    <a target="_blank" href="<?= $tellink; ?>"><i class="fa fa-phone text-4" style="top: 0px; color: #008191;"></i><?= $ddd; ?> <?= $tel; ?></a>
                </li>
                <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
                    <a target="_blank" href="mailto:<?=$email;?>"><i class="far fa-envelope text-4" style="top: 0px; color: #008191;"></i><?= $email; ?></a>
                </li>

                <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">                  
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe text-4" style="top: 0px; color: #008191;"></i>Mapa do Site <i class="fas fa-angle-down"></i>
                    </a>
                    <?php $mapaSite = true; echo $mapaSite ? '<div class="dropdown-menu"><ul class="menu-produtos">'.montarMenu($menu).'</ul></div>' : '';?>
                </li>    

            </ul>
        </nav>
    </div>
</div>
<div class="header-column justify-content-end">
    <div class="header-row">
        <nav class="header-nav-top">
            <ul class="nav nav-pills">
                <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                    <ul class="header-social-icons social-icons social-icons-clean">
                        <li class="social-icons-facebook"><a href="<?= $linkFace; ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-instagram"><a href="<?= $linkInstagram; ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                        <li class="social-icons-linkedin"><a href="<?= $linkedIn; ?>" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </ul>
            </nav>
        </div>
    </div>