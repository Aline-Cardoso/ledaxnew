<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . "includes/geral-palavras.php";
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">


	<!-- Site Desenvolvido por <?php echo $creditos; ?> / <?php echo $author; ?> -->
	<?php /* Basic */ ?>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?= $title; ?> - <?= $nomeEmpresa; ?></title>
	<meta name="title" content="<?= $title; ?>" />
	<meta name="author" content="<?= $author; ?>" />
	<meta name="description" content="<?= $description; ?>" />
	<meta name="keywords" content="<?= $title; ?>, <?= $keywords; ?>" />
	<meta name="robots" content="<?= $infoRobots; ?>" />

	<?php /*SEO */ ?>
	<meta name="language" content="pt-br" />
	<meta name="copyright" content="<?= $nomeEmpresa . " " . $slogan ?>" />
	<meta name="distribution" content="global" />
	<meta name="audience" content="all" />
	<meta name="url" content="<?= $canonical; ?>" />
	<meta name="classification" content="<?= $ramo; ?>" />
	<meta name="category" content="<?= $ramo; ?>" />
	<meta name="Page-Topic" content="<?= $title . " - " . $nomeEmpresa; ?>" />
	<meta name="rating" content="general" />
	<meta name="fone" content="<?= $tel;?>" />
	<meta name="city" content="<?= $cidade; ?>" />
	<meta name="country" content="Brasil" />
	<meta property="publisher" content="<?= $creditos; ?>" />

	<?php /* Favicon */ ?>
	<link rel="shortcut icon" href="<?= $favicon; ?>" type="image/x-icon" />


	<?php /*Google */ ?>
	<link rel="canonical" href="<?= $canonical; ?>" />
	<meta name="googlebot" content="<?= $infoRobots; ?>" />
	<meta name="geo.placename" content="Brasil" />
	<meta name="geo.region" content="<?= $cidade; ?>" />
	<meta itemprop="name" content="<?= $nomeEmpresa; ?>" />
	<meta itemprop="description" content="<?= $description; ?>" />
	<meta itemprop="image" content="<?= $logo; ?>" />

	<?php /*Twitter */ ?>
	<meta name="twitter:card" content="<?= $logo; ?>" />
	<meta name="twitter:site" content="<?= $canonical; ?>" />
	<meta name="twitter:title" content="<?= $title . " - " . $nomeEmpresa; ?>" />
	<meta name="twitter:description" content="<?= $description; ?>" />
	<meta name="twitter:creator" content="<?= $UserTwitter; ?>" />
	<meta name="twitter:image:src" content="<?= $logo; ?>" />

	<?php /*Facebook */ ?>
	<meta property="og:title" content="<?= $title . " - " . $nomeEmpresa; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?= $canonical; ?>" />
	<meta property="og:site_name" content="<?= $nomeEmpresa; ?>" />
	<meta property="og:author" content="<?= $nomeEmpresa; ?>" />
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:region" content="Brasil" />
	<meta property="og:image" content="<?= $logo; ?>" />
	<meta property="og:image:type" content="image/jpg" />
	<meta property="og:image:width" content="250" />
	<meta property="og:image:height" content="250" />
	<meta property="og:description" content="<?= $description; ?>" />
	<meta property="fb:admins" content="<?= $CodFanpage; ?>" />

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

	<!-- Head Libs -->
	<script src="<?= $urlcompleta; ?>vendor/modernizr/modernizr.min.js"></script>
	
<style><?php require($_SERVER["DOCUMENT_ROOT"]."/".$pastaEPagina."/css/style-min.css"); ?></style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140607866-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-140607866-2');
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
			'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-58V3N52');
	</script>
	<!-- End Google Tag Manager -->


</head>

<body>
	<div class="body">

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58V3N52" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->