<?php
if (isset($urlPagina) && "" != $urlPagina) {
    $twitterHashPreparacao = strtolower($urlPagina);
    $twitterHashPreparacao = explode(".", $twitterHashPreparacao);
    $twitterHash = $twitterHashPreparacao[0];
    $twitterHash = str_replace("-", ", ", $twitterHash);
} else {
    $twitterHash = "";
}?>
<script type="text/javascript">
    function popup_centralizado(pageURL, title,w,h) {
        var left = (screen.width/2)-(w/2);
        var top = (screen.height/2)-(h/2);
        var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
</script>
<div class="redes-sociais-conteudo">
    <a class="facebook" onclick="popup_centralizado('https://www.facebook.com/sharer/sharer.php?u=<?=$url . $urlPagina?>','Compartilhar no Facebook',900,560)"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
    <a class="twitter" onclick="popup_centralizado('https://twitter.com/intent/tweet?url=<?=$url . $urlPagina?>&amp;text=<?=str_replace(" ", "%20", $nomeEmpresa . ' - ' . $title . ' - &amp;hashtags=' . $twitterHash);?>','Compartilhar no Twitter',900,560)"><i class="fab fa-twitter" aria-hidden="true"></i></a>
</div>