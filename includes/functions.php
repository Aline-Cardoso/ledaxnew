<?php 

//Trata Letras Removendo acentos
function tratar_letras($string)
{
    $conversao = array('á' => 'a',
     'à' => 'a',
     'ã' => 'a',
     'â' => 'a',
     'é' => 'e',
     'ê' => 'e',
     'í' => 'i',
     'ï' => 'i',
     'ó' => 'o',
     'ô' => 'o',
     'õ' => 'o',
     "ö" => "o",
     'ú' => 'u',
     'ü' => 'u',
     'ç' => 'c',
     'ñ' => 'n',
     'Á' => 'A',
     'À' => 'A',
     'Ã' => 'A',
     'Â' => 'A',
     'É' => 'E',
     'Ê' => 'E',
     'Í' => 'I',
     'Ï' => 'I',
     "Ö" => "O",
     'Ó' => 'O',
     'Ô' => 'O',
     'Õ' => 'O',
     'Ú' => 'U',
     'Ü' => 'U',
     'Ç' => 'C',
     'N' => 'Ñ',
     'ý' => 'y',
     'ÿ' => 'y',
     'Ý' => 'Y'
 );
    foreach($conversao as $key=>$value)
    {
        $string=str_replace($key,$value,$string);
    }
    return $string;
}

## Arquivos Inline - CSS e JS
function arquivos_inline($arquivo) {
    if (file_exists($arquivo)) {
        $extensaoArquivo = explode('.', $arquivo);
        $extensaoArquivo = end($extensaoArquivo);
        $extensaoArquivo = strtolower($extensaoArquivo);
        if ($extensaoArquivo == "css") {
            $retornaCodigo = file_get_contents($arquivo);
            $retornaCodigo = str_replace(array("\n","\r","\t","\n\t"), "", $retornaCodigo);
            $retornaCodigo = str_replace(": ", ":", $retornaCodigo);
            $retornaCodigo = str_replace(", ", ",", $retornaCodigo);
            $retornaCodigo = str_replace("; ", ";", $retornaCodigo);
            $retornaCodigo = str_replace(";   ", ";", $retornaCodigo);
            $retornaCodigo = str_replace("{ ", "{", $retornaCodigo);
            $retornaCodigo = str_replace(" {", "{", $retornaCodigo);
            $retornaCodigo = str_replace(" { ", "{", $retornaCodigo);
            $retornaCodigo = str_replace("   {", "{", $retornaCodigo);
            $retornaCodigo = str_replace("} ", "}", $retornaCodigo);
            $retornaCodigo = str_replace(" }", "}", $retornaCodigo);
            $retornaCodigo = str_replace(" } ", "}", $retornaCodigo);
            $expressaoCSS = '!/\*[^*]*\*+([^/][^*]*\*+)*/!';
            $retornaCodigo = preg_replace($expressaoCSS, '', $retornaCodigo);
            return $retornaCodigo;
        } elseif ($extensaoArquivo == "js") {
            $retornaCodigo = file_get_contents($arquivo);
            $retornaCodigo = str_replace(array("\n","\t","\r","\n\t"), '', $retornaCodigo);
            $expressaoJS = '/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\')\/\/.*))/';
            $retornaCodigo = preg_replace($expressaoJS, '', $retornaCodigo);
            
            return $retornaCodigo;
        }
    }
}

## Mostrar Tags Randômicas nas Palavras-Chave
function montarTags($menu,$qntTags = 30) {
    global $urlcompleta;
    $retorno="";
    $mostrarTags=array_rand($menu,$qntTags);
    if(isset($mostrarTags) && count($mostrarTags)>0){
        foreach($mostrarTags as $linkPagina)
        {
            $palavraChave=$menu[$linkPagina];
            $retorno.='<li><a href="'.$urlcompleta.$linkPagina.'" title="'.$palavraChave.'">'.$palavraChave.'</a></li>';
            
        }
        return $retorno;
    }
}
## Mostrar Menu das Palavras-Chave
function montarMenu($menu) {
    global $urlcompleta;
    $retorno="";
    $mostrarMenu=array_rand($menu,count($menu));
    if(isset($mostrarMenu) && count($mostrarMenu)>0){
        foreach($mostrarMenu as $linkPagina)
        {
            $palavraChave=$menu[$linkPagina];
            $retorno.='<li><a href="'.$urlcompleta.$linkPagina.'" title="'.$palavraChave.'">'.$palavraChave.'</a></li>';
        }
        return $retorno;
    }
}

## Mostrar Galeria dos Ambientes
function montarGaleriaAmbientes($maximoImagensPorPaginas=31) {
    global $urlcompleta;
    global $pastaAmbientes;
    global $linkPagina;
    global $title;    

    $count=0;
    for($i=1; $i<=$maximoImagensPorPaginas; $i++){
        $contador=$i<=9?"0".$i:$i;

        $imagemThumb=$pastaAmbientes.$linkPagina."/thumbs/".$linkPagina."-".$contador.".jpg";
        $imagemGrande=$pastaAmbientes.$linkPagina."/".$linkPagina."-".$contador.".jpg";

        if(file_exists(str_replace($urlcompleta, '', $imagemThumb)) || file_exists(str_replace($urlcompleta, '', $imagemGrande))){
            $count+=1;
            $tituloImagem=$title." - ".$contador;
            $imagemGaleriaG="";
            $imagemGaleriaP="";
            if(file_exists(str_replace($urlcompleta, '', $imagemThumb)) && file_exists(str_replace($urlcompleta, '', $imagemGrande))){
                $imagemGaleriaG=$imagemGrande;
                $imagemGaleriaP=$imagemThumb;

            }else if(file_exists(str_replace($urlcompleta, '', $imagemGrande))){
                $imagemGaleriaG=$imagemGrande;
                $imagemGaleriaP=$imagemGrande;
            }else if(file_exists(str_replace($urlcompleta, '', $imagemThumb))){
                $imagemGaleriaG=$imagemThumb;
                $imagemGaleriaP=$imagemThumb;
            }
            if(isset($imagemGaleriaG) && isset($imagemGaleriaP) && $imagemGaleriaG!="" && $imagemGaleriaP!=""){
                echo "
                <div>
                <a class=\"img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon\" href=\"".$imagemGaleriaG."\" title=\"".$tituloImagem."\">
                <img class=\"img-fluid\" src=\"".$imagemGaleriaP."\"  alt=\"".$tituloImagem."\" title=\"".$tituloImagem."\" />
                </a>
                </div>";
            }
        }
    }
}

