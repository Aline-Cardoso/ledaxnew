<?php

$substituir = array(" no Litoral", " em SP", " em São Paulo", " na Zona Norte", " na Zona Sul", " na Zona Leste", " na Zona Oeste", " no Centro", " Preço");
$mudar = array("","","","","","","","","");
?>

<style type="text/css">
  .regioes-tabs{
    display: inline-block;
  }
  .regioes-tabs li{
    width: 50%;
    font-size: 12px;
    float: left;
  }

  .title-divider{
    margin-bottom: 25px !important;
  }
</style>
<div class="col-md-12">
<hr>
<h3 class="title-divider">ONDE ATUAMOS</h3>

<ul class="nav nav-tabs">
  <li><a data-toggle="tab" href="#RegiaoCentral">Região Central</a></li>
  <li><a data-toggle="tab" href="#ZonaNorte">Zona Norte</a></li>
  <li><a data-toggle="tab" href="#ZonaOeste">Zona Oeste</a></li>
  <li><a data-toggle="tab" href="#ZonaSul">Zona Sul</a></li>
  <li><a data-toggle="tab" href="#ZonaLeste">Zona Leste</a></li>
  <li><a data-toggle="tab" href="#GdeSaoPaulo">Gde São Paulo</a></li>
  <li><a data-toggle="tab" href="#Litoral">Litoral</a></li>
  <li><a data-toggle="tab" href="#Outros">Outros</a></li>
</ul>

<div class="tab-content">
  <div id="RegiaoCentral" class="tab-pane fade">
    <h4><?=$title;?> Na Região Central</h4>
    <ul class="regioes-tabs">
     <li><strong><?=$title;?></strong> na Aclimação</li>
     <li><strong><?=$title;?></strong> na Bela Vista</li>
     <li><strong><?=$title;?></strong> no Bom Retiro</li>
     <li><strong><?=$title;?></strong> no Brás</li>
     <li><strong><?=$title;?></strong> no Cambuci</li>
     <li><strong><?=$title;?></strong> no Centro</li>
     <li><strong><?=$title;?></strong> na Consolação</li>
     <li><strong><?=$title;?></strong> em Higienópolis</li>
     <li><strong><?=$title;?></strong> no Glicério</li>
     <li><strong><?=$title;?></strong> na Liberdade</li>
     <li><strong><?=$title;?></strong> na Luz</li>
     <li><strong><?=$title;?></strong> no Pari</li>
     <li><strong><?=$title;?></strong> na República</li>
     <li><strong><?=$title;?></strong> na Santa Cecília</li>
     <li><strong><?=$title;?></strong> na Santa Efigênia</li>
     <li><strong><?=$title;?></strong> na Sé</strong></li>
     <li><strong><?=$title;?></strong> na Vila Buarque</li>
   </ul>
 </div>
 <div id="ZonaNorte" class="tab-pane fade">
  <h4><?=$title;?> Na Zona Norte</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> na Brasilândia</li>
    <li><strong><?=$title;?></strong> em Cachoeirinha</li>
    <li><strong><?=$title;?></strong> na Casa Verde</li>
    <li><strong><?=$title;?></strong> no Imirim</li>
    <li><strong><?=$title;?></strong> no Jaçanã</li>
    <li><strong><?=$title;?></strong> no Jd São Paulo</li>
    <li><strong><?=$title;?></strong> em Lauzane</li>
    <li><strong><?=$title;?></strong> no Mandaqui</li>
    <li><strong><?=$title;?></strong> em Santana</li>
    <li><strong><?=$title;?></strong> no Tremembé</li>
    <li><strong><?=$title;?></strong> no Tucuruvi</li>
    <li><strong><?=$title;?></strong> na Vila Guilherme</li>
    <li><strong><?=$title;?></strong> na Vila Gustavo</li>
    <li><strong><?=$title;?></strong> na Vila Maria</li>
    <li><strong><?=$title;?></strong> na Vila Medeiros</li>
  </ul>
</div>

<div id="ZonaOeste" class="tab-pane fade">
  <h4><?=$title;?> Na Zona Oeste</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> na Água Branca</li>
    <li><strong><?=$title;?></strong> no Bairro do Limão</li>
    <li><strong><?=$title;?></strong> na Barra Funda</li>
    <li><strong><?=$title;?></strong> no Alto da Lapa</li>
    <li><strong><?=$title;?></strong> no Alto Pinheiros</li>
    <li><strong><?=$title;?></strong> no Butantã</li>
    <li><strong><?=$title;?></strong> na Freguesia do Ó</li>
    <li><strong><?=$title;?></strong> no Jaguaré</li>
    <li><strong><?=$title;?></strong> no Jaraguá</li>
    <li><strong><?=$title;?></strong> no Jd Bonfiglioli</li>
    <li><strong><?=$title;?></strong> na Lapa</li>
    <li><strong><?=$title;?></strong> no Pacaembú</li>
    <li><strong><?=$title;?></strong> em Perdizes</li>
    <li><strong><?=$title;?></strong> no Perús</li>
    <li><strong><?=$title;?></strong> em Pinheiros</li>
    <li><strong><?=$title;?></strong> em Pirituba</li>
    <li><strong><?=$title;?></strong> na Raposo</li>
    <li><strong><?=$title;?></strong> no Rio Pequeno</li>
    <li><strong><?=$title;?></strong> em São Domingos</li>
    <li><strong><?=$title;?></strong> no Sumaré</li>
    <li><strong><?=$title;?></strong> na Vila Leopoldina</li>
    <li><strong><?=$title;?></strong> na Vila Sonia</li>
  </ul>
</div>

