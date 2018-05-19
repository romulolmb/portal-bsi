@extends('_layouts.secretaria.master')
@section('styles')
{{-- <link href="../foto.css" rel="stylesheet" type="text/css">  --}}
<link rel="stylesheet" href="{{ $page->baseUrl}}/css/fotos.css">
@endsection
@section('content')

<article> 

    <h1>Secretaria</h1>
    
    <p>A secretaria é onde os alunos dão entrada a todos os processos relacionados ao curso: matrícula em disciplinas, pedido de histórico escolar, declarações etc.</p>
    
    <section class="boxgrid caption">
        <img src="{{ $page->adiciona_imagem('secretaria/fotos/douglas.jpg') }}" alt="Douglas Brito" class="photo" >
        <div class="cover boxcaption" style="top: 125px;">
            <a href="" target="_blank"><h3 class="slidebox">Douglas Brito</h3></a>
            <p class="correio"><a href="mailto:douglas.brito@uniriotec.br">douglas.brito@uniriotec.br</a></p>
        </div>
    </section>
    <p>Horário de Funcionamento: 14h às 20h<br>
    Telefone: (21)3873-6400<br>
    Falar com Douglas Brito (<a href="mailto:douglas.brito@uniriotec.br">douglas.brito@uniriotec.br</a>)</p>
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
</article>  

@endsection
@section('scripts')
<script type="text/javascript" src="{{ $page->adiciona_js('jquery.min.js') }}?v={{ mt_rand() }}"></script>
<script type="text/javascript" src="{{ $page->adiciona_js('professores/slidebox.js') }}?v={{ mt_rand() }}"></script>
@endsection