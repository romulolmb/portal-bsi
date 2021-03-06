<?php
//Teste de Commit e Push no VSC
return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'bsi' => [
            'path' => 'bsi/{filename}.html'
        ]
        ,'disciplinas' => [
            'path' => 'disciplinas/{filename}.html'
        ]
        ,'alunos' => [
            'path' => 'alunos/{filename}.html'
        ]
        ,'tcc' => [
            'path' => 'tcc/{filename}.html'
        ]
        ,'noticias' => [
            'path' => 'noticias/{filename}.html'
        ]
        ,'professores' => [
            'path' => 'professores/{filename}.html'
        ]
        ,'oportunidades' => [
            'path' => 'oportunidades/{filename}.html'
        ]
        ,'secretaria' => [
            'path' => 'secretaria/{filename}.html'
        ]
        ,'institucional' => [
            'path' => 'institucional/{filename}.html'
        ]
    ],
    'title' => 'Portal BSI',
    'adiciona_imagem' => function($page, $imagem) {
        return $page->baseUrl . '/images/' . $imagem;
    },
    'adiciona_arquivo' => function($page, $file) {
        return $page->baseUrl . '/files/' . $file;
    },
    'adiciona_js' => function($page, $file) {
        return $page->baseUrl . '/js/' . $file;
    },
    'icone_ativo' =>function($page, $secao) {
    	return str_contains($page->getPath(), $secao) ? 'iconeAtivo' : 'icone';
    },
    'nav_ativo' =>function($page, $secao) {
    	return str_contains($page->getPath(), $secao) ? 'navAtivo' : 'nav';
    },
    'aside_ativo' =>function($page, $pagina, $secao) {
    	if ($pagina == $secao) {
    		return 'ativo '.$secao;
    	}
    	if (str_contains($page->getPath(), $pagina) && $pagina != $secao) {
    		return 'ativo '.$secao;
    	}
    	return '';
    }
];
