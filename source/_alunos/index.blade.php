@extends('_layouts.alunos.master')
@section('content')

<article>

<h1>Alunos</h1>

<p>Informações importantes para os alunos que estão ingressando no curso.</p>

<dl>
	<dt><a href="{{ $page->baseUrl }}/alunos/matriculados.html">Matriculados</a></dt>
	<dd>Lista dos alunos matriculados no curso</dd>
	<dt><a href="{{ $page->baseUrl }}/alunos/turmas.html">Turmas</a></dt>
	<dd>Cada turma listada de acordo com o ano de ingresso e com suas respectivas informações.</dd>
	<dt><a href="{{ $page->baseUrl }}/alunos/portalalunos.html">Portal do Aluno</a></dt>
	<dd>Inscrições em disciplinas, exclusão de disciplinas, histórico escolar e outras tarefas que são efetudas no portal do aluno.</dd>
	<dt><a href="{{ $page->baseUrl }}/alunos/dasi.html">Diretório Acadêmico</a></dt>
	<dd>A função do Diretório Acadêmico na faculdade e a sua ligação com os estudantes.</dd>
	<dt><a href="{{ $page->baseUrl }}/alunos/carteirinha.html">Carteirinha de Estudante</a></dt>
	<dd>Processo para retirar a carteira estudantil.</dd>
	<dt><a href="{{ $page->baseUrl }}/alunos/calendario.html">Calendário Acadêmico</a></dt>
	<dd>Datas importantes no calendário da UNIRIO.</dd>
	<dt><a href="{{ $page->baseUrl }}/alunos/enade.html">ENADE</a></dt>
	<dd>Exame obrigatório para a emissão do histórico escolar no qual avalia o rendimento dos alunos de graduação em relação aos conteúdos programáticos dos cursos em que estão matriculados.</dd>
</dl>

</article>  

@endsection