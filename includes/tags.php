<style type="text/css">
    .tags{
        font-size:10px !important;
        line-height: 10px;
        border: solid 1px #ccc;
        padding:5px;
        text-align: justify;
    }

    ul.tags {
        margin: 0px;
        list-style: none;
    }
    ul.tags li{
        display: inline-flex;
        margin: 0px 5px;
    }
</style>
<div class="container" style="padding-top: 30px;">
    <div class="menu">
        <ul class="tags">

                  <?=montarTags($menu,$qntTags)?>

        </ul>
    </div>

    <h5 class="tags"><strong>Tags:</strong> <?=$keywords;?>.</h5>

    <h6 class="tags">
        O texto acima "<?=$title;?>" é de direito reservado. Sua reprodução, parcial ou total, mesmo citando nossos links, é proibida sem a autorização do autor.
        Plágio é crime e está previsto no artigo 184 do Código Penal. – Lei n° 9.610-98 sobre os Direitos Autorais
    </h6>
</div>


