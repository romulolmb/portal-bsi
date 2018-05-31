@extends('_layouts.master', ['page_title' => 'Professores BSI'])

@section('body')
<div class="container-big">
	@include('_partials.aside.professores')
	@yield('content')
</div>
@endsection