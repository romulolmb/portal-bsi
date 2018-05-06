@extends('_layouts.alunos.master')
@section('styles')
<link rel="stylesheet" href="/css/alunos/calendario.css">
@endsection
@section('content')

<article>
<h1>Calendário Acadêmico</h1>

{{-- <script language="JavaScript">gera_calendario();</script> --}}
<div id="calendario">
</div>
<p>&nbsp;</p>
<p>O calendário acadêmico 2018 da UNIRIO está na <a href="{{ $page->adiciona_arquivo('alunos/resolucao_4902.pdf') }}" target="_blank">Resolução N&ordm; 4.902</a> de 12 de dezembro de 2017.</p>

</article>

@endsection
@section('scripts')
<script type="text/javascript" src="{{ $page->adiciona_js('alunos/main.js') }}?v={{ mt_rand() }}"></script>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) { 
  		gera_calendario();
	});
</script>
@endsection