<div id="ZonaSul" class="tab-pane fade">
  <h4><?=$title;?> Na Zona Sul</h4>
  <ul class="regioes-tabs">
   <li><strong><?=$title;?></strong> no Aeroporto</li>
   <li><strong><?=$title;?></strong> na Água Funda</li>
   <li><strong><?=$title;?></strong> no Brooklin</li>
   <li><strong><?=$title;?></strong> no Campo Belo</li>
   <li><strong><?=$title;?></strong> no Campo Grande</li>
   <li><strong><?=$title;?></strong> no Campo Limpo</li>
   <li><strong><?=$title;?></strong> no Capão Redondo</li>
   <li><strong><?=$title;?></strong> na Cidade Ademar</li>
   <li><strong><?=$title;?></strong> na Cidade Dutra</li>
   <li><strong><?=$title;?></strong> na Cidade Jardim</li>
   <li><strong><?=$title;?></strong> no Grajaú</li>
   <li><strong><?=$title;?></strong> no Ibirapuera</li>
   <li><strong><?=$title;?></strong> em Interlagos</li>
   <li><strong><?=$title;?></strong> no Ipiranga</li>
   <li><strong><?=$title;?></strong> no Itaim Bibi</li>
   <li><strong><?=$title;?></strong> no Jabaquara</li>
   <li><strong><?=$title;?></strong> no Jd Ângela</li>
   <li><strong><?=$title;?></strong> no Jd América</li>
   <li><strong><?=$title;?></strong> no Jd Europa</li>
   <li><strong><?=$title;?></strong> no Jd Paulista</li>
   <li><strong><?=$title;?></strong> no Jd Paulistano</li>
   <li><strong><?=$title;?></strong> no Jd São Luiz</li>
   <li><strong><?=$title;?></strong> no Jardins</li>
   <li><strong><?=$title;?></strong> no Jockey Club</li>
   <li><strong><?=$title;?></strong> no M'Boi Mirim</li>
   <li><strong><?=$title;?></strong> em Moema</li>
   <li><strong><?=$title;?></strong> no Morumbi</li>
   <li><strong><?=$title;?></strong> em Parelheiros</li>
   <li><strong><?=$title;?></strong> em Pedreira</li>
   <li><strong><?=$title;?></strong> no Sacomã</li>
   <li><strong><?=$title;?></strong> em Santo Amaro</li>
   <li><strong><?=$title;?></strong> na Saúde</li>
   <li><strong><?=$title;?></strong> em Socorro</li>
   <li><strong><?=$title;?></strong> na Vila Andrade</li>
   <li><strong><?=$title;?></strong> na Vila Mariana</li>
 </ul>
</div>


<div id="ZonaLeste" class="tab-pane fade">
  <h4><?=$title;?> Na Zona Leste</h4>
  <ul class="regioes-tabs">
   <li><strong><?=$title;?></strong> na Água Rasa</li>
   <li><strong><?=$title;?></strong> em Anália Franco</li>
   <li><strong><?=$title;?></strong> em Aricanduva</li>
   <li><strong><?=$title;?></strong> em Artur Alvim</li>
   <li><strong><?=$title;?></strong> em Belém</li>
   <li><strong><?=$title;?></strong> na Cidade Patriarca</li>
   <li><strong><?=$title;?></strong> na Cidade Tiradentes</li>
   <li><strong><?=$title;?></strong> Engenheiro Goulart</li>
   <li><strong><?=$title;?></strong> em Ermelino</li>
   <li><strong><?=$title;?></strong> em Guianazes</li>
   <li><strong><?=$title;?></strong> em Itaim Paulista</li>
   <li><strong><?=$title;?></strong> em Itaquera</li>
   <li><strong><?=$title;?></strong> em Jd Iguatemi</li>
   <li><strong><?=$title;?></strong> em José Bonifácio</li>
   <li><strong><?=$title;?></strong> na Moóca</li>
   <li><strong><?=$title;?></strong> no Pq do Carmo</li>
   <li><strong><?=$title;?></strong> no Pq São Lucas</li>
   <li><strong><?=$title;?></strong> no Pq São Rafael</li>
   <li><strong><?=$title;?></strong> na Penha</li>
   <li><strong><?=$title;?></strong> na Ponte Rasa</li>
   <li><strong><?=$title;?></strong> em São Mateus</li>
   <li><strong><?=$title;?></strong> em São Miguel</li>
   <li><strong><?=$title;?></strong> em Sapopemba</li>
   <li><strong><?=$title;?></strong> no Tatuapé</li>
   <li><strong><?=$title;?></strong> na Vila Carrão</li>
   <li><strong><?=$title;?></strong> na Vila Curuçá</li>
   <li><strong><?=$title;?></strong> na Vila Esperança</li>
   <li><strong><?=$title;?></strong> na Vila Formosa</li>
   <li><strong><?=$title;?></strong> na Vila Matilde</li>
   <li><strong><?=$title;?></strong> na Vila Prudente</li>
 </ul>
</div>


<div id="GdeSaoPaulo" class="tab-pane fade">
  <h4><?=$title;?> Na Grande São Paulo</h4>
  <ul class="regioes-tabs">
   <li><strong><?=$title;?></strong> em São Caetano</li>
   <li><strong><?=$title;?></strong> em São Bernardo</li>
   <li><strong><?=$title;?></strong> em Santo André</li>
   <li><strong><?=$title;?></strong> em Diadema</li>
   <li><strong><?=$title;?></strong> em Guarulhos</li>
   <li><strong><?=$title;?></strong> em Suzano</li>
   <li><strong><?=$title;?></strong> em Ribeirão Pires</li>
   <li><strong><?=$title;?></strong> em Mauá</li>
   <li><strong><?=$title;?></strong> em Embu</li>
   <li><strong><?=$title;?></strong> em Embu Guaçú</li>
   <li><strong><?=$title;?></strong> em Embu das Artes</li>
   <li><strong><?=$title;?></strong> em Itapecerica</li>
   <li><strong><?=$title;?></strong> em Osasco</li>
   <li><strong><?=$title;?></strong> em Barueri</li>
   <li><strong><?=$title;?></strong> em Jandira</li>
   <li><strong><?=$title;?></strong> em Cotia</li>
   <li><strong><?=$title;?></strong> em Itapevi</li>
   <li><strong><?=$title;?></strong> Santana de Parnaíba</li>
   <li><strong><?=$title;?></strong> em Caierias</li>
   <li><strong><?=$title;?></strong> em Franco da Rocha</li>
   <li><strong><?=$title;?></strong> em Taboão da Serra</li>
   <li><strong><?=$title;?></strong> em Cajamar</li>
   <li><strong><?=$title;?></strong> em Arujá</li>
   <li><strong><?=$title;?></strong> em Alphaville</li>
   <li><strong><?=$title;?></strong> em Mairiporã</li>
 </ul>
</div>

