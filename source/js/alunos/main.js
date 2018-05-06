function gera_calendario(ano)
  {
    var dias_semana = new Array('Dom','Seg','Ter','Qua','Qui','Sex','Sab');
    var meses_ano = new Array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
    var qtde_dias_mes = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    var feriado = new Array(1, 1,   '<b>01</b> - Confraternização Universal',
                            1, 20,  '<b>20</b> - Dia de São Sebastião', 
                            2, 13,  '<b>13</b> - Terça-feira de Carnaval',
                            3, 30,  '<b>30</b> - Sexta-feira Santa',
                            4, 1,   '<b>01</b> - Páscoa',
                            4, 21,  '<b>21</b> - Tiradentes',
                            4, 23,  '<b>23</b> - Dia de São Jorge',
                            5, 1,   '<b>01</b> - Dia do Trabalhador',
                            5, 31,  '<b>31</b> - Corpus Christi',
                            9, 7,   '<b>07</b> - Independência do Brasil',
                            10, 12, '<b>12</b> - Nossa Senhora Aparecida',
                            10, 28, '<b>28</b> - Dia do Servidor Público',
                            11, 2,  '<b>02</b> - Dia de Finados',
                            11, 15, '<b>15</b> - Proclamação da República',
                            11, 20, '<b>20</b> - Dia da Consciência Negra',
                            12, 25, '<b>25</b> - Natal',
                            99, 99, 'fim dos feriados');
    var avisos = new Array(1, 8,  '<b>08 a 12</b> - Matrícula nos cursos de férias (nas secretarias das Escolas)',
                           1, 15, '<b>15</b> - Início dos cursos de férias<br>' +
                                  '<b>15</b> - Primeiro dia da matrícula 2018.1 no Portal do Aluno',
                           2, 16, '<b>16</b> - Último dia de matrícula 2018.1 no Portal do Aluno',
                           2, 19, '<b>19 a 21</b> - Processamento dos pedidos de matrícula 2018.1',
                           3, 3,  '<b>03</b> - Fim dos cursos de férias',
                           3, 5,  '<b>05</b> - Início das atividades acadêmicas 2018.1 <br>' + 
                                  '<b>05 a 09</b> - Lançamento de notas dos cursos de férias<br>' +
                                  '<b>05 a 16</b> - Confirmação da matrícula 2018.1',
                           3, 6,  '<b>06</b> - Recepção dos calouros do BSI 2018.1',
                           3, 12, '<b>12</b> - Início das aulas 2018.1<br>' + 
                                  '<b>12 a 25</b> - Inclusão/Exclusão de disciplinas 2018.1 pelo Portal do Aluno',
                           3, 26, '<b>26 a 28</b> - Processamento dos pedidos de inclusão/exclusão das disciplinas 2018.1',
                           3, 31, '<b>31</b> - Último dia para colação de grau dos alunos 2017.2',
                           4, 27, '<b>27</b> - Publicação do Edital para transferência interna/externa, reingresso e revinculação',
                           5, 4,  '<b>04</b> - Último dia para exclusão de disciplinas 2018.1 (na secretaria)',
                           5, 11, '<b>11</b> - Último dia para trancamento do curso 2018.1  (na secretaria)',
                           7, 7,  '<b>07</b> - Término das atividades acadêmicas e letivas 2018.1',
                           7, 9,  '<b>09 a 14</b> - Provas finais do semestre 2018.1<br>' +
                                  '<b>09 a 28</b> - Lançamento de notas 2018.1',
                           7, 16, '<b>16 a 31</b> - Matrícula 2018.2 pelo Portal do Aluno',
                           7, 20, '<b>20</b> - Último dia para a apresentação do TCC em 2018.1',
                           8, 1,  '<b>01 a 03</b> - Processamento dos pedidos de matrícula 2018.2',
                           8, 6,  '<b>06</b> - Início das atividades acadêmicas 2018.2<br>' +
                                  '<b>06 a 17</b> - Confirmação da matrícula 2018.2',
                           8, 7,  '<b>07</b> - Recepção dos calouros do BSI 2018.2',
                           8, 13, '<b>13</b> - Início das aulas 2018.2 <br>' + 
                                  '<b>13 a 25</b> - Inclusão/Exclusão de disciplinas 2018.2 pelo Portal do Aluno',
                           8, 27, '<b>27 a 29</b> - Processamento dos pedidos de inclusão/exclusão das disciplinas 2018.2',
                           8, 31, '<b>31</b> - Último dia para colação de grau dos alunos 2018.1',
                           9, 12, '<b>12</b> - Último dia para exclusão de disciplinas 2018.2 (na secretaria)',
                           10, 15,'<b>15</b> - Último dia para trancamento do curso 2018.2  (na secretaria)<br>' +
                                  '<b>15 a 20</b> - Semana Nacional de Ciências e Tecnologia. '+
                                  'Tema: “Ciência para a Redução das Desigualdades”',
                           12, 8, '<b>08</b> - Término das atividades acadêmicas e letivas 2018.2',
                           12, 10,'<b>10 a 15</b> - Provas finais do semestre 2018.2<br>' +
                                  '<b>10 a 31</b> - Lançamento de notas 2018.2',
                           12, 21,'<b>21</b> - Último dia para a apresentação do TCC em 2018.2',
                           99, 99, 'fim dos avisos');

    var calendario = new Date();     // recebe inicialmente a data do dia
    var num_dias_semana = 7;         // O numero de dias na semana
    var num_fer = 0;                 // número do feriado a ser verificado
    var num_aviso = 0;               // número do aviso a ser verificado
    var cal;                         // vai conter o calendário do mês montado pelo programa
    var avisos_mes;                  // vai conter as informações sobre o mês do calendário
    var ano = 2018;                  // ano do calendário

    /* Definições para montar a tabela do calendário */
    var TR_start   = '<TR>';
    var TR_end     = '</TR>';
    var TD_start   = '<TD BORDER=0 WIDTH=30><CENTER>';
    var TD_end     = '</CENTER></TD>';
    var red_start  = '<TD BORDER=1 WIDTH=30 BGCOLOR=FFA07A ALIGN=CENTER>';
    var red_end    = '</TD>';
    var blue_start = '<TD BORDER=1 WIDTH=30 BGCOLOR=DEDEFF ALIGN=CENTER>';
    var blue_end   = '</TD>';

    /* verifica se o ano é bissexto */
    if ((ano % 4 == 0) && ((ano % 100 != 0) || (ano % 400 == 0)))
       qtde_dias_mes[1] = 29;

    cal = '';

    /* monta o calendário de cada mês */
    for (mes = 0; mes < 12; mes++)
      {
        /* inicializa linha da página */
        cal += '<div class="row">' + '<div class="col">';

        /* inicializa as informações sobre o calendário */
        avisos_mes = '<p>';
        
        /* define a data inicial do calendário a ser montado */
        calendario.setDate(1);
        calendario.setMonth(mes);
        calendario.setUTCFullYear(ano);

        /* começa a montagem do calendário do mês */
        cal += '<TABLE BORDER=1><TR><TD><TABLE BORDER=0 CELLSPACING=5>' + TR_start;
        cal += '<TD COLSPAN="' + num_dias_semana + '" BGCOLOR="#EFEFEF"><CENTER><B>';
        cal += meses_ano[mes]  + '   ' + ano + '</B>' + TD_end + TR_end;  // mês e ano do calendário
        cal += TR_start;

        /* monta o cabeçalho do calendário */
        for (i = 0; i < num_dias_semana; i++)
          cal += TD_start + '<B>' + dias_semana[i] + '</B>' + TD_end;
        cal += TD_end + TR_end;

        /* primeiras posições do calendário podem estar vazias */
        cal += TR_start;
        dia  = 0;
        for (i = 0; i < calendario.getDay(); i++)
          {
            cal += TD_start + '  ' + TD_end;
            dia++;
          }

        /* começa o calendário do mês */
        for (i = 1; i <= qtde_dias_mes[mes]; i++)
          {
            if (dia == 0)
               cal += TR_start;

            /* verifica se dia é um feriado */
            if ((i == feriado[3 * num_fer + 1]) && (mes + 1 == feriado[3 * num_fer]))
              {
                cal += red_start + i + red_end + TD_end;
                avisos_mes += feriado[3 * num_fer + 2] + '<br>';
                num_fer++;
              }
            else
              if ((i == avisos[3 * num_aviso + 1]) && (mes + 1 == avisos[3 * num_aviso]))
                {
                  cal += blue_start + i + blue_end + TD_end;
                  avisos_mes += avisos[3 * num_aviso + 2] + '<br>';
                  num_aviso++;
                }
              else
                cal += TD_start + i + TD_end;
            dia++;

            /* verifica se a linha do calendário foi completada */
            if (dia == num_dias_semana)
              {
                cal += TR_end;
                dia = 0;
              }
          }

        /* fecha calendário do mês */
        cal += '</TABLE></TABLE></div>';

        /* incorpora avisos e fecha linha */
        cal += '<div class="col">' + avisos_mes + '</div></div>' ;
       }

     /* imprime calendário*/
     document.getElementById('calendario').innerHTML = cal;

     //document.write(cal);
 }