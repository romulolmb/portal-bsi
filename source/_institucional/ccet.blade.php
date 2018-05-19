@extends('_layouts.institucional.master')
@section('styles')
<link rel="stylesheet" href="{{ $page->baseUrl}}/css/fotos.css">
@endsection
@section('content')

<article> 

        <h1>CCET - Centro de Ciências Exatas e Tecnologia</h1>
        
        <p>O curso <a href="{{$page->baseUrl}}/bsi/index.html">BSI</a> é um dos cursos do Centro de Ciências Exatas e Tecnologia (CCET). Um centro agrega os cursos de uma mesma área, e contém as estruturas administrativas para o funcionamento desses cursos.</p>
        
        <p>O CCET tem como missão:</p>
        <blockquote>"Promover o desenvolvimento científico e tecnológico com inovação e compromisso social, na sociedade em geral e na UNIRIO em particular, através de atuação inter e multidisciplinar em ensino, pesquisa e extensão nas áreas de Matemática, Estatística e Informática."
        </blockquote>
        
        <p>&nbsp;</p>
        
        <section>
        <p>Existem dois importantes núcleos na estrutura do CCET.</p>
        
        <blockquote>
        
        <b>NAPE (Núcleo de Assuntos Pedagógicos e Educacionais)</b> - visa auxiliar na organização escolar e curricular dos cursos 
        pertencentes ao CCET, bem como realizar o acompanhamento das situações acadêmicas dos discentes do centro.
        
        <section class="boxgrid2 caption">
            <img src="{{$page->adiciona_imagem('institucional/nape.jpg')}}" alt="Andreza, Flávia e Alessandra" class="photo2" >
            <div class="cover boxcaption" style="top: 125px;">
                <a href="https://www.facebook.com/napccet/" target="_blank"><h3 class="slidebox2">NAPE</h3></a>
                <p class="correio"><a href="mailto:nape.ccet@uniriotec.br">nape.ccet@uniriotec.br</a></p>
            </div>
        </section>
        <p>&nbsp;&nbsp;&nbsp; Andreza, Flávia e Alessandra</p>
        
        
        <section>
        <b>NTI (Núcleo de Tecnologia da Informação)</b> - é responsável pela infraestrutura do CCET.
        <ul>
        <li>Gerenciamento dos laboratórios de informática (atualização de softwares, manutenção de hardwares, etc);
        <li>Gerenciamento dos emails UNIRIOTEC (criação, redefinição de senhas, etc);
        <li>Gerenciamento da plataforma Moodle (atualização, criação de contas e disciplinas, etc).
        </ul>
        </section>
        
        <section class="boxgrid2 caption">
            <img src="{{$page->adiciona_imagem('institucional/nti.png')}}" alt="NTI" class="photo2" >
            <div class="cover boxcaption" style="top: 125px;">
                <h3 class="slidebox2">NTI</h3>
                <p class="correio"><a href="mailto:suporte@uniriotec.br">suporte@uniriotec.br</a></p>
            </div>
        </section>
        
        
        </blockquote>
        
        <p>&nbsp;</p>
        
        <section class="boxgrid caption">
                <img src="{{ $page->adiciona_imagem('professores/fotos/sidney.jpg') }}" alt="Sidney Lucena" class="photo" >
                <div class="cover boxcaption" style="top: 125px;">
                    <a href="http://lattes.cnpq.br/7099151449971406" target="_blank"><h3 class="slidebox">Sidney Lucena</h3></a>
                    <p class="correio"><a href="mailto:sidney@uniriotec.br">sidney@uniriotec.br</a></p>
                </div>
        </section>
        
        <section>
        <br><br>
        <p>O atual decano do CCET é o Prof. Sidney Lucena<br>
        Para mais informações, consulte o <a href="http://www3.uniriotec.br/UNIRIO-CCET" target="_blank">site do CCET</a></p>
        </section>
        
        </article>  

@endsection
@section('scripts')
<script type="text/javascript" src="{{ $page->adiciona_js('jquery.min.js') }}?v={{ mt_rand() }}"></script>
<script type="text/javascript" src="{{ $page->adiciona_js('professores/slidebox.js') }}?v={{ mt_rand() }}"></script>
@endsection