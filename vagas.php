<?php
$title = 'Vagas';
$description = "Venha fazer parte da equipe Ledax!";
$keywords     = "Comércio de ".$title.", Produtos de ".$title.", Serviços de ".$title.", ".$title." de qualidade, ".$title." com melhor preço, ".$title." com menor preço";
include 'includes/head.php';
?>

<!-- Header -->
<?php include 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<?php include "includes/breadcrumb-institucionais.php";?>
	<!-- BREADCRUMB START END-->


	<div class="container py-4">

		<div class="overflow-hidden mb-3">
			<h2 class="font-weight-bold text-8 text-center mb-0 appear-animation turquesa" data-appear-animation="maskUp">
				Envie seu Curriculo
			</h2>
			<p class="text-center appear-animation" data-appear-animation="maskUp">Preencha os campos abaixo para enviar seu currículo:</p>
		</div>

		<div class="row justify-content-center mb-5">
			<div class="col-md-8">

				<form class="contact-form" enctype="multipart/form-data" method="POST">
					<div class="row">
						<div class="form-group col">
							<input type="text" placeholder="Nome" value="<?php echo isset($_POST['nome']) && !empty($_POST['nome']) ? $_POST['nome'] : '';?>" maxlength="100" class="form-control" name="nome" id="nome" required>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group col-lg-6">
							<input type="email" placeholder="E-mail" value="<?php echo isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : '';?>" maxlength="100" class="form-control" name="email" id="email" required>
						</div>
						<div class="form-group col-lg-6">
							<input type="text" placeholder="Telefone" value="<?php echo isset($_POST['telefone']) && !empty($_POST['telefone']) ? $_POST['telefone'] : '';?>" maxlength="100" class="form-control" name="telefone" id="telefone" required>
						</div>
					</div>
									
					<div class="row">
						<div class="form-group col">
							<select class="form-control" name="area-pretendida" required="">
								<option selected="" value="">-- Área Pretendida --</option>
                            
                                <option value="Analista de DP">Analista de DP</option>
                                <option value="Analista Comercial">Analista Comercial</option>
                                <option value="Analista de Marketing e Vendas">Analista de Marketing e Vendas</option>
                                <option value="Estágio em Marketing">Estágio em Marketing</option>
                                <option value="Estágio em Projeto Luminotécnico">Estágio em Projeto Luminotécnico</option>
                                <option value="Estágio em Logística">Estágio em Logística</option>
                                <option value="Projetista de Iluminação">Projetista de Iluminação</option>
                                <option value="Estágio Engenharia">Estágio Engenharia</option>
                                <option value="Estágio em Inteligência de Mercado">Estágio em Inteligência de Mercado</option>
                                <option value="Desenvolvedor Front-End">Desenvolvedor Front-End</option>
                            
                                <!-- <option value="Analista de Negócios - BH">Analista de Negócios - BH</option>
                            
                                <option value="Assistente Financeiro">Assistente Financeiro</option>
                            
                                <option value="Auxiliar de Produção Metalurgia">Auxiliar de Produção Metalurgia</option>
                            
                                <option value="Coordenador(a) de Negócios em Solar">Coordenador(a) de Negócios em Solar</option>
                            
                                <option value="Especialista em Projetos - BH">Especialista em Projetos - BH</option>
                             -->
                            
                               <!--  <option value="Estágio em Projetos Fotovoltaicos">Estágio em Projetos Fotovoltaicos</option>
                            
                                <option value="Projetista Luminotécnico">Projetista Luminotécnico</option>
                            
                                <option value="Técnico de Instalações">Técnico de Instalações</option>

                                <option value="Assistente fiscal">Assistente fiscal</option>

                                <option value="Coordenador instalações fotovoltaico">Coordenador instalações fotovoltaico</option>

                                <option value="Coordenador negocios fotovoltaico">Coordenador negocios fotovoltaico</option -->>

							</select>
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col">
							<textarea type="text" name="mensagem" rows="5" class="form-control required" placeholder="Mensagem"><?php echo isset($_POST['mensagem']) && !empty($_POST['mensagem']) ? $_POST['mensagem'] : '';?></textarea>
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col">
							<input type="file" class="form-control" name="files">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-lg-6">
							<div class="h-captcha" data-sitekey="<?=$sitekey?>"></div>
						</div>
						<div class="form-group col-lg-6">
							<input type="submit" name="submit" value="Enviar" class="btn btn-primary btn-modern">
						</div>
					</div>

					<?php if(isset($_POST['submit'])){require_once('php/cadastro-form.php');}?>
				</form>

			</div>

		</div>


	</div>

</div>


<!-- Footer -->
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

<!-- Vendor -->
<script src="<?= $urlcompleta; ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/lazysizes/lazysizes.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/vide/jquery.vide.min.js"></script>
<script src="<?= $urlcompleta; ?>vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?= $urlcompleta; ?>js/theme.js"></script>

<!-- CAMPO OCULTO FORMULARIO ORBIT -->
<script src="<?= $urlcompleta; ?>js/orbit-form.js"></script>

<script src="<?= $urlcompleta; ?>js/views/view.shop.js"></script>

<!-- Theme Initialization Files -->
<script src="<?= $urlcompleta; ?>js/theme.init.js"></script>

<!-- Examples -->
<script src="<?= $urlcompleta; ?>js/examples/examples.gallery.js"></script>
<script src="<?= $urlcompleta; ?>js/examples/examples.portfolio.js"></script>

<script src="https://hcaptcha.com/1/api.js"></script>

<script type="text/javascript" src="https://phonetrack-static.s3.sa-east-1.amazonaws.com/914101ec47c52b48a7b6ccc6f5a76f1f.js" id="script-pht-phone" data-cookiedays="5"></script>



</body>

</html>
<!--end: Footer -->