<div id="Litoral" class="tab-pane fade">
  <h4><?=$title;?> No Litoral</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> em Bertioga</li>
    <li><strong><?=$title;?></strong> em Cananéia</li>
    <li><strong><?=$title;?></strong> em Caraguatatuba</li>
    <li><strong><?=$title;?></strong> em Cubatão</li>
    <li><strong><?=$title;?></strong> no Guarujá</li>
    <li><strong><?=$title;?></strong> em Ilha Comprida</li>
    <li><strong><?=$title;?></strong> em Iguape</li>
    <li><strong><?=$title;?></strong> em Ilhabela</li>
    <li><strong><?=$title;?></strong> em Itanhaém</li>
    <li><strong><?=$title;?></strong> em Mongaguá</li>
    <li><strong><?=$title;?></strong> em Riviera</li>
    <li><strong><?=$title;?></strong> em Santos</li>
    <li><strong><?=$title;?></strong> em São Vicente</li>
    <li><strong><?=$title;?></strong> em Praia Grande</li>
    <li><strong><?=$title;?></strong> em Ubatuba</li>
    <li><strong><?=$title;?></strong> em São Sebastião</li>
    <li><strong><?=$title;?></strong> em Peruíbe</li>
  </ul>
</div>


<div id="Outros" class="tab-pane fade">
  <h4><?=$title;?> em Outras Regiões</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> Preço</li>
    <li><strong><?=$title;?></strong> Orçamento</li>
    <li><strong><?=$title;?></strong> Onde Encontrar</li>
    <li><strong><?=$title;?></strong> Melhor Empresa</li>
    <li><strong><?=$title;?></strong> Mais Barato</li>
    <li><strong><?=$title;?></strong> Cotação</li>
    <li><strong><?=$title;?></strong> Promoção</li>
    <li><strong><?=$title;?></strong> Menor Preço</li>
    <li><strong><?=$title;?></strong> Confiança</li>
    <li><strong><?=$title;?></strong> Qualidade</li>
    <li><strong><?=$title;?></strong> Entrega Imediata</li>
    <li><strong><?=$title;?></strong> Original</li>
    <li><strong><?=$title;?></strong> Fornecedor</li>
    <li><strong><?=$title;?></strong> Distribuidora</li>
    <li><strong><?=$title;?></strong> Revendedora</li>
    <li><strong><?=$title;?></strong> Industrial</li>
    <li><strong><?=$title;?></strong> Fornecimento</li>
    <li><strong><?=$title;?></strong> Catálogo</li>
    <li><strong><?=$title;?></strong> Importação</li>
    <li><strong><?=$title;?></strong> Especiais</li>
  </ul>
</div>

<br /><br />
<!-- 
=================================================================================
========================= REGIÕES NIVEL NACIONAL ================================
=================================================================================
-->


<h3 class="title-divider">E NOS DEMAIS ESTADOS</h3>

<ul class="nav nav-tabs">
  <li><a data-toggle="tab" href="#Capitais">Capitais</a></li>
  <li><a data-toggle="tab" href="#PE">PE</a></li>
  <li><a data-toggle="tab" href="#CE">CE</a></li>
  <li><a data-toggle="tab" href="#BA">BA</a></li>
  <li><a data-toggle="tab" href="#GO">GO</a></li>
  <li><a data-toggle="tab" href="#MG">MG</a></li>
  <li><a data-toggle="tab" href="#PR">PR</a></li>
  <li><a data-toggle="tab" href="#RJ">RJ</a></li>
  <li><a data-toggle="tab" href="#RS">RS</a></li>
  <li><a data-toggle="tab" href="#SC">SC</a></li>
  <li><a data-toggle="tab" href="#SP">SP</a></li>
</ul>

<div class="tab-content">
  <div id="Capitais" class="tab-pane fade">
    <h4><?=$title;?> Nas Capitais</h4>
    <ul class="regioes-tabs">
     <li><strong><?=$title;?></strong> no Acre</li>
     <li><strong><?=$title;?></strong> em Rio Branco</li>
     <li><strong><?=$title;?></strong> no Mato Grosso do Sul</li>
     <li><strong><?=$title;?></strong> em Campo Grande</li>
     <li><strong><?=$title;?></strong> no Mato Grosso</li>
     <li><strong><?=$title;?></strong> em Cuiabá</li>
     <li><strong><?=$title;?></strong> em Alagoas</li>
     <li><strong><?=$title;?></strong> no Espírito Santo</li>
     <li><strong><?=$title;?></strong> em Vitória</li>
     <li><strong><?=$title;?></strong> em Maceió</li>
     <li><strong><?=$title;?></strong> no Amapá</li>
     <li><strong><?=$title;?></strong> no Macapá</li>
     <li><strong><?=$title;?></strong> no Amazonas</li>
     <li><strong><?=$title;?></strong> em Manaus</li>
     <li><strong><?=$title;?></strong> em Sergipe</li>
     <li><strong><?=$title;?></strong> em Aracaju</li>
     <li><strong><?=$title;?></strong> em Tocantins</li>
     <li><strong><?=$title;?></strong> em Palmas</li>
     <li><strong><?=$title;?></strong> no Distrito Federal</li>
     <li><strong><?=$title;?></strong> em Brasília</li>
     <li><strong><?=$title;?></strong> no Maranhão</li>
     <li><strong><?=$title;?></strong> em São Luís</li>
     <li><strong><?=$title;?></strong> no Pará</li>
     <li><strong><?=$title;?></strong> em Belém</li>
     <li><strong><?=$title;?></strong> na Paraíba</li>
     <li><strong><?=$title;?></strong> em João Pessoa</li>
     <li><strong><?=$title;?></strong> no Piauí</li>
     <li><strong><?=$title;?></strong> em Teresina</li>
     <li><strong><?=$title;?></strong> no Rio Grande do Norte</li>
     <li><strong><?=$title;?></strong> em Natal</li>
     <li><strong><?=$title;?></strong> em Rondônia</li>
     <li><strong><?=$title;?></strong> em Porto Velho</li>
     <li><strong><?=$title;?></strong> em Roraima</li>
     <li><strong><?=$title;?></strong> em Boa Vista</li>
   </ul>
 </div>
 <div id="PE" class="tab-pane fade">
  <h4><?=$title;?> em Pernambuco</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> no Recife</li>
    <li><strong><?=$title;?></strong> em Jaboatão dos Guararapes</li>
    <li><strong><?=$title;?></strong> em Olinda</li>
    <li><strong><?=$title;?></strong> em Bandeira Caruaru</li>
    <li><strong><?=$title;?></strong> em Caruaru</li>
    <li><strong><?=$title;?></strong> em Petrolina</li>
    <li><strong><?=$title;?></strong> em Paulista</li>
    <li><strong><?=$title;?></strong> em Cabo de Santo Agostinho</li>
    <li><strong><?=$title;?></strong> em Camaragibe</li>
    <li><strong><?=$title;?></strong> em Garanhuns</li>
    <li><strong><?=$title;?></strong> em Vitória de Santo Antão</li>
    <li><strong><?=$title;?></strong> em Igarassu</li>
    <li><strong><?=$title;?></strong> em São Lourenço da Mata</li>
    <li><strong><?=$title;?></strong> em Santa Cruz do Capibaribe</li>
    <li><strong><?=$title;?></strong> em Abreu e Lima</li>
    <li><strong><?=$title;?></strong> em Ipojuca</li>
    <li><strong><?=$title;?></strong> em Serra Talhada</li>
    <li><strong><?=$title;?></strong> em Araripina</li>
    <li><strong><?=$title;?></strong> em Gravatá</li>
    <li><strong><?=$title;?></strong> em Carpina</li>
    <li><strong><?=$title;?></strong> em Goiana</li>
    <li><strong><?=$title;?></strong> em Belo Jardim</li>
    <li><strong><?=$title;?></strong> em Arcoverde</li>
    <li><strong><?=$title;?></strong> em Ouricuri</li>
    <li><strong><?=$title;?></strong> em Escada</li>
    <li><strong><?=$title;?></strong> em Pesqueira</li>
    <li><strong><?=$title;?></strong> em Surubim</li>
    <li><strong><?=$title;?></strong> em Palmares</li>
    <li><strong><?=$title;?></strong> em Moreno</li>
    <li><strong><?=$title;?></strong> em Bezerros</li>
    <li><strong><?=$title;?></strong> em Salgueiro</li>
    <li><strong><?=$title;?></strong> em São Bento do Una</li>
    <li><strong><?=$title;?></strong> em Buíque</li>
    <li><strong><?=$title;?></strong> em Limoeiro</li>
    <li><strong><?=$title;?></strong> em Paudalho</li>
    <li><strong><?=$title;?></strong> em Timbaúba</li>
  </ul>
