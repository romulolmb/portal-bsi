@extends('_layouts.tcc.master')
@section('content')
<article> 

	<h1>Modelo de TCC</h1>

	<p>A monografia é o principal resultado de um projeto de conclusão de curso. O aluno deve conversar com seu orientador sobre o conteúdo e a extensão da monografia, mas geralmente o documento contém cerca de 50 páginas e é estruturado em 5 capítulos:</p>

	<ol>
		<li>Introdução (justificativa, objetivo(s), organização do texto)</li>
		<li>Revisão bibliográfica</li>
		<li>Proposta de trabalho</li>
		<li>Apresentação de resultados</li>
		<li>Conclusão (contribuições, trabalhos futuros)</li>
	</ol>

	<p>Os capítulos de introdução e conclusão tendem a ser pequenos, com cerca de 2 a 5 páginas cada, enquanto os capítulos centrais tendem a ter de 10 a 15 páginas cada. Esses são os valores esperados, mas a quantidade de páginas de cada capítulo depende do conteúdo e da quantidade de informação a ser apresentada. O texto é do gênero "redação científica", devendo seguir a norma culta da língua e devendo citar e referenciar textos de acordo com as normas ABNT. Os padrões de formatação do texto estão neste documento online: &lt;<a href="{{ $page->adiciona_arquivo('tcc/modeloTCCdoBSIUNIRIO.docx') }}">modeloTCCdoBSIUNIRIO.docx</a>&gt;</p>


</article>  

@endsection