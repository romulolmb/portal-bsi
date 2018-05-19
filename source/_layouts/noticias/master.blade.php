@extends('_layouts.master', ['page_title' => 'Notícias BSI'])

@section('body')
<div class="container">
	@include('_partials.aside.noticias')
	@yield('content')
</div>
@endsection