</div>

<div id="CE" class="tab-pane fade">
  <h4><?=$title;?> em Ceará</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> em Fortaleza</li>
    <li><strong><?=$title;?></strong> em Caucaia</li>
    <li><strong><?=$title;?></strong> em Juazeiro do Norte</li>
    <li><strong><?=$title;?></strong> em Maracanaú</li>
    <li><strong><?=$title;?></strong> em Sobral</li>
    <li><strong><?=$title;?></strong> em Crato</li>
    <li><strong><?=$title;?></strong> em Itapipoca</li>
    <li><strong><?=$title;?></strong> em Maranguape</li>
    <li><strong><?=$title;?></strong> em Iguatu</li>
    <li><strong><?=$title;?></strong> em Quixadá</li>
    <li><strong><?=$title;?></strong> em Pacatuba</li>
    <li><strong><?=$title;?></strong> em Aquiraz</li>
    <li><strong><?=$title;?></strong> em Quixeramobim</li>
    <li><strong><?=$title;?></strong> no Canindé</li>
    <li><strong><?=$title;?></strong> em Russas</li>
    <li><strong><?=$title;?></strong> em Crateús</li>
    <li><strong><?=$title;?></strong> em Tianguá</li>
    <li><strong><?=$title;?></strong> em Aracati</li>
    <li><strong><?=$title;?></strong> em Cascavel</li>
    <li><strong><?=$title;?></strong> em Pacajus</li>
    <li><strong><?=$title;?></strong> em Icó</li>
    <li><strong><?=$title;?></strong> no Horizonte</li>
    <li><strong><?=$title;?></strong> em Camocim</li>
    <li><strong><?=$title;?></strong> em Morada Nova</li>
    <li><strong><?=$title;?></strong> em Acaraú</li>
    <li><strong><?=$title;?></strong> em Viçosa do Ceará</li>
    <li><strong><?=$title;?></strong> em Barbalha</li>
    <li><strong><?=$title;?></strong> em Limoeiro do Norte</li>
    <li><strong><?=$title;?></strong> em Tauá</li>
    <li><strong><?=$title;?></strong> em Trairi</li>
    <li><strong><?=$title;?></strong> na Granja</li>
    <li><strong><?=$title;?></strong> em Boa Viagem</li>
    <li><strong><?=$title;?></strong> em Acopiara</li>
    <li><strong><?=$title;?></strong> em Beberibe</li>
    <li><strong><?=$title;?></strong> em Eusébio</li>
  </ul>
</div>

<div id="BA" class="tab-pane fade">
  <h4><?=$title;?> na Bahia</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> em Salvador</li>
    <li><strong><?=$title;?></strong> em Feira de Santana</li>
    <li><strong><?=$title;?></strong> em Vitória da Conquista</li>
    <li><strong><?=$title;?></strong> em Camaçari</li>
    <li><strong><?=$title;?></strong> em Itabuna</li>
    <li><strong><?=$title;?></strong> em Juazeiro</li>
    <li><strong><?=$title;?></strong> em Lauro de Freitas</li>
    <li><strong><?=$title;?></strong> em Ilhéus</li>
    <li><strong><?=$title;?></strong> em Jequié</li>
    <li><strong><?=$title;?></strong> em Teixeira de Freitas</li>
    <li><strong><?=$title;?></strong> em Alagoinhas</li>
    <li><strong><?=$title;?></strong> em Porto Seguro</li>
    <li><strong><?=$title;?></strong> em Simões Filho</li>
    <li><strong><?=$title;?></strong> em Paulo Afonso</li>
    <li><strong><?=$title;?></strong> em Eunápolis</li>
    <li><strong><?=$title;?></strong> em Santo Antônio de Jesus</li>
    <li><strong><?=$title;?></strong> em Valença</li>
    <li><strong><?=$title;?></strong> em Candeias</li>
    <li><strong><?=$title;?></strong> em Guanambi</li>
    <li><strong><?=$title;?></strong> em Jacobina</li>
    <li><strong><?=$title;?></strong> em Serrinha</li>
    <li><strong><?=$title;?></strong> em Senhor do Bonfim</li>
    <li><strong><?=$title;?></strong> em Luís Eduardo Magalhães</li>
    <li><strong><?=$title;?></strong> em Dias d'Ávila</li>
    <li><strong><?=$title;?></strong> em Itapetinga</li>
    <li><strong><?=$title;?></strong> em Irecê</li>
    <li><strong><?=$title;?></strong> em Campo Formoso</li>
    <li><strong><?=$title;?></strong> em Casa Nova</li>
    <li><strong><?=$title;?></strong> em Bom Jesus da Lapa</li>
    <li><strong><?=$title;?></strong> em Brumado</li>
    <li><strong><?=$title;?></strong> em Conceição do Coité</li>
    <li><strong><?=$title;?></strong> em Itamaraju</li>
    <li><strong><?=$title;?></strong> em Itaberaba</li>
    <li><strong><?=$title;?></strong> em Cruz das Almas</li>
    <li><strong><?=$title;?></strong> em Ipirá</li>
    <li><strong><?=$title;?></strong> em Santo Amaro</li>
    <li><strong><?=$title;?></strong> em Euclides da Cunha</li>
    <li><strong><?=$title;?></strong> em Araci</li>
    <li><strong><?=$title;?></strong> em Tucano</li>
    <li><strong><?=$title;?></strong> em Catu</li>
    <li><strong><?=$title;?></strong> em Jaguaquara</li>
    <li><strong><?=$title;?></strong> em Monte Santo</li>
    <li><strong><?=$title;?></strong> na Barra</li>
    <li><strong><?=$title;?></strong> em Santo Estêvão</li>
    <li><strong><?=$title;?></strong> em Caetité</li>
    <li><strong><?=$title;?></strong> em Ribeira do Pombal</li>
    <li><strong><?=$title;?></strong> em Macaúbas</li>
  </ul>
