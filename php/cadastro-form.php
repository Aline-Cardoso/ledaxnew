<?php
ini_set('display_errors',2);
error_reporting(E_ALL);

if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])){
	/* Pego a validação do Captcha feita pelo usuário */
	$recaptcha_response = $_POST['h-captcha-response'];

	/* Verifico se foi feita a postagem do Captcha */
	if(isset($recaptcha_response)){
		function my_file_get_contents( $site_url ){
			$ch = curl_init();
			$timeout = 5; 
			curl_setopt ($ch, CURLOPT_URL, $site_url);
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			ob_start();
			curl_exec($ch);
			curl_close($ch);
			$file_contents = ob_get_contents();
			ob_end_clean();
			return $file_contents;
		}

		/* Valido se a ação do usuário foi correta junto ao google */
		$answer = json_decode(
			my_file_get_contents('https://hcaptcha.com/siteverify?secret='.$secret_key.'&response='.$_POST['h-captcha-response'])
		);

		/* Se a ação do usuário foi correta executo o restante do meu formulário */
		if($answer->success) {
			require_once 'lib/defaultsend.php';
			$campos = $_POST;
			reset($campos);

			$data = date("H:i d-m-y");

			$nomeremetente = !empty($NomeEmpresa) ? $NomeEmpresa : $nomeEmpresa;

/*se for mandar um só:
$remetente = "example@example.com.br"

se for mandar dois:
$remetente = ["example@example.com.br","example@example.com.br"];*/

// if (!empty($_FILES['files'])) {
// 	$assunto = 'Trabalhe Conosco - '.$nomeremetente;
// 	$tituloCorpoEmail = NULL;
// 	$checkAnexo = $_FILES['files'];
// 	$remetente = ["marcel@metalacre.com.br","paulo.junior@metalacre.com.br","marcelo.carlis@metalacre.com.br"];
// 	//$remetente = "cardoso.tipopub@gmail.com";
// 	$copiaOculta = NULL;

// } elseif (!empty($_POST['cnpj'])) {
// 	$assunto = 'Orçamento Online - '.$nomeremetente;
// 	$tituloCorpoEmail = "Pedido de Orçamento enviado através do site:";
// 	$checkAnexo = NULL;
// 	$remetente = ["marcel@metalacre.com.br","paulo.junior@metalacre.com.br","marcelo.carlis@metalacre.com.br"];
// 	//$remetente = "cardoso.tipopub@gmail.com";
// 	$copiaOculta = NULL;

// } else 
if(!empty($_POST['area-pretendida'])) {

//opcao para verificar campo por campo e enviar para emails diferentes
	$remetente = '';
	switch($_POST['area-pretendida']) {
		case 'Analista de DP':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Analista de Negócios - BH':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Assistente Financeiro':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Auxiliar de Produção Metalurgia':
			$remetente = 'cvprod@ledax.com';
			break;
		case 'Coordenador(a) de Negócios em Solar':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Especialista em Projetos - BH':
			$remetente = 'cvprod@ledax.com';
			break;
		case 'Estágio em Projeto Luminotécnico':
			$remetente = 'cvprod@ledax.com';
			break;
		case 'Estágio em Projetos Fotovoltaicos':
			$remetente = 'cvprod@ledax.com';
			break;
		case 'Projetista Luminotécnico':
			$remetente = 'cvprod@ledax.com';
			break;
		case 'Técnico de Instalações':
			$remetente = 'cvprod@ledax.com';
			break;
		case 'Assistente fiscal':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Coordenador instalações fotovoltaico':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Coordenador negocios fotovoltaico':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Estágio Engenharia':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Analista Comercial':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Analista de Marketing e Vendas':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Estágio em Logística':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Estágio em Marketing':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Projetista de Iluminação':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Estágio em Inteligência de Mercado':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Estágio em Marketing':
			$remetente = 'cvledax@ledax.com';
			break;
		case 'Desenvolvedor Front-End':
			$remetente = 'cvledax@ledax.com';
			break;
	}

//opcao para verificar mais de um campo que ira enviar par ao msmo email
	// if($_POST['area-pretendida'] === 'analista-de-negocios-b' || $_POST['area-pretendida'] == ) {
	// 	$remetente = ''
	// }

	//$remetente = $_POST['area-pretendida'];

	//$assunto = 'Vagas '.$nomeremetente .' - '. $_POST['area-pretendida'];
	$assunto = $_POST['area-pretendida'];
	$tituloCorpoEmail = NULL;
	$checkAnexo = $_FILES['files'];
	$copiaOculta = NULL;

} else if (!empty($_POST['departamento'])) {

	$remetente = '';
	switch($_POST['departamento']) {
		case 'Dashboard':
			$remetente = 'new-55dd81dcc9d5c5d49609242870cf1d27@ledax.tomticket.com';
			break;
		case 'Infraestrutura-Administrativo':
			$remetente = 'suporte.adm@ledax.com';
			break;
		case 'Infraestrutura-TI':
			$remetente = 'new-55dd81dcc9d5c5d49609242870cf1d27@ledax.tomticket.com';
			break;
		case 'Manutencao-Fabril':
			$remetente = 'man.fabril@ledax.com';
			break;
		case 'Sistema':
			$remetente = 'new-7bc8f1dfba75907c361f23ec7a0baa32@ledax.tomticket.com';
			break;
	}
	
//$remetente = $_POST['departamento'];

	$assunto = 'Orbit - '.$nomeremetente;
	$tituloCorpoEmail = "Abertura chamado enviado através do site:";
	$checkAnexo = $_FILES['files'];
	$copiaOculta = NULL;

} else {
	$assunto = 'Contato pelo Site - '.$nomeremetente;
	$tituloCorpoEmail = "Contato através do site:";
	$checkAnexo = NULL;
	//$remetente = "";
	$remetente = "contato@ledax.com";
	$copiaOculta = NULL;
}

$destinatario = $remetente;

$valores = "";

while (list($key, $val) = each($campos)) {
	if ($key != 'submit' && $val != '' && $key != 'tipo_form' && $key != 'h-captcha-response' && $key != 'g-recaptcha-response' && $key != 'form_orcamento'){
		$substituir = array("email");
		$mudar = array("E-mail");

		$keyModif = str_replace('-', ' ', ucfirst($key));
					// $keyModif = str_replace($substituir, $mudar, $keyModif);

		$valores .= "<li style='width: 530px; /*border-bottom: solid 1px #c0c0c0*/; padding: 5px 0 ;font: 16px Helvetica Neue,Arial,Helvetica,Geneva,sans-serif; color: #000;margin: 20px 15px;'><strong>$keyModif:</strong> $val</li>";
	}
}

$valorCampos = $valores;

$mensagemHTML =
"<html>
<head>
<style type='text/css'>
body {
	margin: 0px;
	font-family: Verdana;
	font-size: 16px;
	color: #808080;
}
h2 {
	text-transform: capitalize;
}
</style>
</head>
<body style='font-family: Verdana;color: #808080;background-color: #dedede;'>
<div id='wrapper-email'>	
<br /><br />

<div class=\"campos\">
<ul style='width: 600px;list-style-type: none; background: #fff; border-radius: 5px; color: #808080; margin: 50px; font: 16px Helvetica Neue,Arial,Helvetica,Geneva,sans-serif; padding: 10px 10px 0;'>

<li style='width: 100%; text-align: center; padding: 20px 0; margin: 0px;'><img src='https://www.ledax.com/img/logotipo.png' style='width: 220px;'></li>

<li style='width: 100%; text-align: center; padding: 0; margin: 0px;'><h3 style='width: 100%; font-size: 22px; line-height: 24px; border-bottom: solid 1px #808080; color: #808080; font-weight: bold; padding: 0 0 10px; margin: 0 0 18px; font-family: Helvetica Neue,Arial,Helvetica,Geneva,sans-serif;'>$assunto</h3></li>

$valorCampos

<li style='width: 100%; border-bottom: solid 1px #c0c0c0; text-align: right; padding: 5px 0; font: 12px Helvetica Neue,Arial,Helvetica,Geneva,sans-serif; margin:15px 0 0;'>$data</li>

<li style='width: 100%; padding: 10px 0; text-align: right; margin: 5px 0; background: #000'><a target='_blank' href='".$author."' title='".$creditos."'><img src='".$author."/img/logo-tipo.png' width='120' alt='".$creditos."' /></a></li>  

</ul>
<br /><br />
</div>
</div>
</body>
</html>";
if(defaultsend($remetente, $nomeremetente, $destinatario, $assunto, $mensagemHTML, $copiaOculta, $checkAnexo)){
	echo '<script language="JavaScript">location.href="'.$urlcompleta.'enviado.php"</script>';
} else{
	die();
	echo '<script language="JavaScript">location.href="'.$urlcompleta.'falha.php"</script>';
}
}
/* Caso o Captcha não tenha sido validado - retorno uma mensagem de erro. */
else {
	echo "Por favor, faça a verificação do captcha.";
}
}
}
?>
