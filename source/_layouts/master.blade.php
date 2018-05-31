<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="/css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/css/bootstrap/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/bsi.css">
        @yield('styles')
        {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
        <title>{{ $page_title }}</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <meta name="description" content="BSI UNIRIO: Bacharelado em Sistemas de Informa&ccedil;&atilde;o"> 
        <link href='http://fonts.googleapis.com/css?family=Dosis|Ubuntu' rel='stylesheet' type='text/css'>
    </head>
    <body>
    {{-- <script src="http://barra.brasil.gov.br/barra.js" type="text/javascript"></script>     --}}
        <div class="d-none d-lg-block">
            @include('_partials.header')
        </div>
        @yield('body')
        <br style="clear: both">
    	@include('_partials.footer')
        {{-- Para adicionar scripts --}}
        @yield('scripts')
    </body>
</html>