</div>


<div id="GO" class="tab-pane fade">
  <h4><?=$title;?> em Goias</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> em Goiânia</li>
    <li><strong><?=$title;?></strong> em Aparecida de Goiânia</li>
    <li><strong><?=$title;?></strong> em Anápolis</li>
    <li><strong><?=$title;?></strong> em Rio Verde</li>
    <li><strong><?=$title;?></strong> em Luziânia</li>
    <li><strong><?=$title;?></strong> em Águas Lindas de Goiás</li>
    <li><strong><?=$title;?></strong> em Trindade</li>
    <li><strong><?=$title;?></strong> em Formosa</li>
    <li><strong><?=$title;?></strong> em Novo Gama</li>
    <li><strong><?=$title;?></strong> em Itumbiara</li>
    <li><strong><?=$title;?></strong> em Senador Canedo</li>
    <li><strong><?=$title;?></strong> em Catalão</li>
    <li><strong><?=$title;?></strong> em Jataí</li>
    <li><strong><?=$title;?></strong> em Planaltina</li>
    <li><strong><?=$title;?></strong> em Caldas Novas</li>
    <li><strong><?=$title;?></strong> em Santo Antônio do Descoberto</li>
    <li><strong><?=$title;?></strong> em Goianésia</li>
    <li><strong><?=$title;?></strong> em Cidade Ocidental</li>
    <li><strong><?=$title;?></strong> em Mineiros</li>
    <li><strong><?=$title;?></strong> em Cristalina</li>
    <li><strong><?=$title;?></strong> em Inhumas</li>
  </ul>
</div>


<div id="MG" class="tab-pane fade">
  <h4><?=$title;?> em Minas Gerais</h4>
  <ul class="regioes-tabs">
   <li><strong><?=$title;?></strong> em Belo Horizonte</li>
   <li><strong><?=$title;?></strong> em Uberlândia</li>
   <li><strong><?=$title;?></strong> em Contagem</li>
   <li><strong><?=$title;?></strong> em Juiz de Fora</li>
   <li><strong><?=$title;?></strong> em Uberaba</li>
   <li><strong><?=$title;?></strong> em Governador Valadares</li>
   <li><strong><?=$title;?></strong> em Betim</li>
   <li><strong><?=$title;?></strong> em Montes Claros</li>
   <li><strong><?=$title;?></strong> em Ribeirão das Neves</li>
   <li><strong><?=$title;?></strong> em Ipatinga</li>
   <li><strong><?=$title;?></strong> em Sete Lagoas</li>
   <li><strong><?=$title;?></strong> em Divinópolis</li>
   <li><strong><?=$title;?></strong> em Santa Luzia</li>
   <li><strong><?=$title;?></strong> em Ibirité</li>
   <li><strong><?=$title;?></strong> em Poços de Caldas</li>
   <li><strong><?=$title;?></strong> em Patos de Minas</li>
   <li><strong><?=$title;?></strong> em Pouso Alegre</li>
   <li><strong><?=$title;?></strong> em Teófilo Otoni</li>
   <li><strong><?=$title;?></strong> em Barbacena</li>
   <li><strong><?=$title;?></strong> em Sabará</li>
   <li><strong><?=$title;?></strong> em Varginha</li>
   <li><strong><?=$title;?></strong> em Conselheiro Lafaiete</li>
   <li><strong><?=$title;?></strong> em Vespasiano</li>
   <li><strong><?=$title;?></strong> em Itabira</li>
   <li><strong><?=$title;?></strong> em Araguari</li>
   <li><strong><?=$title;?></strong> em Passos</li>
   <li><strong><?=$title;?></strong> em Ubá</li>
   <li><strong><?=$title;?></strong> em Coronel Fabriciano</li>
   <li><strong><?=$title;?></strong> em Muriaé</li>
   <li><strong><?=$title;?></strong> em Ituiutaba</li>
   <li><strong><?=$title;?></strong> em Araxá</li>
   <li><strong><?=$title;?></strong> em Lavras</li>
   <li><strong><?=$title;?></strong> em Itajubá</li>
   <li><strong><?=$title;?></strong> em Itaúna</li>
   <li><strong><?=$title;?></strong> em Pará de Minas</li>
   <li><strong><?=$title;?></strong> em Paracatu</li>
   <li><strong><?=$title;?></strong> em Caratinga</li>
   <li><strong><?=$title;?></strong> em Nova Lima</li>
   <li><strong><?=$title;?></strong> em Nova Serrana</li>
   <li><strong><?=$title;?></strong> em São João del Rei</li>
   <li><strong><?=$title;?></strong> em Patrocínio</li>
   <li><strong><?=$title;?></strong> em Timóteo</li>
   <li><strong><?=$title;?></strong> em Manhuaçu</li>
   <li><strong><?=$title;?></strong> em Unaí</li>
   <li><strong><?=$title;?></strong> em Curvelo</li>
   <li><strong><?=$title;?></strong> em Alfenas</li>
   <li><strong><?=$title;?></strong> em João Monlevade</li>
   <li><strong><?=$title;?></strong> em Três Corações</li>
   <li><strong><?=$title;?></strong> em Viçosa</li>
   <li><strong><?=$title;?></strong> em Cataguases</li>
   <li><strong><?=$title;?></strong> em Ouro Preto</li>
   <li><strong><?=$title;?></strong> em Janaúba</li>
   <li><strong><?=$title;?></strong> em São Sebastião do Paraíso</li>
   <li><strong><?=$title;?></strong> em Januária</li>
   <li><strong><?=$title;?></strong> em Formiga</li>
   <li><strong><?=$title;?></strong> em Esmeraldas</li>
   <li><strong><?=$title;?></strong> em Pedro Leopoldo</li>
   <li><strong><?=$title;?></strong> em Ponte Nova</li>
   <li><strong><?=$title;?></strong> em Lagoa Santa</li>
   <li><strong><?=$title;?></strong> em Mariana</li>
   <li><strong><?=$title;?></strong> em Frutal</li>
   <li><strong><?=$title;?></strong> em Três Pontas</li>
   <li><strong><?=$title;?></strong> em São Francisco</li>
   <li><strong><?=$title;?></strong> em Pirapora</li>
   <li><strong><?=$title;?></strong> em Campo Belo</li>
   <li><strong><?=$title;?></strong> em Leopoldina</li>
   <li><strong><?=$title;?></strong> em Congonhas</li>
   <li><strong><?=$title;?></strong> em Guaxupé</li>
   <li><strong><?=$title;?></strong> em Lagoa da Prata</li>
 </ul>
