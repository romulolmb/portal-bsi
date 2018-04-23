<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/bsi.css">
        {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
        <title>BSI UNIRIO</title> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
		<meta name="description" content="BSI UNIRIO: Bacharelado em Sistemas de Informa&ccedil;&atilde;o"> 
		<link href='http://fonts.googleapis.com/css?family=Dosis|Ubuntu' rel='stylesheet' type='text/css'>
    </head>
    <body>
    {{-- <script src="http://barra.brasil.gov.br/barra.js" type="text/javascript"></script>     --}}
        @include('_partials.header')
        @yield('body')
        {{-- <br style="clear: both"> --}}
    	@include('_partials.footer')
    {{-- <script src="/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script> --}}
    </body>
</html>
