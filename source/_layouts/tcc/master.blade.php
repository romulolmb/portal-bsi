@extends('_layouts.master', ['page_title' => 'TCC BSI'])

@section('body')
{{-- <h1>Hello world!</h1>
<p>{{ $page->title }}</p> --}}
<div class="container">
	@include('_partials.aside.tcc')
	@yield('content')
</div>
{{-- <br style="clear: both"> --}}
@endsection