</div>


<div id="PR" class="tab-pane fade">
  <h4><?=$title;?> no Paraná</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> em Curitiba</li>
    <li><strong><?=$title;?></strong> em Londrina</li>
    <li><strong><?=$title;?></strong> em Maringá</li>
    <li><strong><?=$title;?></strong> em Ponta Grossa</li>
    <li><strong><?=$title;?></strong> em Cascavel</li>
    <li><strong><?=$title;?></strong> em São José dos Pinhais</li>
    <li><strong><?=$title;?></strong> em Foz do Iguaçu</li>
    <li><strong><?=$title;?></strong> em Colombo</li>
    <li><strong><?=$title;?></strong> em Guarapuava</li>
    <li><strong><?=$title;?></strong> em Paranaguá</li>
    <li><strong><?=$title;?></strong> em Araucária</li>
    <li><strong><?=$title;?></strong> em Toledo</li>
    <li><strong><?=$title;?></strong> em Apucarana</li>
    <li><strong><?=$title;?></strong> em Pinhais</li>
    <li><strong><?=$title;?></strong> em Campo Largo</li>
    <li><strong><?=$title;?></strong> em Arapongas</li>
    <li><strong><?=$title;?></strong> em Almirante Tamandaré</li>
    <li><strong><?=$title;?></strong> em Umuarama</li>
    <li><strong><?=$title;?></strong> em Piraquara</li>
    <li><strong><?=$title;?></strong> em Cambé</li>
    <li><strong><?=$title;?></strong> em Campo Mourão</li>
    <li><strong><?=$title;?></strong> em Fazenda Rio Grande</li>
    <li><strong><?=$title;?></strong> em Sarandi</li>
    <li><strong><?=$title;?></strong> em Fazenda Rio Grande</li>
    <li><strong><?=$title;?></strong> em Paranavaí</li>
    <li><strong><?=$title;?></strong> em Francisco Beltrão</li>
    <li><strong><?=$title;?></strong> em Pato Branco</li>
    <li><strong><?=$title;?></strong> em Cianorte</li>
    <li><strong><?=$title;?></strong> em Telêmaco Borba</li>
    <li><strong><?=$title;?></strong> em Castro</li>
    <li><strong><?=$title;?></strong> em Rolândia</li>
    <li><strong><?=$title;?></strong> em Irati</li>
    <li><strong><?=$title;?></strong> em União da Vitória</li>
    <li><strong><?=$title;?></strong> em Ibiporã</li>
    <li><strong><?=$title;?></strong> em Prudentópolis</li>
    <li><strong><?=$title;?></strong> em Marechal Cândido Rondon</li>
    <li><strong><?=$title;?></strong> em Cornélio Procópio</li>
  </ul>
</div>


<div id="RJ" class="tab-pane fade">
  <h4><?=$title;?> no Paraná</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> no Rio de Janeiro</li>
    <li><strong><?=$title;?></strong> em São Gonçalo</li>
    <li><strong><?=$title;?></strong> em Duque de Caxias</li>
    <li><strong><?=$title;?></strong> em Nova Iguaçu </li>
    <li><strong><?=$title;?></strong> em Niterói</li>
    <li><strong><?=$title;?></strong> em Campos dos Goytacazes</li>
    <li><strong><?=$title;?></strong> em Belford Roxo</li>
    <li><strong><?=$title;?></strong> em São João de Meriti</li>
    <li><strong><?=$title;?></strong> em Petrópolis</li>
    <li><strong><?=$title;?></strong> em Volta Redonda</li>
    <li><strong><?=$title;?></strong> em Magé</li>
    <li><strong><?=$title;?></strong> em Macaé</li>
    <li><strong><?=$title;?></strong> em Itaboraí</li>
    <li><strong><?=$title;?></strong> em Cabo Frio</li>
    <li><strong><?=$title;?></strong> em Angra dos Reis</li>
    <li><strong><?=$title;?></strong> em Nova Friburgo</li>
    <li><strong><?=$title;?></strong> em Barra Mansa</li>
    <li><strong><?=$title;?></strong> em Teresópolis</li>
    <li><strong><?=$title;?></strong> em Mesquita</li>
    <li><strong><?=$title;?></strong> em Nilópolis</li>
    <li><strong><?=$title;?></strong> em Maricá</li>
    <li><strong><?=$title;?></strong> em Queimados</li>
    <li><strong><?=$title;?></strong> em Rio das Ostras</li>
    <li><strong><?=$title;?></strong> em Resende</li>
    <li><strong><?=$title;?></strong> em Araruama</li>
    <li><strong><?=$title;?></strong> em Itaguaí</li>
    <li><strong><?=$title;?></strong> em Japeri</li>
    <li><strong><?=$title;?></strong> em Itaperuna</li>
    <li><strong><?=$title;?></strong> em São Pedro da Aldeia</li>
    <li><strong><?=$title;?></strong> em Barra do Piraí</li>
    <li><strong><?=$title;?></strong> em Seropédica</li>
    <li><strong><?=$title;?></strong> em Saquarema</li>
    <li><strong><?=$title;?></strong> em Três Rios</li>
    <li><strong><?=$title;?></strong> em Valença</li>
    <li><strong><?=$title;?></strong> em Rio Bonito</li>
    <li><strong><?=$title;?></strong> em Guapimirim</li>
    <li><strong><?=$title;?></strong> em Cachoeiras de Macacu</li>
    <li><strong><?=$title;?></strong> em Paracambi</li>
    <li><strong><?=$title;?></strong> em Paraíba do Sul</li>
    <li><strong><?=$title;?></strong> em São Francisco de Itabapoana</li>
  </ul>
