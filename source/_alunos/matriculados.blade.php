@extends('_layouts.alunos.master')
@section('content')

<article>
<h1>Matriculados</h1>

<p>
<a href="{{ $page->adiciona_arquivo('alunos/matriculas/Alunos_SI_2018.1.pdf') }}"><img src="{{ $page->adiciona_imagem('alunos/pdf.png') }}">Lista dos alunos matriculados em 2018.1</a><br>
<a href="{{ $page->adiciona_arquivo('alunos/matriculas/Alunos_SI_2017.2.pdf') }}"><img src="{{ $page->adiciona_imagem('alunos/pdf.png') }}">Lista dos alunos matriculados em 2017.2</a><br>
<a href="{{ $page->adiciona_arquivo('alunos/matriculas/Alunos_SI_2017.1.pdf') }}"><img src="{{ $page->adiciona_imagem('alunos/pdf.png') }}">Lista dos alunos matriculados em 2017.1</a><br>
<a href="{{ $page->adiciona_arquivo('alunos/matriculas/Alunos_SI_2016.2.pdf') }}"><img src="{{ $page->adiciona_imagem('alunos/pdf.png') }}">Lista dos alunos matriculados em 2016.2</a><br>
<a href="{{ $page->adiciona_arquivo('alunos/matriculas/Alunos_SI_2016.1.pdf') }}"><img src="{{ $page->adiciona_imagem('alunos/pdf.png') }}">Lista dos alunos matriculados em 2016.1</a>
</p>

</article>  

@endsection