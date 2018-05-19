@extends('_layouts.professores.master')
@section('styles')
<link rel="stylesheet" href="{{ $page->baseUrl}}/css/fotos.css">
@endsection
@section('content')

<article> 
<p id="info">O corpo docente do curso BSI é composto por professores altamente qualificados, quase todos doutores. Clique no professor e consulte seu currículo.<br>&nbsp;</p>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/adriana.jpg') }}" alt="Adriana Alvim" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<h3 class="slidebox"><a href="http://lattes.cnpq.br/1841338064901299" target="_blank">Adriana Alvim</a></h3>
		<p class="correio"><a href="mailto:adriana@uniriotec.br">adriana@uniriotec.br</a></p>
	</div>
	</a>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/adrianapimenta.jpg') }}" alt="Adriana Pimenta" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<h3 class="slidebox"><a href="http://lattes.cnpq.br/1166577932438963" target="_blank">Adriana Pimenta</a></h3>
		<p class="correio"><a href="mailto:adriana.pimenta@uniriotec.br">adriana.pimenta@uniriotec.br</a></p>
	</div>
	</a>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/andreatta.jpg') }}" alt="Alexandre Andreatta" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/5998143228852295" target="_blank"><h3 class="slidebox">Alexandre Andreatta</h3></a>
		<p class="correio"><a href="mailto:andreatt@uniriotec.br">andreatt@uniriotec.br</a></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/alexandrecorrea.jpg') }}" alt="Alexandre Correa" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2953646352903735" target="_blank"><h3 class="slidebox">Alexandre Correa</h3></a>
		<p class="correio"><a href="mailto:alexandre.correa@uniriotec.br">alexandre.correa@uniriotec.br</a></p>
	</div>
