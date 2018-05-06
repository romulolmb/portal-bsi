<aside>
	<ul class="menu">
		<li class="{{ $page->aside_ativo('alunos/index','alunos') }}"><a href="{{ $page->baseUrl }}/alunos">Alunos</a></li>
		<li class="{{ $page->aside_ativo('matriculados','alunos') }}"><a href="{{ $page->baseUrl }}/alunos/matriculados.html">Matriculados</a></li>
		<li class="{{ $page->aside_ativo('turmas','alunos') }}"><a href="{{ $page->baseUrl }}/alunos/turmas.html">Turmas</a></li>
		<li class="{{ $page->aside_ativo('portalalunos','alunos') }}"><a href="{{ $page->baseUrl }}/alunos/portalalunos.html">Portal do Aluno</a></li>
		<li class="{{ $page->aside_ativo('dasi','alunos') }}"><a href="{{ $page->baseUrl }}/alunos/dasi.html">Diretório Acadêmico</a></li>
		<li class="{{ $page->aside_ativo('carteirinha','alunos') }}"><a href="{{ $page->baseUrl }}/alunos/carteirinha.html">Carteirinha de Estudante</a></li>
		<li class="{{ $page->aside_ativo('calendario','alunos') }}"><a href="{{ $page->baseUrl }}/alunos/calendario.html">Calendário Acadêmico</a></li>
		<li class="{{ $page->aside_ativo('enade','alunos') }}"><a href="{{ $page->baseUrl }}/alunos/enade.html">ENADE</a></li>
	</ul>
</aside>