@extends('_layouts.professores.master')
@section('styles')
{{-- <link href="../foto.css" rel="stylesheet" type="text/css">  --}}
<link rel="stylesheet" href="{{ $page->baseUrl}}/css/fotos.css">
@endsection
@section('content')

<article> 
<p id="info">O corpo docente do curso BSI é composto por professores altamente qualificados, quase todos doutores. Clique no professor e consulte seu currículo.<br>&nbsp;</p>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/adriana.jpg') }}" alt="Adriana Alvim" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<h3 class="slidebox"><a href="http://lattes.cnpq.br/1841338064901299" target="_blank">Adriana Alvim</a></h3>
		<p class="correio">adriana<img src="../uniriotecbr.gif" alt="Adriana Alvim" class="correioImage"></p>
	</div>
	</a>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/adrianapimenta.jpg') }}" alt="Adriana Pimenta" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<h3 class="slidebox"><a href="http://lattes.cnpq.br/1166577932438963" target="_blank">Adriana Pimenta</a></h3>
		<p class="correio">adriana.pimenta<img src="../uniriotecbr.gif" alt="Adriana Pimenta" class="correioImage"></p>
	</div>
	</a>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/andreatta.jpg') }}" alt="Alexandre Andreatta" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/5998143228852295" target="_blank"><h3 class="slidebox">Alexandre Andreatta</h3></a>
		<p class="correio">andreatt<img src="../uniriotecbr.gif" alt="Alexandre Andreatta" class="correioImage"></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/alexandrecorrea.jpg') }}" alt="Alexandre Correa" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2953646352903735" target="_blank"><h3 class="slidebox">Alexandre Correa</h3></a>
		<p class="correio">alexandre.correa<img src="../uniriotecbr.gif" alt="Alexandre Correa" class="correioImage"></p>
	</div>