## Mostrar Galeria de Infraestrutura e Gastronomia
function montarGaleria($maximoImagensPorPaginas=100) {
    global $urlcompleta;
    global $pastaImg;
    global $linkPagina;
    global $title;    

    $count=0;
    for($i=1; $i<=$maximoImagensPorPaginas; $i++){
        $contador=$i<=9?"0".$i:$i;

        $imagemThumb=$pastaImg.$linkPagina."/thumbs/".$linkPagina."-".$contador.".jpg";
        $imagemGrande=$pastaImg.$linkPagina."/".$linkPagina."-".$contador.".jpg";

        if(file_exists(str_replace($urlcompleta, '', $imagemThumb)) || file_exists(str_replace($urlcompleta, '', $imagemGrande))){
            $count+=1;
            $tituloImagem=$title." - ".$contador;
            $imagemGaleriaG="";
            $imagemGaleriaP="";
            if(file_exists(str_replace($urlcompleta, '', $imagemThumb)) && file_exists(str_replace($urlcompleta, '', $imagemGrande))){
                $imagemGaleriaG=$imagemGrande;
                $imagemGaleriaP=$imagemThumb;

            }else if(file_exists(str_replace($urlcompleta, '', $imagemGrande))){
                $imagemGaleriaG=$imagemGrande;
                $imagemGaleriaP=$imagemGrande;
            }else if(file_exists(str_replace($urlcompleta, '', $imagemThumb))){
                $imagemGaleriaG=$imagemThumb;
                $imagemGaleriaP=$imagemThumb;
            }
            if(isset($imagemGaleriaG) && isset($imagemGaleriaP) && $imagemGaleriaG!="" && $imagemGaleriaP!=""){
                echo "<div class=\"col-6 col-md-2 p-1\">
                    <a href=\"".$imagemGaleriaG."\" title=\"".$tituloImagem."\">
                        <span class=\"thumb-info thumb-info-no-borders thumb-info-centered-icons\">
                            <span class=\"thumb-info-wrapper\">
                            <img class=\"img-fluid\" src=\"".$imagemGaleriaP."\"  alt=\"".$tituloImagem."\" title=\"".$tituloImagem."\" />
                                <span class=\"thumb-info-action\">
                                    <span class=\"thumb-info-action-icon\"><i class=\"far fa-image text-dark\"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>";
            }
        }
    }
}

## Mostrar Thumbs Randômicos no Palavras-Chave
function mostrarCarrossel($menu,$qntThumbsCarrossel = 20) {
    global $urlcompleta;
    global $caminhoPalavras;
    $retorno="";
    $mostrarThumbsCarrossel=array_rand($menu,$qntThumbsCarrossel);
    if(isset($mostrarThumbsCarrossel) && count($mostrarThumbsCarrossel)>0){
        foreach($mostrarThumbsCarrossel as $linkPagina)
        {
            $palavraChave=$menu[$linkPagina];

            $retorno.='<div class="text-center"><a href="'.$urlcompleta.$linkPagina.'" title="'.$palavraChave.'">';
            $retorno.='<img src="'.$caminhoPalavras.$linkPagina.'.webp" class="img-fluid rounded" alt="'.$palavraChave.'">';
            $retorno.='<h4>'.$palavraChave.'</h4>';
            $retorno.='</a>';            
            $retorno.='</div>';
        }
        return $retorno;
    }
}


## Ordenar Array (Sem Levar em Consideração Maiusculos e minusculos)
function acasesort($array,$array2=array("vazia"))
{
    foreach($array as $itemKey=>$itemValue){
        $itemValue=tratar_letras($itemValue);
        $arrayLower[$itemKey]=mb_strtolower($itemValue,'UTF-8');
    }
    asort($arrayLower);
    if(isset($array2[0]) && $array2[0]=="vazia"){
        foreach($arrayLower as $arrayLowerItemKey=>$arrayLowerItemValue){
            $arrayLower[$arrayLowerItemKey]=$array[$arrayLowerItemKey];
        }
        return $arrayLower;
    }else if(isset($array2) && count($array2)>0){
        $arrayNova=array();
        foreach($arrayLower as $arrayLowerItemKey=>$arrayLowerItemValue){
            if(in_array($arrayLowerItemKey,$array2)){
                array_push($arrayNova,$arrayLowerItemKey);
            }
        }
        if(isset($arrayNova) && count($arrayNova)>0){
            return $arrayNova;
        }else{
            return asort($array2);
        }
    }
}


## Verificação de Existência das Páginas
function keysExist(){
    global $urlcompleta;
    global $menu;
    $i       = 0;
    $qtdMenu = count($menu);
    foreach ($menu as $key => $value){
        if(!file_exists($key.'.php') && !file_exists($key)){
            $i++;
        }
    }
    if($i == $qtdMenu){
        return false;
    }
    else{ return true; }
}


?>

