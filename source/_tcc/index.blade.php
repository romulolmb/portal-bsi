@extends('_layouts.tcc.master')
@section('content')

<article> 

<h1>Trabalho de Conclusão de Curso</h1>

<p>O trabalho de conclusão de curso é desenvolvido pelo aluno com a orientação de um professor. Geralmente o TCC é elaborado no último ano antes do aluno se formar no curso. O objetivo é o aluno mostrar que tem competências e conhecimentos na área de Sistemas de Informação, que encontra-se pronto para atuar no mercado de trabalho. 

<dl>
	<dt><a href="{{ $page->baseUrl }}/tcc/tipos.html">Tipos de TCC</a></dt>
		<dd>Tipicamente, um TCC é sobre o desenvolvimento de algum sistema, ou um estudo de campo, ou sobre um tema de ponta relacionado a Sistemas de Informação.</dd>
	<dt><a href="{{ $page->baseUrl }}/tcc/processo.html">Processo</a></dt>
		<dd>Durante a disciplina PG1 (Projeto de Graduação 1) do penúltimo período, o aluno precisa acordar um tema de TCC com algum professor-orientador. O aluno desenvolve o trabalho e, na época em que for defender, precisa estar inscrito em PG2. Após a defesa, o documento do TCC deve ser revisado e entregue na secretaria para que seja publicado em nosso site. A entrega do TCC na secretaria é um dos requisitos para o aluno solicitar a colação de grau.</dd>
	<dt><a href="{{ $page->baseUrl }}/tcc/modelo.html">Modelo</a></dt>
		<dd>O documento do TCC precisa ser escrito seguindo os padrões estabelecidos no arquivo DOC fornecido como modelo.</dd>
	<dt><a href="{{ $page->baseUrl }}/tcc/projetos.html">Projetos para TCCs</a></dt>
		<dd>Lista de projetos sugeridos pelos professores para os alunos desenvolverem TCCs. A lista de sugestões de projetos serve como um ponto de partida para encontrar um professor-orientador e acordar um trabalho que seja interessante para ambos, aluno e orientador. Os professores também estão abertos para projetos relevantes e inovadores.</dd>
	<dt><a href="{{ $page->baseUrl }}/tcc/publicacoes.html">Publicações</a></dt>
		<dd>Os trabalhos já defendidos são publicados em nosso site para servirem de exemplos do que se espera de um TCC e de possíveis temas, além de constituem uma boa fonte de informação sobre tópicos específicos e atualizados na área de Sistemas de Informação. Uma dica: se você gostar de algum TCC, procure o professor-orientador daquele TCC e informe-se da possibilidade de dar continuidade ao trabalho ou elaborar um novo projeto seguindo a mesma linha.</dd>
	<dt><a href="{{ $page->baseUrl }}/tcc/agenda.html">Próximas Defesas</a></dt>
		<dd>Agenda das próximas defesas de TCC. Assistir uma defesa é uma oportunidade para qualquer aluno aprender sobre um tema atual na área de Sistemas de Informação. Para os alunos em PG1, é uma obrigação assistir ao menos 3 defesas, pois é uma forma dele entender melhor o que se espera de um TCC e se preparar melhor para a sua futura defesa.</dd>
</dl>

<p>É importante que aluno e professor-orientador tenham interesse no trabalho em desenvolvimento, pois o TCC requer o engajamento de ambos. Ao fazer o TCC, muitos alunos se enrolam por: já estar trabalhando e não ter tempo (ou interesse?) para se dedicar ao projeto do TCC, ter que aprender novas tecnologias, ter que estudar um tema em profundidade, ter que redigir uma monografia sobre o assunto estudado, dentre outros motivos. Em vez de encarar o TCC como uma dificuldade, encare-o como um desafio, uma oportunidade para sair de sua zona de conforto e aprender coisas novas!</p>


</article>  

@endsection