</section>
-->
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/alexandresilva.jpg') }}" alt="Alexandre Silva" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4763659817918925" target="_blank"><h3 class="slidebox">Alexandre Silva</h3></a>
		<p class="correio"><a href="mailto:alexandre.silva@uniriotec.br">alexandre.silva@uniriotec.br</a></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/tanaka.jpg') }}" alt="Asterio Tanaka" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/8934031838766350" target="_blank"><h3 class="slidebox">Asterio Tanaka</h3></a>
		<p class="correio"><a href="mailto:tanaka@uniriotec.br">tanaka@uniriotec.br</a></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/angelo.jpg') }}" alt="Angelo Ciarlini" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4612726434879544" target="_blank"><h3 class="slidebox">Angelo Ciarlini</h3></a>
		<p class="correio"><a href="mailto:angelo.ciarlini@uniriotec.br">angelo.ciarlini@uniriotec.br</a></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/benur.jpg') }}" alt="Benur Girardi" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/9097100603040676" target="_blank"><h3 class="slidebox">Benur Girardi</h3></a>
		<p class="correio"><a href="mailto:girardi@uniriotec.br">girardi@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/malajovich.jpg') }}" alt="Beatriz Malajovich" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7250793021119630" target="_blank"><h3 class="slidebox">Beatriz Malajovich</h3></a>
		<p class="correio"><a href="mailto:malajovich@uniriotec.br">malajovich@uniriotec.br</a></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/brunosimoes.jpg') }}" alt="Bruno Simões" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0985291000032685" target="_blank"><h3 class="slidebox">Bruno Simões</h3></a>
		<p class="correio"><a href="mailto:bruno.simoes@uniriotec.br">bruno.simoes@uniriotec.br</a></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/beto.jpg') }}" alt="Carlos Alberto Campos" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/8020803376969953" target="_blank"><h3 class="slidebox">Carlos Campos</h3></a>
		<p class="correio"><a href="mailto:beto@uniriotec.br">beto@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/mello.gif') }}" alt="Carlos Eduardo Mello" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2417341890473612" target="_blank"><h3 class="slidebox">Carlos Eduardo Mello</h3></a>
		<p class="correio"><a href="mailto:mello@uniriotec.br">mello@uniriotec.br</a></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/cecilia.gif') }}" alt="Cecilia Saraiva" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4820702492139261" target="_blank"><h3 class="slidebox">Cecilia Saraiva</h3></a>
		<p class="correio"><a href="mailto:cecilia.saraiva@uniriotec.br">cecilia.saraiva@uniriotec.br</a></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/capelli.jpg') }}" alt="Claudia Cappelli" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4930762936357558" target="_blank"><h3 class="slidebox">Claudia Cappelli</h3></a>
		<p class="correio"><a href="mailto:claudia.cappelli@uniriotec.br">claudia.cappelli@uniriotec.br</a></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/celso.jpg') }}" alt="Celso Campos" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7190321020308770" target="_blank"><h3 class="slidebox">Celso Campos</h3></a>
		<p class="correio"><a href="mailto:celso.campos@uniriotec.br">celso.campos@uniriotec.br</a></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/cristiane.jpg') }}" alt="Cristiane de Melo" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/6183375000382666" target="_blank"><h3 class="slidebox">Cristiane de Melo</h3></a>
		<p class="correio"><a href="mailto:cristiane.mello@uniriotec.br">cristiane.mello@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/cristina.jpg') }}" alt="Cristina Garcia" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4781889E0" target="_blank"><h3 class="slidebox">Cristina Bicharra</h3></a>
		<p class="correio"><a href="mailto:cristina.bicharra@uniriotec.br">cristina.bicharra@uniriotec.br</a></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/fabio.jpg') }}" alt="Fabio Simas" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/1619536438180209" target="_blank"><h3 class="slidebox">Fabio Simas</h3></a>
		<p class="correio"><a href="mailto:fabio.simas@uniriotec.br">fabio.simas@uniriotec.br</a></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/profile.jpg') }}" alt="Felipe Ribeiro" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4481222D9" target="_blank"><h3 class="slidebox">Felipe Ribeiro</h3></a>
		<p class="correio"><a href="mailto:felipe.ribeiro@uniriotec.br">felipe.ribeiro@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/profile.jpg') }}" alt="Fernanda Baião" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/5068302552861597" target="_blank"><h3 class="slidebox">Fernanda Baião</h3></a>
		<p class="correio"><a href="mailto:fernanda.baiao@uniriotec.br">fernanda.baiao@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/flavia.jpg') }}" alt="Flávia Santoro" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/5377746284077362" target="_blank"><h3 class="slidebox">Flávia Santoro</h3></a>
		<p class="correio"><a href="mailto:flavia.santoro@uniriotec.br">flavia.santoro@uniriotec.br</a></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/gladson.jpg') }}" alt="Glasdson Antunes" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/6725560105680636" target="_blank"><h3 class="slidebox">Glasdson Antunes</h3></a>
		<p class="correio"><a href="mailto:gladson.antunes@uniriotec.br">gladson.antunes@uniriotec.br</a></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/gleison.jpg') }}" alt="Gleison Santos" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4616202382103338" target="_blank"><h3 class="slidebox">Gleison Santos</h3></a>
		<p class="correio"><a href="mailto:gleison.santos@uniriotec.br">gleison.santos@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/geiza.jpg') }}" alt="Geiza Hamazaki" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2100358669537195" target="_blank"><h3 class="slidebox">Geiza Hamazaki</h3></a>
		<p class="correio"><a href="mailto:geiza.hamazaki@uniriotec.br">geiza.hamazaki@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/profile.jpg') }}" alt="Helisson Coutinho" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/6452434384067273" target="_blank"><h3 class="slidebox">Helisson Coutinho</h3></a>
		<p class="correio"><a href="mailto:helisson@uniriotec.br">helisson@uniriotec.br</a></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/calneto.jpg') }}" alt="José Cal Neto" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2637672868100554" target="_blank"><h3 class="slidebox">José Cal Neto</h3></a>
		<p class="correio"><a href="mailto:jose.calneto@uniriotec.br">jose.calneto@uniriotec.br</a></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/jefferson.jpg') }}" alt="Jefferson Elbert Simões" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4237922U4" target="_blank">
                   <h3 class="slidebox">Jefferson Simões</h3></a>
		<p class="correio"><a href="mailto:jefferson.simoes@uniriotec.br">jefferson.simoes@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/cereja.jpg') }}" alt="José Ricardo Cereja" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7653288098116734" target="_blank"><h3 class="slidebox">José Ricardo Cereja</h3></a>
		<p class="correio"><a href="mailto:ricardo.cereja@uniriotec.br">ricardo.cereja@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/kate.jpg') }}" alt="Kate Revoredo" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0814717344017544" target="_blank"><h3 class="slidebox">Kate Revoredo</h3></a>
		<p class="correio"><a href="mailto:katerevoredo@uniriotec.br">katerevoredo@uniriotec.br</a></p>
	</div>
