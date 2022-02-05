<footer id="footer" class="mt-0">
    <div class="container my-4">
        <div class="row py-1">
            <div class="col-md-4 col-lg-5 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Sobre a LEDAX</h5>
                <p class="text-2 text-light mb-0">A LEDAX é uma empresa especializada em eficiência energética que foi fundada em 2014 e oferece diversas soluções para o mercado corporativo e público como iluminação em LED, painéis fotovoltaicos, monitoramento e gestão do consumo de energia, carregadores para veículos elétricos e migração de contratos para o mercado livre de energia.</p>
                <div class="widget clearfix widget-contact-us mt-3">
                    <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Redes Sociais</h5>
                    <ul class="social-icons d-sm-block ml-1 mt-4">
                        <li class="social-icons-facebook"><a href="<?= $linkFace; ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-linkedin"><a href="<?= $linkedIn; ?>" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                        <li class="social-icons-instagram"><a href="<?= $linkInstagram; ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-5 col-lg-2 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Navegação</h5>
                <ul class="list list-icons list-icons-sm">
                    <?php $menuRodape = true; include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/menu-rodape.php';?>

                </ul>
            </div>
            <div class="col-md-4 col-lg-5 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Informações de Contato</h5>
                <p class="text-4 mb-0"><i class="fas fa-envelope text-color-light"></i> <a class="text-color-light" href="mailto:<?= $email; ?>" target="_blank" class="text-color-primary"><?= $email; ?></a></p>
                <p class="text-4 mb-0"><i class="fa fa-phone text-color-light"></i> <a class="text-color-light" href="<?= $tellink; ?>" target="_blank" class="text-color-primary"><?= $ddd; ?> <?= $tel; ?></a></p>
                <p class="text-4 mb-0"><i class="fab fa-whatsapp text-color-light"></i> <a class="text-color-light" href="<?= $whatslink; ?>" target="_blank" class="text-color-primary"><?= $ddd; ?> <?= $whats; ?></a></p>
                <div class="widget clearfix widget-contact-us">
                    <h3 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4 mt-4">Endereço</h3>
                    <i class="fa fa-map-marker-alt" style="color: #fff;"></i> <a style="color: #fff;" target="_blank" href="<?= $linkMapa; ?>" title="<?= $endereco; ?> - <?= $bairro; ?> - <?= $cidade; ?>"><?= $endereco; ?> - <?= $bairro; ?> - <?= $cidade; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2" style="background: #034154;">
        <div class="container py-2">
            <div class="row py-1">
                <div class="col mb-4 mb-lg-0 text-center">
                    <p class="text-color-light">© 2021 <?= $nomeEmpresa; ?> - Todos os direitos reservados<strong><a style="color:#fff;padding-left: 5px;" href="<?= $author; ?>" target="_blank"><i class="icon-tipo"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script type="text/javascript" src="https://phonetrack-static.s3.sa-east-1.amazonaws.com/914101ec47c52b48a7b6ccc6f5a76f1f.js" data-cookiedays="5"></script>

<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/7af56389-fe09-4ba2-a222-cda3cb523d4c-loader.js"></script>

<script src="<?= $urlcompleta; ?>js/default.min.js"></script>

<script src="https://hcaptcha.com/1/api.js"></script>


</body>

</html>