</section>
-->
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/alexandresilva.jpg') }}" alt="Alexandre Silva" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4763659817918925" target="_blank"><h3 class="slidebox">Alexandre Silva</h3></a>
		<p class="correio">alexandre.silva<img src="../uniriotecbr.gif" alt="Alexandre Silva" class="correioImage"></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/tanaka.jpg') }}" alt="Asterio Tanaka" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/8934031838766350" target="_blank"><h3 class="slidebox">Asterio Tanaka</h3></a>
		<p class="correio">tanaka<img src="../uniriotecbr.gif" alt="Asterio Tanaka" class="correioImage"></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/angelo.jpg') }}" alt="Angelo Ciarlini" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4612726434879544" target="_blank"><h3 class="slidebox">Angelo Ciarlini</h3></a>
		<p class="correio">angelo.ciarlini<img src="../uniriotecbr.gif" alt="Angelo Ciarlini" class="correioImage"></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/benur.jpg') }}" alt="Benur Girardi" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/9097100603040676" target="_blank"><h3 class="slidebox">Benur Girardi</h3></a>
		<p class="correio">girardi<img src="../uniriotecbr.gif" alt="Benur Girardi" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/malajovich.jpg') }}" alt="Beatriz Malajovich" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7250793021119630" target="_blank"><h3 class="slidebox">Beatriz Malajovich</h3></a>
		<p class="correio">malajovich<img src="../uniriotecbr.gif" alt="Beatriz Malajovich" class="correioImage"></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/brunosimoes.jpg') }}" alt="Bruno Simões" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0985291000032685" target="_blank"><h3 class="slidebox">Bruno Simões</h3></a>
		<p class="correio">bruno.simoes<img src="../uniriotecbr.gif" alt="Bruno Simões" class="correioImage"></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/beto.jpg') }}" alt="Carlos Alberto Campos" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/8020803376969953" target="_blank"><h3 class="slidebox">Carlos Campos</h3></a>
		<p class="correio">beto<img src="../uniriotecbr.gif" alt="Carlos Alberto Campos" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/mello.gif') }}" alt="Carlos Eduardo Mello" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2417341890473612" target="_blank"><h3 class="slidebox">Carlos Eduardo Mello</h3></a>
		<p class="correio">mello<img src="../uniriotecbr.gif" alt="Carlos Eduardo Mello" class="correioImage"></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/cecilia.gif') }}" alt="Cecilia Saraiva" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4820702492139261" target="_blank"><h3 class="slidebox">Cecilia Saraiva</h3></a>
		<p class="correio">cecilia.saraiva<img src="../uniriotecbr.gif" alt="Cecilia Saraiva" class="correioImage"></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/capelli.jpg') }}" alt="Claudia Cappelli" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4930762936357558" target="_blank"><h3 class="slidebox">Claudia Cappelli</h3></a>
		<p class="correio">claudia.cappelli<img src="../uniriotecbr.gif" alt="Claudia Cappelli" class="correioImage"></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/celso.jpg') }}" alt="Celso Campos" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7190321020308770" target="_blank"><h3 class="slidebox">Celso Campos</h3></a>
		<p class="correio">celso.campos<img src="../uniriotecbr.gif" alt="Celso Campos" class="correioImage"></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/cristiane.jpg') }}" alt="Cristiane de Melo" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/6183375000382666" target="_blank"><h3 class="slidebox">Cristiane de Melo</h3></a>
		<p class="correio">cristiane.mello<img src="../uniriotecbr.gif" alt="cristiane.mello" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/cristina.jpg') }}" alt="Cristina Garcia" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4781889E0" target="_blank"><h3 class="slidebox">Cristina Bicharra</h3></a>
		<p class="correio">cristina.bicharra<img src="../uniriotecbr.gif" alt="Claudia Cappelli" class="correioImage"></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/fabio.jpg') }}" alt="Fabio Simas" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/1619536438180209" target="_blank"><h3 class="slidebox">Fabio Simas</h3></a>
		<p class="correio">fabio.simas<img src="../uniriotecbr.gif" alt="Fabio Simas" class="correioImage"></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/profile.jpg') }}" alt="Felipe Ribeiro" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4481222D9" target="_blank"><h3 class="slidebox">Felipe Ribeiro</h3></a>
		<p class="correio">felipe.ribeiro<img src="../uniriotecbr.gif" alt="Felipe Ribeiro" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/profile.jpg') }}" alt="Fernanda Baião" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/5068302552861597" target="_blank"><h3 class="slidebox">Fernanda Baião</h3></a>
		<p class="correio">fernanda.baiao<img src="../uniriotecbr.gif" alt="Fernanda Baião" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/flavia.jpg') }}" alt="Flávia Santoro" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/5377746284077362" target="_blank"><h3 class="slidebox">Flávia Santoro</h3></a>
		<p class="correio">flavia.santoro<img src="../uniriotecbr.gif" alt="Flávia Santoro" class="correioImage"></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/gladson.jpg') }}" alt="Glasdson Antunes" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/6725560105680636" target="_blank"><h3 class="slidebox">Glasdson Antunes</h3></a>
		<p class="correio">gladson.antunes<img src="../uniriotecbr.gif" alt="Glasdson Antunes" class="correioImage"></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/gleison.jpg') }}" alt="Gleison Santos" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4616202382103338" target="_blank"><h3 class="slidebox">Gleison Santos</h3></a>
		<p class="correio">gleison.santos<img src="../uniriotecbr.gif" alt="Gleison Santos" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/geiza.jpg') }}" alt="Geiza Hamazaki" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2100358669537195" target="_blank"><h3 class="slidebox">Geiza Hamazaki</h3></a>
		<p class="correio">geiza.hamazaki<img src="../uniriotecbr.gif" alt="Geiza Hamazaki" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/profile.jpg') }}" alt="Helisson Coutinho" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/6452434384067273" target="_blank"><h3 class="slidebox">Helisson Coutinho</h3></a>
		<p class="correio">helisson<img src="../uniriotecbr.gif" alt="Helisson Coutinho" class="correioImage"></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/calneto.jpg') }}" alt="José Cal Neto" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2637672868100554" target="_blank"><h3 class="slidebox">José Cal Neto</h3></a>
		<p class="correio">jose.calneto<img src="../uniriotecbr.gif" alt="José Cal Neto" class="correioImage"></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/jefferson.jpg') }}" alt="Jefferson Elbert Simões" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4237922U4" target="_blank">
                   <h3 class="slidebox">Jefferson Simões</h3></a>
		<p class="correio">jefferson.simoes<img src="../uniriotecbr.gif" alt="Jefferson Elbert Simões" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/cereja.jpg') }}" alt="José Ricardo Cereja" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7653288098116734" target="_blank"><h3 class="slidebox">José Ricardo Cereja</h3></a>
		<p class="correio">ricardo.cereja<img src="../uniriotecbr.gif" alt="José Ricardo Cereja" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/kate.jpg') }}" alt="Kate Revoredo" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0814717344017544" target="_blank"><h3 class="slidebox">Kate Revoredo</h3></a>
		<p class="correio">katerevoredo<img src="../uniriotecbr.gif" alt="Kate Revoredo" class="correioImage"></p>
	</div>
