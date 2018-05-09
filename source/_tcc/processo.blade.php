@extends('_layouts.tcc.master')
@section('content')
<article> 

	<h1>Processos</h1>

	<h3>Processo do TCC</h3><br>
	<p>No curso existem duas disciplinas relacionadas ao trabalho de conclusão: Projeto de Graduação I e Projeto de Graduação II. Na primeira, o aluno acorda com algum professor-orientador qual será o trabalho a ser desenvolvido. Ao final de PG1, o aluno apresenta um relatório apontando: o orientador do TCC, o tema e o tipo de TCC; o projeto que será executado; e um cronograma das atividades a serem realizadas até a defesa do TCC. O aluno desenvolve o trabalho acompanhado por seu orientador. É na disciplina PG2 que o aluno defende o seu projeto. Fica a dica: só se inscreva em PG2 se você e seu orientador tiverem certeza de que o TCC será defendido naquele período, pois se não for defendido você será reprovado na disciplina.</p>

	<p>A defesa é o momento em que o aluno apresenta seu projeto de graduação para uma banca composta por seu orientador e um outro professor (um ou mais), sendo ao menos um deles obrigatoriamente do Departamento de Informática Aplicada da UNIRIO. 
	Orientador e aluno combinam a composição da banca, convidam os professores selecionados e com eles combinam a data mais adequada para a defesa. Ambos, aluno e orientador, assinam o documento de agendamento da defesa de TCC, que deve ser entregue na secretaria com 2 semanas de antecedência para que a defesa seja divulgada para todos os alunos e professores do curso. O texto do TCC deve ser enviado para a banca também 2 semanas antes da defesa. A data limite para a defesa é no término das atividades acadêmicas de cada semestre (data que consta no calendário acadêmico da UNIRIO).</p> 

	<p>Durante a defesa, o aluno tem de 20 a 30 minutos para apresentar seu TCC. Em seguida, o aluno é arguido por cada professor da banca e deve responder às perguntas recebidas. A banca fará comentários baseados no texto da monografia e na apresentação que acabou de assistir. Concluída a fase de questionamentos, a banca se reúne para deliberar sobre o TCC. A nota atribuída pela banca ao trabalho de conclusão é registrada na disciplina PG2.</p>

	<p><a href="{{ $page->adiciona_arquivo('tcc/NormasTCC.pdf') }}" target="_blank">NORMAS PARA A ELABORAÇÃO E A APRESENTAÇÃO DO TCC</a></p>
	<p><a href="{{ $page->adiciona_arquivo('tcc/SolicitacaoDefesaTCC.pdf') }}" target="_blank">SOLICITAÇÃO DE DEFESA DE TCC</a></p>
	<p><a href="{{ $page->adiciona_arquivo('tcc/ata_tcc.pdf') }}" target="_blank">ATA DE DEFESA DE PROJETO DE GRADUAÇÃO</a></p>

</article>  

@endsection