</section>


<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/azevedo.jpg') }}" alt="Leonardo Azevedo" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7214791464543522" target="_blank"><h3 class="slidebox">Leonardo Azevedo</h3></a>
		<p class="correio"><a href="mailto:azevedo@uniriotec.br">azevedo@uniriotec.br</a></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/leonardosilvares.jpg') }}" alt="Leonardo Silvares" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7680212403415186" target="_blank"><h3 class="slidebox">Leonardo Silvares</h3></a>
		<p class="correio"><a href="mailto:leo.silvares@uniriotec.br">leo.silvares@uniriotec.br</a></p>
	</div>
</section>			
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/leorocha.jpg') }}" alt="Leonardo Rocha" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0780057318850413" target="_blank"><h3 class="slidebox">Leonardo Rocha</h3></a>
		<p class="correio"><a href="mailto:leonardo@uniriotec.br">leonardo@uniriotec.br</a></p>
	</div>
</section>	

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/loisi.jpg') }}" alt="Loisi Carla" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0652694567478876" target="_blank"><h3 class="slidebox">Loisi Carla</h3></a>
		<p class="correio"><a href="mailto:loisi@uniriotec.br">loisi@uniriotec.br</a></p>
	</div>
</section>
-->	

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/lucia.jpg') }}" alt="Lucia Moutinho" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/8226635424466952" target="_blank"><h3 class="slidebox">Lucia Moutinho</h3></a>
		<p class="correio"><a href="mailto:luciamaria411@hotmail.com">luciamaria411@hotmail.com</a></p>
	</div>
</section>	

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/luzia.jpg') }}" alt="Luzia Tonon" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2170224269934506" target="_blank"><h3 class="slidebox">Luzia Tonon</h3></a>
		<p class="correio"><a href="mailto:luzia.tonon@uniriotec.br">luzia.tonon@uniriotec.br</a></p>
	</div>
</section>


<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/profile.jpg') }}" alt="Manuel Canário" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4227680D8" target="_blank"><h3 class="slidebox">Manuel Canário</h3></a>
		<p class="correio"><a href="mailto:manuel.canario@uniriotec.br">manuel.canario@uniriotec.br</a></p>
	</div>
</section>



<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/marcelo.jpg') }}" alt="Marcelo Nascimento" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/8150788816388146" target="_blank"><h3 class="slidebox">Marcelo Nascimento</h3></a>
		<p class="correio"><a href="mailto:marcelo.nascimento@uniriotec.br">marcelo.nascimento@uniriotec.br</a></p>
	</div>