</section>


<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/azevedo.jpg') }}" alt="Leonardo Azevedo" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7214791464543522" target="_blank"><h3 class="slidebox">Leonardo Azevedo</h3></a>
		<p class="correio">azevedo<img src="../uniriotecbr.gif" alt="Leonardo Azevedo" class="correioImage"></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/leonardosilvares.jpg') }}" alt="Leonardo Silvares" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7680212403415186" target="_blank"><h3 class="slidebox">Leonardo Silvares</h3></a>
		<p class="correio">leo.silvares<img src="../uniriotecbr.gif" alt="Leonardo Silvares" class="correioImage"></p>
	</div>
</section>			
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/leorocha.jpg') }}" alt="Leonardo Rocha" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0780057318850413" target="_blank"><h3 class="slidebox">Leonardo Rocha</h3></a>
		<p class="correio">leonardo<img src="../uniriotecbr.gif" alt="Leonardo Rocha" class="correioImage"></p>
	</div>
</section>	

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/loisi.jpg') }}" alt="Loisi Carla" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0652694567478876" target="_blank"><h3 class="slidebox">Loisi Carla</h3></a>
		<p class="correio">loisi<img src="../uniriotecbr.gif" alt="Loisi Carla" class="correioImage"></p>
	</div>
</section>
-->	

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/lucia.jpg') }}" alt="Lucia Moutinho" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/8226635424466952" target="_blank"><h3 class="slidebox">Lucia Moutinho</h3></a>
		<p class="correio">luciamaria411@hotmail.com</p>
	</div>
</section>	

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/luzia.jpg') }}" alt="Luzia Tonon" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2170224269934506" target="_blank"><h3 class="slidebox">Luzia Tonon</h3></a>
		<p class="correio">luzia.tonon<img src="../uniriotecbr.gif" alt="Luzia Tonon" class="correioImage"></p>
	</div>
</section>


<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/profile.jpg') }}" alt="Manuel Canário" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4227680D8" target="_blank"><h3 class="slidebox">Manuel Canário</h3></a>
		<p class="correio">manuel.canario<img src="../uniriotecbr.gif" alt="Manuel Canário" class="correioImage"></p>
	</div>
</section>



<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/marcelo.jpg') }}" alt="Marcelo Nascimento" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/8150788816388146" target="_blank"><h3 class="slidebox">Marcelo Nascimento</h3></a>
		<p class="correio">marcelo.nascimento<img src="../uniriotecbr.gif" alt="Luzia Tonon" class="correioImage"></p>
	</div>
