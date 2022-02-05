<?php 
ini_set('display_errors',2);
error_reporting(E_ALL);
// $pastaEPagina = explode("/",$_SERVER['PHP_SELF']);
$pastaDominio = "";

if(is_array($pastaEPagina)) {
	for($i=0; $i < count($pastaEPagina); $i++){
		if(substr_count($pastaEPagina[$i], ".") == 0){
			$pastaDominio .= $pastaEPagina[$i]."/";
		}
	}
}
$http = ($_SERVER['HTTP_HOST'] == "localhost") || (empty($_SERVER['HTTPS'])) ? "http://" : "https://";
$url = $http . $_SERVER['HTTP_HOST']."/".$pastaEPagina;

include $_SERVER['DOCUMENT_ROOT']."/".$pastaEPagina.'includes/functions.php';


$urlPagina = str_replace($pastaEPagina, '', $_SERVER['PHP_SELF']);
$urlPagina = str_replace('.php', '', $urlPagina);
$urlPagina = explode("/", $_SERVER['PHP_SELF']);
$urlPagina = end($urlPagina);

//CONFIGURACAO URLCOMPLETA
$urlcompleta		=  ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? $http . $_SERVER['HTTP_HOST'] . "/" . $pastaEPagina : $http . $_SERVER['HTTP_HOST'] . $pastaEPagina;
$nomeEmpresa 		= 'Ledax';
$slogan 			= 'Energia Inteligente';
$author 			= 'https://www.agenciatipo.com.br/';
$creditos 			= 'Agência Tipo';
$ramo 				= 'Eficiência Energética';
$ddd				= '(11) ';
$prestadora			= '(055)';

//emails
$email       		= 'contato@ledax.com';
$emailmatriz       	= 'matriz@ledax.com';
$emailmg      		= 'regional.mg@ledax.com';
$emailsp       		= 'regional.sp@ledax.com';
$emailrs       		= 'regional.sul@ledax.com';


//enderecos

//fabrica principal
$endereco 			= 'Av. Cardeal Avelar Brandão Villela, 2572';
$complemento        = '';
$bairro 			= 'Jardim Santo Inácio';
$cidade 			= 'Salvador - BA';
$pais               = 'Brasil';
$cep 				= '41231-400';
$linkMapa           = 'https://goo.gl/maps/mtqbyAqaZxuGcjqc9';

//endereco matriz
$enderecomatriz 			= 'Av. Tancredo Neves, 3343';
$complementomatriz        = 'Edf Cempre - Torre A. Salas 1403/1404';
$bairromatriz 			= 'Caminho das Árvores';
$cidadematriz 			= 'Salvador - BA';
$paismatriz               = 'Brasil';
$cepmatriz 				= '41820-020';
$linkMapamatriz           = 'https://goo.gl/maps/F6dK3XAg5V7cnApP6';

//endereco minas
$enderecominas 			= 'Rua Aspásia de Miranda Mourão, 25';
$complementominas        = 'Salas 208/209';
$bairrominas 			= 'Estoril';
$cidademinas 			= 'Belo Horizonte - MG';
$paisminas               = 'Brasil';
$cepminas 				= '30494-205';
$linkminas          = 'https://goo.gl/maps/xzGnmFBiq3aTgcoj7';

//endereco rio grande do sul
$enderecors 			= 'Rua 25 de Fevereiro,51';
$complementors        = '';
$bairrors 			= 'Navegantes';
$cidaders 			= 'Porto Alegre - RS';
$paisrs               = 'Brasil';
$ceprs 				= '41231-400';
$linkMapars           = 'https://goo.gl/maps/QpsAJoyYXVE4Wy37A';

//endereco shanghai
$enderecoshanghai 			= 'Room 1807, Huijin Building';
$complementoshanghai        = 'East Shanghai Road 168';
$bairroshanghai 			= 'Taicang City, Suzhou';
$cidadeshanghai 			= 'Jiangsu';
$paisshanghai              = 'China';
$linkMapashanghai           = 'https://goo.gl/maps/zJRfYFQrQyUbKDmWA';

