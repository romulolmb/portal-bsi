@extends('_layouts.master', ['page_title' => 'Alunos BSI'])

@section('body')
<div class="container">
	@include('_partials.aside.alunos')
	@yield('content')
</div>
@endsection