</section>		

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/marcio.jpg') }}" alt="Márcio Barros" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0821562324429813" target="_blank"><h3 class="slidebox">Márcio Barros</h3></a>
		<p class="correio">marcio.barros<img src="../uniriotecbr.gif" alt="Márcio Barros" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/pimentel.jpg') }}" alt="Mariano Pimentel" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/1920411639358905" target="_blank"><h3 class="slidebox">Mariano Pimentel</h3></a>
		<p class="correio">pimentel<img src="../uniriotecbr.gif" alt="Mariano Pimentel" class="correioImage"></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/maureen.jpg') }}" alt="Maureen Flores" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/3443102750113329" target="_blank"><h3 class="slidebox">Maureen Flores</h3></a>
		<p class="correio">maureenfloresv<img src="../uniriotecbr.gif" alt="Maureen Flores" class="correioImage"></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/morganna.jpg') }}" alt="Moraganna Diniz" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/1415781875529432" target="_blank"><h3 class="slidebox">Morganna Diniz</h3></a>
		<p class="correio">morganna<img src="../uniriotecbr.gif" alt="Morganna Diniz" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/pedro.jpg') }}" alt="Pedro Moura" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/6178823954090208" target="_blank"><h3 class="slidebox">Pedro Moura</h3></a>
		<p class="correio">pedro.moura<img src="../uniriotecbr.gif" alt="Pedro Moura" class="correioImage"></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/scarpelli.jpg') }}" alt="Raquel Scarpelli" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2052983954768608" target="_blank"><h3 class="slidebox">Raquel Scarpelli</h3></a>
		<p class="correio">raquel.scarpelli<img src="../uniriotecbr.gif" alt="Raquel Scarpelli" class="correioImage"></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/renata.jpg') }}" alt="Renata Araújo" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/3589012014320121" target="_blank"><h3 class="slidebox">Renata Araújo</h3></a>
		<p class="correio">renata.araujo<img src="../uniriotecbr.gif" alt="Renata Araújo" class="correioImage"></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/ronaldo.jpg') }}" alt="Ronaldo Busse" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4446533675357859" target="_blank"><h3 class="slidebox">Ronaldo Busse</h3></a>
		<p class="correio">ronaldo.busse<img src="../uniriotecbr.gif" alt="Ronaldo Busse" class="correioImage"></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/rodrigo.jpg') }}" alt="Rodrigo Santos" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/8613736894676086" target="_blank"><h3 class="slidebox">Rodrigo Santos</h3></a>
		<p class="correio">rps<img src="../uniriotecbr.gif" alt="Rodrigo Santos" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/sean.jpg') }}" alt="Sean Siqueira" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2562652838103607" target="_blank"><h3 class="slidebox">Sean Siqueira</h3></a>
		<p class="correio">sean<img src="../uniriotecbr.gif" alt="Sean Siqueira" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/sidney.jpg') }}" alt="Sidney Lucena" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7099151449971406" target="_blank"><h3 class="slidebox">Sidney Lucena</h3></a>
		<p class="correio">sidney<img src="../uniriotecbr.gif" alt="Sidney Lucena" class="correioImage"></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/simone.jpg') }}" alt="Simone Leal Ferreira" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0926018459123736" target="_blank"><h3 class="slidebox">Simone Leal Ferreira</h3></a>
		<p class="correio">simone<img src="../uniriotecbr.gif" alt="Simone Leal Ferreira" class="correioImage"></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/stevenross.jpg') }}" alt="Steven Dutt-Ross" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2970110332151340" target="_blank"><h3 class="slidebox">Steven Dutt-Ross</h3></a>
		<p class="correio">steven.ross<img src="../uniriotecbr.gif" alt="Steven Dutt-Ross" class="correioImage"></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/vania.jpg') }}" alt="Vânia Féliz Dias" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0398675521406529" target="_blank"><h3 class="slidebox">Vânia Félix Dias</h3></a>
		<p class="correio">vania<img src="../uniriotecbr.gif" alt="Vânia Félix Dias" class="correioImage"></p>
	</div>
</section>

</article>  

@endsection