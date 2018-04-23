<aside>
	<ul class="menu">
		<li class="{{ $page->aside_ativo('disciplinas/index','disciplinas') }}"><a href="{{ $page->baseUrl }}/disciplinas">Disciplinas</a></li>
		<li class="{{ $page->aside_ativo('obrigatorias','disciplinas') }}"><a href="{{ $page->baseUrl }}/disciplinas/obrigatorias.html">Obrigat&oacute;rias</a></li>
		<li class="{{ $page->aside_ativo('eletivas','disciplinas') }}"><a href="{{ $page->baseUrl }}/disciplinas/eletivas.html">Eletivas</a></li>
		<li class="{{ $page->aside_ativo('optativas','disciplinas') }}"><a href="{{ $page->baseUrl }}/disciplinas/optativas.html">Optativas</a></li>
		<li class="{{ $page->aside_ativo('aces','disciplinas') }}"><a href="{{ $page->baseUrl }}/disciplinas/aces.html">Atividades Complementares</a></li>
		<li class="{{ $page->aside_ativo('horario','disciplinas') }}"><a href="{{ $page->baseUrl }}/disciplinas/horario.html">Hor&aacute;rio</a></li>
	</ul>

</aside>