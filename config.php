<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'bsi' => [
            'path' => 'bsi/{filename}.html'
        ]
    ],
    'title' => 'Portal BSI',
    'adiciona_imagem' => function($page, $imagem) {
    	return $page->baseUrl . '/images/' . $imagem;
    },
    'icone_ativo' =>function($page, $secao) {
    	return str_contains($page->getPath(), $secao) ? 'iconeAtivo' : 'icone';
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
