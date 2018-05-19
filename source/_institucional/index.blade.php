@extends('_layouts.institucional.master')
@section('content')

<article> 

    <h1>Institucional</h1>
    
    <p>O Bacharelado em Sistemas de Informação é um curso da Escola de Informática Aplicada (EIA), que é uma unidade acadêmica do Centro de Ciências Exatas e Tecnologia (CCET) da Universidade Federal do Estado do Rio de Janeiro (UNIRIO).</p>
    
    <p><img src="{{ $page->adiciona_imagem('institucional/organograma.png') }}" alt="organograma" border="0" width="563" height="337" usemap="#organogramamap">
    <map name="organogramamap">
    <area shape="rect" coords="225,6,340,54" alt="UNIRIO" href="{{$page->baseUrl}}/institucional/unirio.html" />
    <area shape="rect" coords="219,283,346,332" alt="BSI" href="{{$page->baseUrl}}/bsi/index.html" />
    <area shape="rect" coords="232,92,333,151" alt="CCET" href="{{$page->baseUrl}}/institucional/ccet.html" />
    <area shape="rect" coords="225,192,340,243" alt="EIA" href="{{$page->baseUrl}}/institucional/eia.html" />
    </map>
    </p> 
    
    <p>Vale lembrar que também temos o curso <a href="http://www2.uniriotec.br/ppgi" target="_blank">PPGI (Programa de Pós-Graduação em Informática)</a>, que é voltado para os que já terminaram a graduação e desejam cursar um Mestrado em Informática com ênfase em Sistemas de Informação.</p>
    
</article>  

@endsection