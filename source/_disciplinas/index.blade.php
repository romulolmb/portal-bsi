@extends('_layouts.disciplinas.master')
@section('content')



<article> 

<h1>Disciplinas</h1>

<p>A estrutura curricular do curso de BSI está organizada em dois núcleos: um de formação básica, coberto nos quatro primeiros períodos, e um de formação profissional, coberto nos quatro últimos períodos.</p>

<img src="{{ $page->adiciona_imagem('disciplinas/fluxograma.png') }}" alt="fluxograma" width="715" height="670" usemap="#Map" border="0" />
<map name="Map" id="Map">
  <area shape="rect" coords="9,60,79,80" href="ementas/fsi.html" title="Fundamentos de Sistemas de Informa&ccedil;&atilde;o" />
  <area shape="rect" coords="279,60,350,80" href="ementas/as.html" title="An&aacute;lise de Sistemas" />
  <area shape="rect" coords="370,60,440,80" href="ementas/pcs.html" title="Projeto e Constru&ccedil;&otilde;es de Sistemas" />
  <area shape="rect" coords="549,59,620,80" href="ementas/procsoft.html" title="Processos de Software" />
  <area shape="rect" coords="459,100,529,120" href="ementas/progmod.html" title="Programa&ccedil;&atilde;o Modular" />
  <area shape="rect" coords="639,100,710,120" href="ementas/gpi.html" title="Ger&ecirc;ncia de Projetos em Inform&aacute;tica" />
  <area shape="rect" coords="459,139,529,160" href="ementas/pcssgbd.html" title="Projeto e Constru&ccedil;&atilde;o de Sistemas com SGBD" />
  <area shape="rect" coords="189,140,260,160" href="ementas/bd1.html" title="Banco de Dados I" />
  <area shape="rect" coords="369,140,439,160" href="ementas/bd2.html" title="Banco de Dados II" />
  <area shape="rect" coords="9,179,79,201" href="ementas/tp1.html" title="T&eacute;cnicas de Programa&ccedil;&atilde;o I" />
  <area shape="rect" coords="99,179,170,200" href="ementas/tp2.html" title="T&eacute;cnicas de Programa&ccedil;&atilde;o II" />
  <area shape="rect" coords="189,179,260,201" href="ementas/ed1.html" title="Estrutura de Dados I" />
  <area shape="rect" coords="279,179,350,200" href="ementas/ed2.html" title="Estruturas de Dados II" />
  <area shape="rect" coords="369,179,440,200" href="ementas/aa.html" title="An&aacute;lise de Algoritmos" />
  <area shape="rect" coords="549,220,620,241" href="ementas/pg1.html" title="Projeto de Gradua&ccedil;&atilde;o I" />
  <area shape="rect" coords="639,220,710,241" href="ementas/pg2.html" title="Projeto de Gradua&ccedil;&atilde;o II" />
  <area shape="rect" coords="279,260,349,280" href="ementas/ihc.html" title="Intera&ccedil;&atilde;o Humano Computador" />
  <area shape="rect" coords="369,300,439,320" href="ementas/redes2.html" title="Redes II" />
  <area shape="rect" coords="279,299,349,321" href="ementas/redes1.html" title="Redes I" />
  <area shape="rect" coords="189,300,259,320" href="ementas/so.html" title="Sistemas Operacionais" />
  <area shape="rect" coords="9,260,79,280" href="ementas/dpw.html" title="Desenvolvimento de P&aacute;ginas Web" />
  <area shape="rect" coords="9,300,79,320" href="ementas/oc.html" title="Organiza&ccedil;&atilde;o de Computadores" />
  <area shape="rect" coords="99,339,169,359" href="ementas/intlogcomp.html" title="Introdu&ccedil;&atilde;o a L&oacute;gica Computacional" />
  <area shape="rect" coords="99,378,169,399" href="ementas/aea.html" title="An&aacute;lise Administrativa e Empresarial" />
  <area shape="rect" coords="190,339,260,359" href="ementas/edc.html" title="Estruturas Discretas" />
  <area shape="rect" coords="280,338,350,360" href="ementas/lfa.html" title="Linguagens Formais e Aut&ocirc;matas" />
  <area shape="rect" coords="369,379,440,399" href="ementas/empreen.html" title="Empreendedorismo" />
  <area shape="rect" coords="459,419,530,440" href="ementas/admfinanceira.html" title="Administra&ccedil;&atilde;o Financeira" />
  <area shape="rect" coords="99,419,169,439" href="ementas/calc1.html" title="C&aacute;lculo I" />
  <area shape="rect" coords="190,418,260,439" href="ementas/calc2.html" title="C&aacute;lculo II" />
  <area shape="rect" coords="9,418,79,440" href="ementas/matematica.html" title="Matem&aacute;tica B&aacute;sica" />
  <area shape="rect" coords="100,459,170,480" href="ementas/alglinear.html" title="&Aacute;lgebra Linear" />
  <area shape="rect" coords="9,499,79,519" href="ementas/tpdiscursivas.html" title="Teorias e Pr&aacute;ticas Discursivas" />
  <area shape="rect" coords="190,459,260,479" href="ementas/prob.html" title="Probabilidade" />
  <area shape="rect" coords="280,458,350,479" href="ementas/estatistica.html" title="Estat&iacute;stica" />
  <area shape="rect" coords="369,619,439,640" href="aces.html" title="Atividade Curricular de Extens&atilde;o" />
</map>

<p><a href="{{ $page->adiciona_arquivo('disciplinas/fluxograma.pdf') }}"><img src="{{ $page->adiciona_imagem('disciplinas/pdf.png') }}" width="35" height="35">Fluxograma</a></p>

<p>O Núcleo Básico, constando de 1.710 horas-aula, contém disciplinas obrigatórias de Ciências da Computação, Matemática, Estatística e Ciências Administrativas, além de disciplinas obrigatórias de formação profissional nas áreas de Organização de Computadores, Sistemas Operacionais, Redes de Computadores, Engenharia de Software, Sistemas de Informação 
e Banco de Dados. O objetivo é dar ao aluno uma formação generalista técnico-teórica que dê base para cursar as disciplinas do Núcleo Profissional nos quatro períodos finais, como também dê a formação necessária para futuramente cursar programas de pós-graduação dando prosseguimento à sua educação continuada ao longo da sua vida profissional.</p>

<p>O Núcleo Profissionalizante, com 1.530 horas-aula, contém as disciplinas optativas, que são aquelas em que o aluno escolhe cursar dentre as opções ofertadas no curso. As disciplinas optativas abordam conteúdos específicos, geralmente atuais e aplicados, visando possibilitar o aluno se aprofundar nas áreas de conhecimento em que pretente atuar profissionalmente. Nesse núcleo também constam as disciplinas Atividades Curriculares de Extensão (ACE), voltadas, por exemplo, para Estágio Supervisionado. Também estão as disciplinas de Projeto Final do Curso (PG - projeto de graduação) em que o aluno elabora seu <a href="../tcc/index.html">TCC</a>.</p>

</article>  
@endsection