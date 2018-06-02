<nav class="off-canvas" id="off-canvas">
    <div class="header_offcanvas d-inline-flex align-items-center justify-content-between w-100">
        <i class="mdi mdi-2x mdi-menu text-white"></i>
        <div>MENU</div>
        <i class="mdi mdi-2x mdi-close text-white" onClick="closeNav()"></i>
    </div>
    <ul class="menuOffcanvas" id="menuOffcanvas">
		<li class="{{ $page->nav_ativo('bsi') }} border-bottom b-bsi d-inline-flex align-items-center pl-2 pr-2 w-100" data-toggle="collapse" data-target="#collapseBSI" aria-expanded="false">
            <img src="{{ $page->adiciona_imagem('iBSI.png') }}" alt="bsi" class="iconePequeno">
            <div class="titulo">Bacharelado em <br>Sistemas de Informação</div>
            <i class="mdi mdi-2x mdi-expand-more text-white ml-auto"></i>
            <i class="mdi mdi-2x mdi-expand-less text-white ml-auto"></i>
        </li>
        <div class="collapse" id="collapseBSI">
            @include('_partials.aside.bsi')
        </div>
		<li class="{{ $page->nav_ativo('disciplinas') }} border-bottom b-disciplinas d-inline-flex align-items-center pl-2 pr-2 w-100" data-toggle="collapse" data-target="#collapseDisciplinas" aria-expanded="false">
            <img src="{{ $page->adiciona_imagem('iDisciplinas.png') }}" alt="disciplinas" class="iconePequeno">
            <div class="titulo">Disciplinas</div>
            <i class="mdi mdi-2x mdi-expand-more text-white ml-auto"></i>
            <i class="mdi mdi-2x mdi-expand-less text-white ml-auto"></i>
        </li>
        <div class="collapse" id="collapseDisciplinas">
            @include('_partials.aside.disciplinas')
        </div>
		<li class="{{ $page->nav_ativo('alunos') }} border-bottom b-alunos d-inline-flex align-items-center pl-2 pr-2 w-100" data-toggle="collapse" data-target="#collapseAlunos" aria-expanded="false">
            <img src="{{ $page->adiciona_imagem('iAlunos.png') }}" alt="alunos" class="iconePequeno">
            <div class="titulo">Alunos</div>
            <i class="mdi mdi-2x mdi-expand-more text-white ml-auto"></i>
            <i class="mdi mdi-2x mdi-expand-less text-white ml-auto"></i>
        </li>
        <div class="collapse" id="collapseAlunos">
            @include('_partials.aside.alunos')
        </div>
		<li class="{{ $page->nav_ativo('tcc') }} border-bottom b-tcc d-inline-flex align-items-center pl-2 pr-2 w-100" data-toggle="collapse" data-target="#collapseTCC" aria-expanded="false">
            <img src="{{ $page->adiciona_imagem('iTCC.png') }}" alt="tcc" class="iconePequeno">
            <div class="titulo">TCC</div>
            <i class="mdi mdi-2x mdi-expand-more text-white ml-auto"></i>
            <i class="mdi mdi-2x mdi-expand-less text-white ml-auto"></i>
        </li>
        <div class="collapse" id="collapseTCC">
            @include('_partials.aside.tcc')
        </div>
		<li class="{{ $page->nav_ativo('professores') }} border-bottom b-professores d-inline-flex align-items-center pl-2 pr-2 w-100" data-toggle="collapse" data-target="#collapseProfessores" aria-expanded="false">
            <img src="{{ $page->adiciona_imagem('iProfessores.png') }}" alt="professores" class="iconePequeno">
            <div class="titulo">Professores</div>
            <i class="mdi mdi-2x mdi-expand-more text-white ml-auto"></i>
            <i class="mdi mdi-2x mdi-expand-less text-white ml-auto"></i>
        </li>
        <div class="collapse" id="collapseProfessores">
            @include('_partials.aside.professores')
        </div>
		<li class="{{ $page->nav_ativo('oportunidades') }} border-bottom b-oportunidades d-inline-flex align-items-center pl-2 pr-2 w-100" data-toggle="collapse" data-target="#collapseOportunidades" aria-expanded="false">
            <img src="{{ $page->adiciona_imagem('iOportunidades.png') }}" alt="oportunidades" class="iconePequeno">
            <div class="titulo">Oportunidades</div>
            <i class="mdi mdi-2x mdi-expand-more text-white ml-auto"></i>
            <i class="mdi mdi-2x mdi-expand-less text-white ml-auto"></i>
        </li>
        <div class="collapse" id="collapseOportunidades">
            @include('_partials.aside.oportunidades')
        </div>
		<li class="{{ $page->nav_ativo('secretaria') }} border-bottom b-secretaria d-inline-flex align-items-center pl-2 pr-2 w-100" data-toggle="collapse" data-target="#collapseSecretaria" aria-expanded="false">
            <img src="{{ $page->adiciona_imagem('iSecretaria.png') }}" alt="secretaria" class="iconePequeno">
            <div class="titulo">Secretaria</div>
            <i class="mdi mdi-2x mdi-expand-more text-white ml-auto"></i>
            <i class="mdi mdi-2x mdi-expand-less text-white ml-auto"></i>
        </li>
        <div class="collapse" id="collapseSecretaria">
            @include('_partials.aside.secretaria')
        </div>
		<li class="{{ $page->nav_ativo('institucional') }} border-bottom b-institucional d-inline-flex align-items-center pl-2 pr-2 w-100" data-toggle="collapse" data-target="#collapseInstitucional" aria-expanded="false">
            <img src="{{ $page->adiciona_imagem('iInstitucional.png') }}" alt="institucional" class="iconePequeno">
            <div class="titulo">Institucional</div>
            <i class="mdi mdi-2x mdi-expand-more text-white ml-auto"></i>
            <i class="mdi mdi-2x mdi-expand-less text-white ml-auto"></i>
        </li>
        <div class="collapse" id="collapseInstitucional">
            @include('_partials.aside.institucional')
        </div>
		<li class="{{ $page->nav_ativo('noticias') }} border-bottom b-noticias pl-2 pr-2 w-100">
            <a href="/noticias" class="d-inline-flex align-items-center w-100 h-100">
                <img src="{{ $page->adiciona_imagem('iNoticias.png') }}" alt="noticias" class="iconePequeno">
                <div class="titulo">Notícias</div>
            </a>
        </li>
    </ul>
</nav>