</section>		

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/marcio.jpg') }}" alt="Márcio Barros" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0821562324429813" target="_blank"><h3 class="slidebox">Márcio Barros</h3></a>
		<p class="correio"><a href="mailto:marcio.barros@uniriotec.br">marcio.barros@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/pimentel.jpg') }}" alt="Mariano Pimentel" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/1920411639358905" target="_blank"><h3 class="slidebox">Mariano Pimentel</h3></a>
		<p class="correio"><a href="mailto:pimentel@uniriotec.br">pimentel@uniriotec.br</a></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/maureen.jpg') }}" alt="Maureen Flores" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/3443102750113329" target="_blank"><h3 class="slidebox">Maureen Flores</h3></a>
		<p class="correio"><a href="mailto:maureenfloresv@uniriotec.br">maureenfloresv@uniriotec.br</a></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/morganna.jpg') }}" alt="Moraganna Diniz" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/1415781875529432" target="_blank"><h3 class="slidebox">Morganna Diniz</h3></a>
		<p class="correio"><a href="mailto:morganna@uniriotec.br">morganna@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/pedro.jpg') }}" alt="Pedro Moura" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/6178823954090208" target="_blank"><h3 class="slidebox">Pedro Moura</h3></a>
		<p class="correio"><a href="mailto:pedro.moura@uniriotec.br">pedro.moura@uniriotec.br</a></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/scarpelli.jpg') }}" alt="Raquel Scarpelli" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2052983954768608" target="_blank"><h3 class="slidebox">Raquel Scarpelli</h3></a>
		<p class="correio"><a href="mailto:raquel.scarpelli@uniriotec.br">raquel.scarpelli@uniriotec.br</a></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/renata.jpg') }}" alt="Renata Araújo" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/3589012014320121" target="_blank"><h3 class="slidebox">Renata Araújo</h3></a>
		<p class="correio"><a href="mailto:renata.araujo@uniriotec.br">renata.araujo@uniriotec.br</a></p>
	</div>
</section>

<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/ronaldo.jpg') }}" alt="Ronaldo Busse" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/4446533675357859" target="_blank"><h3 class="slidebox">Ronaldo Busse</h3></a>
		<p class="correio"><a href="mailto:ronaldo.busse@uniriotec.br">ronaldo.busse@uniriotec.br</a></p>
	</div>
</section>
-->

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/rodrigo.jpg') }}" alt="Rodrigo Santos" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/8613736894676086" target="_blank"><h3 class="slidebox">Rodrigo Santos</h3></a>
		<p class="correio"><a href="mailto:rps@uniriotec.br">rps@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/sean.jpg') }}" alt="Sean Siqueira" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2562652838103607" target="_blank"><h3 class="slidebox">Sean Siqueira</h3></a>
		<p class="correio"><a href="mailto:sean@uniriotec.br">sean@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/sidney.jpg') }}" alt="Sidney Lucena" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/7099151449971406" target="_blank"><h3 class="slidebox">Sidney Lucena</h3></a>
		<p class="correio"><a href="mailto:sidney@uniriotec.br">sidney@uniriotec.br</a></p>
	</div>
</section>

<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/simone.jpg') }}" alt="Simone Leal Ferreira" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0926018459123736" target="_blank"><h3 class="slidebox">Simone Leal Ferreira</h3></a>
		<p class="correio"><a href="mailto:simone@uniriotec.br">simone@uniriotec.br</a></p>
	</div>
</section>
<!--
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/stevenross.jpg') }}" alt="Steven Dutt-Ross" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2970110332151340" target="_blank"><h3 class="slidebox">Steven Dutt-Ross</h3></a>
		<p class="correio"><a href="mailto:steven.ross@uniriotec.br">steven.ross@uniriotec.br</a></p>
	</div>
</section>
-->
<section class="boxgrid caption">
	<img src="{{ $page->adiciona_imagem('professores/fotos/vania.jpg') }}" alt="Vânia Féliz Dias" class="photo" >
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/0398675521406529" target="_blank"><h3 class="slidebox">Vânia Félix Dias</h3></a>
		<p class="correio"><a href="mailto:vania@uniriotec.br">vania@uniriotec.br</a></p>
	</div>
</section>

</article>  

@endsection
@section('scripts')
<script type="text/javascript" src="{{ $page->adiciona_js('jquery.min.js') }}?v={{ mt_rand() }}"></script>
<script type="text/javascript" src="{{ $page->adiciona_js('professores/slidebox.js') }}?v={{ mt_rand() }}"></script>
@endsection