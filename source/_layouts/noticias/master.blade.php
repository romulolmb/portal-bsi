@extends('_layouts.master', ['page_title' => 'Notícias BSI'])

@section('body')
{{-- <h1>Hello world!</h1>
<p>{{ $page->title }}</p> --}}
<div class="container">
	@include('_partials.aside.noticias')
	@yield('content')
</div>
{{-- <br style="clear: both"> --}}
@endsection