//Vendas
$tel				= '4502-4402';
$tellink			= (isset($tel)) ? "tel:" . preg_replace('/\(|\)|-| /', '', $ddd . $tel) : '';
$dddwhats				= '(11) ';
$whats            = '4502-4402';
$whatslink		= "https://api.whatsapp.com/send?1=pr_BR&phone=551145024402";


$maps               = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.765917337234!2d-38.46228158502556!3d-12.922761062331674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x716112c147f59b3%3A0x85193b3ebd0f5765!2sLEDAX%20-%20Energia%20Inteligente%20(F%C3%A1brica)!5e0!3m2!1spt-BR!2sbr!4v1629902410780!5m2!1spt-BR!2sbr" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';



$pastaImg 			= $urlcompleta . 'img/';
$logo 				= $pastaImg . 'logotipo.svg';
//$logoFooter		= $pastaImg . 'logo-footer.png';
//$logoTipoPub 		= $pastaImg . 'tipo.png';
$imgNaoExiste		= $pastaImg . 'img-nao-existe.png';
$favicon 			= $pastaImg . 'favicon.ico';
//$caminhoBanners 	= $pastaImg . 'banner/';
$caminhoProdutos 	= $pastaImg . 'produtos/';
//$caminhoParceiros 	= $pastaImg . 'parceiros/';
//$caminhoEmpresa 	= $pastaImg . 'empresa/';
$caminhoPalavras    = $pastaImg . 'palavras-chave/';
//$caminhoThumbs		= $caminhoPalavras . 'thumbs/';
$caminhoThumbs		= $caminhoPalavras;

$urlPagina 			= explode("/", $_SERVER['PHP_SELF']);
$urlPagina 			= end($urlPagina);
$linkPagina			= str_replace('.php', '', $urlPagina);

//configuracao canonical
$canonical = $http . $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']) . $linkPagina;
$canonical		= str_replace('.php', '', $canonical);
$canonical		= str_replace('index', '', $canonical);

$imagem 			= str_replace('.php', '.jpg', $urlPagina); //imagem das páginas das palavras-chave
$imagem2 			= str_replace('.php', '-2.jpg', $urlPagina); //imagem das páginas das palavras-chave
$imagem3 			= str_replace('.php', '-3.jpg', $urlPagina); //imagem das páginas das palavras-chave
$bannerTopo 		= str_replace('.jpg', '', $imagem);

if ($_SERVER['HTTP_HOST'] == 'www.tipotemporario.com.br' || $_SERVER['HTTP_HOST'] == 'tipotemporario.com.br') {
	$infoRobots = "noindex, nofollow";
} else {
	$infoRobots = "index, follow";
}

$title = (isset($title)) ? $title : '';
$title = (isset($title)) ? $title : '';
$description = (isset($description)) ? $description : '';
$keywords = (isset($keywords)) ? $keywords : '';

$AtividadesEmpresa          = 'Outros Serviços';
$urlAtividadesEmpresa       = 'mapa-site.php';

$interno 			= false;

//redes sociais
$card = $urlcompleta . $logo;
$linkFace 			= 'https://www.facebook.com/oficialledax/';
$linkInstagram 		= 'https://www.instagram.com/ledaxoficial/';
$linkedIn 		    = 'https://br.linkedin.com/company/ledax-oficial';
$linkYoutube 		= '';
$linkTwitter 		= '';
$linkGoogle 		= '';
$UserTwitter 		= '';
$CodFanpage 		= '';
$TwitterCard = $card;

//ReCaptcha Hcaptcha
$sitekey = "50353cf3-8009-43a5-83e3-86e2f0c17694";
$secret_key = '0x771217819046A7E492eD6a09f75dB6F76509c777';

//$linkIframeMapa		= '';

$linkHorario		= '';

// Quantidade de tags nas páginas
$qntTags 			= "15";

// Quantidade de thumbs nas páginas
$qntThumbsCarrossel = "20";

// Configurações necessárias para o MENU!!!
$mapaSite 			= false;
$menuRodape 		= false;

/* -- Listagem de Palavras-Chave -- */
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . "includes/lista-links-palavras.php";
