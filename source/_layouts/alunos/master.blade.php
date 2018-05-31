@extends('_layouts.master', ['page_title' => 'Alunos BSI'])

@section('body')
<div class="container-big">
	@include('_partials.aside.alunos')
	@yield('content')
</div>
@endsection