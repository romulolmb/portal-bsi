@extends('_layouts.institucional.master')
@section('styles')
<link rel="stylesheet" href="{{ $page->baseUrl}}/css/fotos.css">
@endsection
@section('content')

<article>

<h1>EIA - Escola de Informática Aplicada</h1>

<section id="eia">
<p><img src="{{ $page->adiciona_imagem('institucional/eia.png') }}">A Escola de Informática Aplicada (EIA) 
foi criada pela <a href="{{ $page->adiciona_arquivo('institucional/resolucao_2098.pdf') }}" target="_blank">Resolução UNIRIO Número 2.098</a> de 14 de setembro de 1999,
com finalidade de prover estrutura organizacional para o curso de <a href="{{$page->baseUrl}}/bsi/index.html">Bacharelado em Sistemas de Informação (BSI)</a>. Essa escola tem por objetivo o ensino de graduação e pós-graduação, a pesquisa e a extensão universitária nas áreas das Tecnologias da Informação e da Comunicação, a serem buscados através de:</p>
</section>

<ul class="clear">
<li> Incentivo ao aprendizado do conhecimento em Informática e de suas relações interdisciplinares;
<li> Formação e aperfeiçoamento de profissionais de Informática capazes de atender às demandas institucionais e sociais, garantindo ao mesmo tempo a elevação de seu nível de qualidade;
<li> Estímulo ao desenvolvimento da pesquisa em Informática como instrumento de desenvolvimento social;
<li> Implementação de políticas de integração social e programas de modernização e democratização do estado brasileiro, no que tange às Tecnologias da Informação e da Comunicação.

<section>
<section class="boxgrid caption">
        <img src="{{ $page->adiciona_imagem('professores/fotos/morganna.jpg') }}" alt="Moraganna Diniz" class="photo" >
        <div class="cover boxcaption" style="top: 125px;">
            <a href="http://lattes.cnpq.br/1415781875529432" target="_blank"><h3 class="slidebox">Morganna Diniz</h3></a>
            <p class="correio"><a href="mailto:morganna@uniriotec.br">morganna@uniriotec.br</a></p>
        </div>
</section>

<section class="boxgrid caption">
	<<img src="{{ $page->adiciona_imagem('professores/fotos/geiza.jpg') }}" alt="Geiza Hamazaki" class="photo">
	<div class="cover boxcaption" style="top: 125px;">
		<a href="http://lattes.cnpq.br/2100358669537195" target="_blank"><h3 class="slidebox">Geiza Hamazaki</h3></a>
		<p class="correio"><a href="mailto:geiza.hamazaki@uniriotec.br">geiza.hamazaki@uniriotec.br</a></p>
	</div>
</section>

<section class="muralEIA">
<br>
<p align="left">A atual diretora da escola é a <br> Prof<sup>a</sup>. Morganna Diniz <br> 
e a atual coordenadora do BSI é a <br>Prof<sup>a</sup>. Geiza Hamazaki</p>
</section>

</ul>
</section>

</article>

@endsection
@section('scripts')
<script type="text/javascript" src="{{ $page->adiciona_js('jquery.min.js') }}?v={{ mt_rand() }}"></script>
<script type="text/javascript" src="{{ $page->adiciona_js('professores/slidebox.js') }}?v={{ mt_rand() }}"></script>
@endsection