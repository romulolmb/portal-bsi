{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td colspan="2">
                        <a class="navbar-brand js-scroll-trigger" href="{{ $page->baseUrl }}/bsi"><img src="{{ $page->adiciona_imagem('iBSI.png') }}" alt="bsi"><br><span>BACHARELADO&nbsp;&nbsp;EM</span><br><span>SISTEMAS&nbsp;DE<br>INFORMA&Ccedil;&Atilde;O</span></a>
                    </td>
                    <td>
                        <a href="#"><div class="icone normal disciplinas"><p class="subtitle"><img class="icon" src="{{ $page->adiciona_imagem('iDisciplinas.png') }}" alt="disciplinas"><br>DISCIPLINAS1</p></div></a>
                    </td>
                    <td colspan="3">
                        <a href="#"><div class="icone normal disciplinas"><p class="subtitle"><img class="icon" src="{{ $page->adiciona_imagem('iDisciplinas.png') }}" alt="disciplinas"><br>DISCIPLINAS2</p></div></a>
                    </td>
                    <td>
                        <a href="#"><div class="icone normal disciplinas"><p class="subtitle"><img class="icon" src="{{ $page->adiciona_imagem('iDisciplinas.png') }}" alt="disciplinas"><br>DISCIPLINAS3</p></div></a>
                    </td>
                </tr>
                <tr>
                    
                </tr>
            </tbody>
        </table>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}

<header>
    <div class="containerr"> 
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
    </div> 
</header>