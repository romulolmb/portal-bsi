{{-- <header> --}}

	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="#">Navbar</a>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Link</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link disabled" href="#">Disabled</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="text" placeholder="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
	{{-- <div class="containerr">  --}}
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<a href="{{ $page->baseUrl }}/bsi"><div class="{{ $page->icone_ativo('bsi') }} grande bsi"><p class="subtitle"><img src="{{ $page->adiciona_imagem('iBSI.png') }}" alt="bsi"><br>BACHARELADO&nbsp;&nbsp;EM<br><span class="subtitleGrande">SISTEMAS&nbsp;DE<br>INFORMA&Ccedil;&Atilde;O</span></div></a>
		<div style="float:left;">
			<a href="#"><div class="icone normal disciplinas"><p class="subtitle"><img class="icon" src="{{ $page->adiciona_imagem('iDisciplinas.png') }}" alt="disciplinas"><br>DISCIPLINAS</p></div></a>
			<a href="#"><div class= "icone largo alunos"><p class="subtitle"><img src="{{ $page->adiciona_imagem('iAlunos.png') }}" alt="alunos"><br>ALUNOS</p></div></a>
			<a href="#"><div class= "icone normal tcc"><p class="subtitle"><img class="icon" src="{{ $page->adiciona_imagem('iTCC.png') }}" alt="Trabalho de Conclusão de Curso"><br>TCC</p></div></a>
			<br style="clear: both;">
			<a href="#"><div class= "icone normal professores"><p class="subtitle"><img src="{{ $page->adiciona_imagem('iProfessores.png') }}" alt="Professores"><br>PROFESSORES</p></div></a>
			<a href="#"><div class= "icone normal oportunidades"><p class="subtitle"><img class="icon" src="{{ $page->adiciona_imagem('iOportunidades.png') }}" alt="oportunidades"><br>OPORTUNIDADES</p></div></a>
			<a href="#"><div class= "icone normal secretaria"><p class="subtitle"><img class="icon" src="{{ $page->adiciona_imagem('iSecretaria.png') }}" alt="secretaria"><br>SECRETARIA</p></div></a>
			<a href="#"><div class= "icone normal institucional"><p class="subtitle"><img src="{{ $page->adiciona_imagem('iInstitucional.png') }}" alt="institucional"><br>INSTITUCIONAL<br>EIA-CCET-UNIRIO</p></div></a> 
		</div>	
		<a href="#"><div class="noticias icone grande semMargem"><p class="subtitle subtitleGrande"><img src="{{ $page->adiciona_imagem('iNoticias.png') }}" alt="notícias"><br>NOT&Iacute;CIAS</p></div></a>
	</nav> 
	{{-- </div>  --}}
{{-- </header> --}}