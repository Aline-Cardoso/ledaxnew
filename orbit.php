<?php
$title = 'ORBIT';
$description = "$title. Soluções customizadas energética através de iluminação LED, sistemas de geração fotovoltaica, monitoramento e gestão de consumo de energia";
$keywords     = "Comércio de ".$title.", Produtos de ".$title.", Serviços de ".$title.", ".$title." de qualidade, ".$title." com melhor preço, ".$title." com menor preço";
include 'includes/head.php';
?>

<!-- Header -->
<?php include 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<section class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-6 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}" data-image-src="<?=$urlcompleta?>img/page-header/orbit-breadcrumb.jpg">
		<div class="container position-relative z-index-2">
			<div class="row text-center text-md-start">
				<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
					<h1 class="font-weight-bold text-color-light text-12 mb-0 order-1"><?= $title; ?></h1>
					<ul class="breadcrumb breadcrumb-light d-block text-md-start text-4 mb-0">
						<li><a href="<?= $urlcompleta; ?>index" class="text-decoration-none">Home</a></li>
						<li class="text-upeercase active"><?= $title; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- BREADCRUMB START END-->

	<div class="container py-4">

		<div class="overflow-hidden mb-3">
			<p class="text-center appear-animation" data-appear-animation="maskUp">Preencha os campos abaixo para abertura do chamado:</p>
		</div>

		<div class="row justify-content-center mb-5">
			<div class="col-md-12">

				<form class="contact-form" method="POST" enctype="multipart/form-data">
					
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
							<input type="text" placeholder="AnyDesk" value="<?php echo isset($_POST['anydesk']) && !empty($_POST['anydesk']) ? $_POST['anydesk'] : '';?>" maxlength="100" class="form-control" name="anydesk" id="anydesk" required>
						</div>
					</div>


					<div class="row">
						<div class="form-group col">
							<label for="departamento" class="control-label col-md-1">Departamento:</label>          
							<div class="col-md-12">                                      
								<div class="checkbox" id="departamento" name="departamento-form"  required="">
									<label><input type="checkbox" name="departamento" value="Dashboard" class="me-2 ms-2">Dashboard</label>                                      
									<label><input type="checkbox" name="departamento" value="Infraestrutura-Administrativo" class="me-2 ms-2">Infraestrutura Administrativo</label>
									<label><input type="checkbox" name="departamento" value="Infraestrutura-TI" class="me-2 ms-2">Infraestrutura T.I</label>
									<label><input type="checkbox" name="departamento" value="Manutencao-Fabril" class="me-2 ms-2">Manutenção Fabril</label>
									<label><input type="checkbox" name="departamento" value="Sistema" class="me-2 ms-2">Sistema</label>                                                                                                                                
								</div>
							</div>
						</div>
					</div>

					<!-- OPÇÃO DASHBOARD -->
					<div class="form-group mb-4" style="margin: 0 auto; display: none;" id="divDashboard" data-label="Dashboard">   
						<label for="out" class="control-label col-md-1">Serviço:</label>    
						<div class="col-md-12">                                      
							<div class="checkbox" id="Dashboard">
								<select id="area-dashboard" name="area-dashboard" class="form-control">
									<option selected="" value="">-- Escolha um serviço --</option>
									<option value="Alteração de Dashboard">Alteração de Dashboard</option>
									<option value="Criação de Dashboard">Criação de Dashboard</option>
									<option value="Erros / Falhas">Erros / Falhas</option>
									<option value="Liberação de Acesso - Dashboard">Liberação de Acesso - Dashboard</option>
									<option value="Outros - Dashboard">Outros - Dashboard</option>
								</select>                                                                                                                              
							</div>
						</div>                                  
					</div>   
					<!-- OPÇÃO DASHBOARD -->


					<!-- OPÇÃO Infraestrutura Administrativo -->
					<div class="form-group mb-4" style="margin: 0 auto; display: none;" id="divInfraestrutura-Administrativo" data-label="Infraestrutura-Administrativo">   
						<label for="out" class="control-label col-md-1">Serviço:</label>    
						<div class="col-md-12">                                      
							<div class="checkbox" id="Infraestrutura-Administrativo">
								<select id="area-infraestrutura-administrativo" name="area-infraestrutura-administrativo" class="form-control">
									<option selected="" value="">-- Escolha um serviço --</option>
									<option value="Banheiros e Vestiários">Banheiros e Vestiários</option>
									<option value="Manutenção Ar Condicionado">Manutenção Ar Condicionado</option>
									<option value="Manutenção Elétrica">Manutenção Elétrica</option>
									<option value="Manutenção Hidráulica">Manutenção Hidráulica</option>
									<option value="Material de Escritório">Material de Escritório</option>
									<option value="Mesas e Cadeiras">Mesas e Cadeiras</option>
									<option value="Outros - Administrativo">Outros - Administrativo</option>
								</select>                                                                                                                              
							</div>
						</div>                                  
					</div>   
					<!-- OPÇÃO Infraestrutura Administrativo -->

					<!-- OPÇÃO Infraestrutura T.I -->
					<div class="form-group mb-4" style="margin: 0 auto; display: none;" id="divInfraestrutura-TI" data-label="Infraestrutura-TI">   
						<label for="out" class="control-label col-md-1">Serviço:</label>    
						<div class="col-md-12">                                      
							<div class="checkbox" id="Infraestrutura-TI">
								<select id="area-infraestrutura-ti" name="area-infraestrutura-ti" class="form-control">
									<option selected="" value="">-- Escolha um serviço --</option>
									<option value="Hardware - Lentidão">Hardware - Lentidão</option>
									<option value="Hardware - Outros">Hardware - Outros</option>
									<option value="Hardware - Reparo">Hardware - Reparo</option>
									<option value="Redes - Desbloqueio de Site">Redes - Desbloqueio de Site</option>
									<option value="Redes - Lentidão/Falha no acesso">Redes - Lentidão/Falha no acesso</option>
									<option value="Software - Instalação de Programa / Ativação">Software - Instalação de Programa / Ativação</option>
									<option value="Software - Outros">Software - Outros</option>
								</select>                                                                                                                              
							</div>
						</div>                                  
					</div>   
					<!-- OPÇÃO Infraestrutura T.I -->

					<!-- OPÇÃO Manutenção Fabril -->
					<div class="form-group mb-4" style="margin: 0 auto; display: none;" id="divManutencao-Fabril" data-label="Manutencao-Fabril">   
						<label for="out" class="control-label col-md-1">Serviço:</label>    
						<div class="col-md-12">                                      
							<div class="checkbox" id="Manutencao-Fabril">
								<select id="area-manutencao-fabril" name="area-manutencao-fabril" class="form-control">
									<option selected="" value="">-- Escolha um serviço --</option>
									<option value="1 - Mesa Montagem 1">1 - Mesa Montagem 1</option>
									<option value="2 - Mesa Montagem 2">2 - Mesa Montagem 2</option>
									<option value="3 - Mesa Montagem 3">3 - Mesa Montagem 3</option>
									<option value="4 - Mesa Montagem 4">4 - Mesa Montagem 4</option>
									<option value="5 - Mesa Montagem Preparação">5 - Mesa Montagem Preparação</option>
									<option value="BALA-M-172-01BALANÇA Toledo 3400 5kg">BALA-M-172-01BALANÇA Toledo 3400 5kg</option>
									<option value="BALA-M-172-02BALANÇA Toledo Prix 500kg">BALA-M-172-02BALANÇA Toledo Prix 500kg</option>
									<option value="BALA-M-172-03BALANÇA Toledo Prix 1500kg">BALA-M-172-03BALANÇA Toledo Prix 1500kg</option>
									<option value="CADI-M-202-01CADINHO HIKARI">CADI-M-202-01CADINHO HIKARI</option>
									<option value="CADI-M-202-02CADINHO HIKARI">CADI-M-202-02CADINHO HIKARI</option>
									<option value="CADI-M-202-03CADINHO HIKARI">CADI-M-202-03CADINHO HIKARI</option>
									<option value="COMP-M-112-01COMPRESSOR BACKUP Schulz MSV 20 Max/250">COMP-M-112-01COMPRESSOR BACKUP Schulz MSV 20 Max/250</option>
									<option value="COMP-M-112-02COMPRESSOR BACKUP Schulz Bravo CSL 20BR/200L 5HP">COMP-M-112-02COMPRESSOR BACKUP Schulz Bravo CSL 20BR/200L 5HP</option>
									<option value="COMP-M-112-03COMPRESSOR PRINCIPAL Chicago Pneumatic CPM-10">COMP-M-112-03COMPRESSOR PRINCIPAL Chicago Pneumatic CPM-10</option>
									<option value="CORT-A-202-01CORTA-CABO Striptek SE3000">CORT-A-202-01CORTA-CABO Striptek SE3000</option>
									<option value="CRIM-A-202-01CRIMPAGEM DE FIOS AutoSplice">CRIM-A-202-01CRIMPAGEM DE FIOS AutoSplice</option>
									<option value="DOBR-A-122-01DOBRA CN Calvi PVC40/2000">DOBR-A-122-01DOBRA CN Calvi PVC40/2000</option>
									<option value="DOBR-M-123-01DOBRA MANUAL IMAG A1550">DOBR-M-123-01DOBRA MANUAL IMAG A1550</option>
									<option value="EMPI-M-003-01EMPILHADEIRA Hidráulica Manual 1500Kg">EMPI-M-003-01EMPILHADEIRA Hidráulica Manual 1500Kg</option>
									<option value="EMPI-M-003-02EMPILHADEIRA Elétrica Tracionaria PT 1645 FAST">EMPI-M-003-02EMPILHADEIRA Elétrica Tracionaria PT 1645 FAST</option>
									<option value="ESME-M-142-01ESMERILHADEIRA Skil 700w">ESME-M-142-01ESMERILHADEIRA Skil 700w</option>
									<option value="FURA-B-162-01FURADEIRA DE BANCADA Manrod MR726">FURA-B-162-01FURADEIRA DE BANCADA Manrod MR726</option>
									<option value="FURA-B-162-02FURADEIRA/ ROSQUEADEIRA Mello FM314">FURA-B-162-02FURADEIRA/ ROSQUEADEIRA Mello FM314</option>
									<option value="GUIL-M-162-01GUILHOTINA 3M NEWTON TM5">GUIL-M-162-01GUILHOTINA 3M NEWTON TM5</option>
									<option value="GUIL-M-163-02GUILHOTINA DE CANTO Newton GCCN-4225">GUIL-M-163-02GUILHOTINA DE CANTO Newton GCCN-4225</option>
									<option value="LINH-A-400-01LINHA DE PINTURA Deltec">LINH-A-400-01LINHA DE PINTURA Deltec</option>
									<option value="LIXA-M-132-01LIXADEIRA DE CINTA">LIXA-M-132-01LIXADEIRA DE CINTA</option>
									<option value="LIXA-M-132-02LIXADEIRA POLITRIZ 01 Jowa PSB10 Inversor Weg CFW08">LIXA-M-132-02LIXADEIRA POLITRIZ 01 Jowa PSB10 Inversor Weg CFW08</option>
									<option value="LIXA-M-132-03LIXADEIRA POLITRIZ 02 Jowa PSB10 Inversor Weg CFW08">LIXA-M-132-03LIXADEIRA POLITRIZ 02 Jowa PSB10 Inversor Weg CFW08</option>
									<option value="PARA-M-292-01PARAFUSADEIRA Elétrica">PARA-M-292-01PARAFUSADEIRA Elétrica</option>
									<option value="PREN-M-123-01PRENSA UniStamp PHCD 30T">PREN-M-123-01PRENSA UniStamp PHCD 30T</option>
									<option value="PUNC-A-151-01PUNCIONADEIRA Amada Vipros 255">PUNC-A-151-01PUNCIONADEIRA Amada Vipros 255</option>
									<option value="ROSQ-B-162-01ROSQUEADEIRA Dauer DM8">ROSQ-B-162-01ROSQUEADEIRA Dauer DM8</option>
									<option value="SERR-M-162-01SERRA BRANCA Verry Júnior 1800mm">SERR-M-162-01SERRA BRANCA Verry Júnior 1800mm</option>
									<option value="SERR-M-162-02SERRA CIRCULAR Cortesa A400E">SERR-M-162-02SERRA CIRCULAR Cortesa A400E</option>
									<option value="SERR-M-162-03SERRA VERDE Baldan">SERR-M-162-03SERRA VERDE Baldan</option>
									<option value="SOLD-M-142-01SOLDA PONTO Regencia">SOLD-M-142-01SOLDA PONTO Regencia</option>
									<option value="SOLD-M-142-02SOLDA TIG Lincoln Eletric Square Wave 200">SOLD-M-142-02SOLDA TIG Lincoln Eletric Square Wave 200</option>
									<option value="SOLD-M-142-03SOLDA TIG Razi 315 ME">SOLD-M-142-03SOLDA TIG Razi 315 ME</option>
									<option value="TEST-M-294-01TESTE DE MÓDULO Pollus 220v">TEST-M-294-01TESTE DE MÓDULO Pollus 220v</option>
									<option value="TRAN-M-000-01TRANSPALETE 2500Kg">TRAN-M-000-01TRANSPALETE 2500Kg</option>
								</select>                                                                                                                              
							</div>
						</div>                                  
					</div>   
					<!-- OPÇÃO Manutenção Fabril -->					

					<!-- OPÇÃO Sistema -->
					<div class="form-group mb-4" style="margin: 0 auto; display: none;" id="divSistema" data-label="Sistema">   
						<label for="out" class="control-label col-md-1">Serviço:</label>    
						<div class="col-md-12">                                      
							<div class="checkbox" id="Sistema">
								<select id="area-sistema" name="area-sistema" class="form-control">
									<option selected="" value="">-- Escolha um serviço --</option>
									<option value="Criação / Alteração de Layout de Nota">Criação / Alteração de Layout de Nota</option>
									<option value="Criação / Alteração TOP">Criação / Alteração TOP</option>
									<option value="Falhas / Erros">Falhas / Erros</option>
									<option value="Liberação de Acesso">Liberação de Acesso</option>
									<option value="Outros">Outros</option>
								</select>                                                                                                                              
							</div>
						</div>                                  
					</div>   
					<!-- OPÇÃO Sistema -->

					<div class="form-row">
						<div class="form-group col">
							<textarea type="text" name="descricao" rows="5" class="form-control required" placeholder="Descrição"><?php echo isset($_POST['descricao']) && !empty($_POST['descricao']) ? $_POST['descricao'] : '';?></textarea>
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