</div>



<div id="RS" class="tab-pane fade">
  <h4><?=$title;?> no Rio Grande do Sul</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> em Porto Alegre</li>
    <li><strong><?=$title;?></strong> em Caxias do Sul</li>
    <li><strong><?=$title;?></strong> em Pelotas</li>
    <li><strong><?=$title;?></strong> em Canoas</li>
    <li><strong><?=$title;?></strong> em Santa Maria</li>
    <li><strong><?=$title;?></strong> em Gravataí</li>
    <li><strong><?=$title;?></strong> em Viamão</li>
    <li><strong><?=$title;?></strong> em Novo Hamburgo</li>
    <li><strong><?=$title;?></strong> em São Leopoldo</li>
    <li><strong><?=$title;?></strong> em Rio Grande</li>
    <li><strong><?=$title;?></strong> em Alvorada</li>
    <li><strong><?=$title;?></strong> em Passo Fundo</li>
    <li><strong><?=$title;?></strong> em Sapucaia do Sul</li>
    <li><strong><?=$title;?></strong> em Uruguaiana</li>
    <li><strong><?=$title;?></strong> em Santa Cruz do Sul</li>
    <li><strong><?=$title;?></strong> em Cachoeirinha</li>
    <li><strong><?=$title;?></strong> em Bagé</li>
    <li><strong><?=$title;?></strong> em Bento Gonçalves</li>
    <li><strong><?=$title;?></strong> em Erechim</li>
    <li><strong><?=$title;?></strong> em Guaíba</li>
    <li><strong><?=$title;?></strong> em Cachoeira do Sul</li>
    <li><strong><?=$title;?></strong> em Esteio</li>
    <li><strong><?=$title;?></strong> em Santana do Livramento</li>
    <li><strong><?=$title;?></strong> em Ijuí</li>
    <li><strong><?=$title;?></strong> em Sapiranga</li>
    <li><strong><?=$title;?></strong> em Santo Ângelo</li>
    <li><strong><?=$title;?></strong> em Alegrete</li>
    <li><strong><?=$title;?></strong> em Lajeado</li>
    <li><strong><?=$title;?></strong> em Santa Rosa</li>
    <li><strong><?=$title;?></strong> em Venâncio Aires</li>
    <li><strong><?=$title;?></strong> em Farroupilha</li>
    <li><strong><?=$title;?></strong> em Camaquã</li>
    <li><strong><?=$title;?></strong> em Vacaria</li>
    <li><strong><?=$title;?></strong> em Campo Bom</li>
    <li><strong><?=$title;?></strong> em Cruz Alta</li>
    <li><strong><?=$title;?></strong> em Montenegro</li>
    <li><strong><?=$title;?></strong> em São Borja</li>
    <li><strong><?=$title;?></strong> em São Gabriel</li>
    <li><strong><?=$title;?></strong> em Carazinho</li>
    <li><strong><?=$title;?></strong> em Taquara</li>
    <li><strong><?=$title;?></strong> em Canguçu</li>
    <li><strong><?=$title;?></strong> em Parobé</li>
    <li><strong><?=$title;?></strong> em Santiago</li>
  </ul>
</div>

<div id="SC" class="tab-pane fade">
  <h4><?=$title;?> em Santa Catarina</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> em Joinville</li>
    <li><strong><?=$title;?></strong> em Florianópolis</li>
    <li><strong><?=$title;?></strong> em Blumenau</li>
    <li><strong><?=$title;?></strong> em São José</li>
    <li><strong><?=$title;?></strong> em Criciúma</li>
    <li><strong><?=$title;?></strong> em Chapecó</li>
    <li><strong><?=$title;?></strong> em Itajaí</li>
    <li><strong><?=$title;?></strong> em Jaraguá do Sul</li>
    <li><strong><?=$title;?></strong> em Lages</li>
    <li><strong><?=$title;?></strong> em Palhoça</li>
    <li><strong><?=$title;?></strong> em Balneário Camboriú</li>
    <li><strong><?=$title;?></strong> em Brusque</li>
    <li><strong><?=$title;?></strong> em Tubarão</li>
    <li><strong><?=$title;?></strong> em São Bento do Sul</li>
    <li><strong><?=$title;?></strong> em Caçador</li>
    <li><strong><?=$title;?></strong> em Camboriú</li>
    <li><strong><?=$title;?></strong> em Navegantes</li>
    <li><strong><?=$title;?></strong> em Concórdia</li>
    <li><strong><?=$title;?></strong> em Rio do Sul</li>
    <li><strong><?=$title;?></strong> em Araranguá</li>
    <li><strong><?=$title;?></strong> em Gaspar</li>
    <li><strong><?=$title;?></strong> em Biguaçu</li>
    <li><strong><?=$title;?></strong> em Indaial</li>
    <li><strong><?=$title;?></strong> em Itapema</li>
    <li><strong><?=$title;?></strong> em Mafra</li>
    <li><strong><?=$title;?></strong> em Canoinhas</li>
    <li><strong><?=$title;?></strong> em Içara</li>
    <li><strong><?=$title;?></strong> em Videira</li>
  </ul>
</div>


