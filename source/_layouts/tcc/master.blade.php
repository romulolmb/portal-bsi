@extends('_layouts.master', ['page_title' => 'TCC BSI'])

@section('body')
<div class="container">
	@include('_partials.aside.tcc')
	@yield('content')
</div>
@endsection