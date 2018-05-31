@extends('_layouts.master', ['page_title' => 'Notícias BSI'])

@section('body')
<div class="container-big">
	@include('_partials.aside.noticias')
	@yield('content')
</div>
@endsection