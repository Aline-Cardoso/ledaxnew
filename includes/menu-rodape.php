<li><i class="fas fa-angle-right"></i><a href="<?=$urlcompleta;?>" class="link-hover-style-1 ml-1"> Home</a></li>
<li><i class="fas fa-angle-right"></i><a href="<?=$urlcompleta;?>institucional" class="link-hover-style-1 ml-1"> Institucional</a></li>
<li><i class="fas fa-angle-right"></i><a href="<?=$urlcompleta;?>solucoes" class="link-hover-style-1 ml-1"> Soluções</a></li>
<li><i class="fas fa-angle-right"></i><a href="<?=$urlcompleta;?>cases" class="link-hover-style-1 ml-1"> Cases Ledax</a></li>
<?php /* */?>
<li><i class="fas fa-angle-right"></i><a href="<?=$urlcompleta;?>blog" class="link-hover-style-1 ml-1"> Blog</a></li>
<li><i class="fas fa-angle-right"></i><a href="<?=$urlcompleta;?>contato" class="link-hover-style-1 ml-1"> Contato</a></li>


<?php
/* -- Link Mapa do Site (Configuração para aparecer APENAS no RODAPÉ) */
echo $menuRodape ? '<li><i class="fas fa-angle-right"></i><a class="link-hover-style-1 ml-1" href="'.$urlcompleta.'mapa-site"  title="Mapa do site">Mapa do site</a></li>' : '' ;

/* -- Link Outros Produtos (Configuração para aparecer APENAS no MAPA DO SITE) */
echo $mapaSite && !$menuRodape ? '<li ><a href="'.$urlcompleta.'#" title="Outros Produtos">Outros Produtos</a><ul>'.montarMenu($menu).'</ul></li>' : '';
?>