<div id="SP" class="tab-pane fade">
  <h4><?=$title;?> em São Paulo</h4>
  <ul class="regioes-tabs">
    <li><strong><?=$title;?></strong> em São Paulo</li>
    <li><strong><?=$title;?></strong> em Guarulhos</li>
    <li><strong><?=$title;?></strong> em Campinas</li>
    <li><strong><?=$title;?></strong> em São Bernardo do Campo</li>
    <li><strong><?=$title;?></strong> em Santo André</li>
    <li><strong><?=$title;?></strong> em Osasco</li>
    <li><strong><?=$title;?></strong> em São José dos Campos</li>
    <li><strong><?=$title;?></strong> em Ribeirão Preto</li>
    <li><strong><?=$title;?></strong> em Sorocaba</li>
    <li><strong><?=$title;?></strong> em Santos</li>
    <li><strong><?=$title;?></strong> em Mauá</li>
    <li><strong><?=$title;?></strong> em São José do Rio Preto</li>
    <li><strong><?=$title;?></strong> em Mogi das Cruzes</li>
    <li><strong><?=$title;?></strong> em Diadema</li>
    <li><strong><?=$title;?></strong> em Jundiaí</li>
    <li><strong><?=$title;?></strong> em Carapicuíba</li>
    <li><strong><?=$title;?></strong> em Piracicaba</li>
    <li><strong><?=$title;?></strong> em Bauru</li>
    <li><strong><?=$title;?></strong> em São Vicente</li>
    <li><strong><?=$title;?></strong> em Itaquaquecetuba</li>
    <li><strong><?=$title;?></strong> em Franca</li>
    <li><strong><?=$title;?></strong> em Guarujá</li>
    <li><strong><?=$title;?></strong> em Taubaté</li>
    <li><strong><?=$title;?></strong> em Praia Grande</li>
    <li><strong><?=$title;?></strong> em Limeira</li>
    <li><strong><?=$title;?></strong> em Suzano</li>
    <li><strong><?=$title;?></strong> em Taboão da Serra</li>
    <li><strong><?=$title;?></strong> em Sumaré</li>
    <li><strong><?=$title;?></strong> em Barueri</li>
    <li><strong><?=$title;?></strong> em Embu das Artes</li>
    <li><strong><?=$title;?></strong> em São Carlos</li>
    <li><strong><?=$title;?></strong> em Marília</li>
    <li><strong><?=$title;?></strong> em Indaiatuba</li>
    <li><strong><?=$title;?></strong> em Cotia</li>
    <li><strong><?=$title;?></strong> em Americana</li>
    <li><strong><?=$title;?></strong> em Jacareí</li>
    <li><strong><?=$title;?></strong> em Araraquara</li>
    <li><strong><?=$title;?></strong> em Itapevi</li>
    <li><strong><?=$title;?></strong> em Presidente Prudente</li>
    <li><strong><?=$title;?></strong> em Hortolândia</li>
    <li><strong><?=$title;?></strong> em Araçatuba</li>
    <li><strong><?=$title;?></strong> em Santa Bárbara do Oeste</li>
    <li><strong><?=$title;?></strong> em Ferraz de Vasconcelos</li>
    <li><strong><?=$title;?></strong> em Francisco Morato</li>
    <li><strong><?=$title;?></strong> em Itapecerica da Serra</li>
    <li><strong><?=$title;?></strong> em Itu</li>
    <li><strong><?=$title;?></strong> em Bragança Paulista</li>
    <li><strong><?=$title;?></strong> em Pindamonhangaba</li>
    <li><strong><?=$title;?></strong> em São Caetano do Sul</li>
    <li><strong><?=$title;?></strong> em Itapetininga</li>
    <li><strong><?=$title;?></strong> em Mogi Guaçu</li>
    <li><strong><?=$title;?></strong> em Franco da Rocha</li>
    <li><strong><?=$title;?></strong> em Jaú</li>
    <li><strong><?=$title;?></strong> em Botucatu</li>
    <li><strong><?=$title;?></strong> em Atibaia</li>
    <li><strong><?=$title;?></strong> em Araras</li>
    <li><strong><?=$title;?></strong> em Cubatão</li>
    <li><strong><?=$title;?></strong> em Santana de Parnaíba</li>
    <li><strong><?=$title;?></strong> em Ribeirão Pires</li>
    <li><strong><?=$title;?></strong> em Valinhos</li>
    <li><strong><?=$title;?></strong> em Sertãozinho</li>
    <li><strong><?=$title;?></strong> em Catanduva</li>
    <li><strong><?=$title;?></strong> em Barretos</li>
    <li><strong><?=$title;?></strong> em Guaratinguetá</li>
    <li><strong><?=$title;?></strong> em Jandira</li>
    <li><strong><?=$title;?></strong> em Votorantim</li>
    <li><strong><?=$title;?></strong> em Tatuí</li>
    <li><strong><?=$title;?></strong> em Várzea Paulista</li>
    <li><strong><?=$title;?></strong> em Salto</li>
    <li><strong><?=$title;?></strong> em Poá</li>
    <li><strong><?=$title;?></strong> em Caraguatatuba</li>
    <li><strong><?=$title;?></strong> em Itatiba</li>
    <li><strong><?=$title;?></strong> em Ourinhos</li>
    <li><strong><?=$title;?></strong> em Assis</li>
    <li><strong><?=$title;?></strong> em Leme</li>
    <li><strong><?=$title;?></strong> em Paulínia</li>
    <li><strong><?=$title;?></strong> em Itanhaém</li>
    <li><strong><?=$title;?></strong> em Caieiras</li>
    <li><strong><?=$title;?></strong> em Itapeva</li>
    <li><strong><?=$title;?></strong> em Mairiporã</li>
    <li><strong><?=$title;?></strong> em Mogi Mirim</li>
    <li><strong><?=$title;?></strong> em Votuporanga</li>
    <li><strong><?=$title;?></strong> em Caçapava</li>
    <li><strong><?=$title;?></strong> em São João da Boa Vista</li>
    <li><strong><?=$title;?></strong> em Avaré</li>
    <li><strong><?=$title;?></strong> em Lorena</li>
    <li><strong><?=$title;?></strong> em São Roque</li>
    <li><strong><?=$title;?></strong> em Ubatuba</li>
    <li><strong><?=$title;?></strong> em Arujá</li>
    <li><strong><?=$title;?></strong> em São Sebastião</li>
    <li><strong><?=$title;?></strong> em Matão</li>
    <li><strong><?=$title;?></strong> em Cruzeiro</li>
    <li><strong><?=$title;?></strong> em Campo Limpo Paulista</li>
    <li><strong><?=$title;?></strong> em Bebedouro</li>
    <li><strong><?=$title;?></strong> em Ibiúna</li>
    <li><strong><?=$title;?></strong> em Lins</li>
    <li><strong><?=$title;?></strong> em Jaboticabal</li>
    <li><strong><?=$title;?></strong> em Pirassununga</li>
    <li><strong><?=$title;?></strong> em Itapira</li>
    <li><strong><?=$title;?></strong> em Vinhedo</li>
    <li><strong><?=$title;?></strong> em Cajamar</li>
    <li><strong><?=$title;?></strong> em Amparo</li>
    <li><strong><?=$title;?></strong> em Mococa</li>
  </ul>
</div>
</div>