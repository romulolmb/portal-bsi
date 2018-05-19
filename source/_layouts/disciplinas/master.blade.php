@extends('_layouts.master', ['page_title' => 'Disciplinas BSI'])

@section('body')
<div class="container">
	@include('_partials.aside.disciplinas')
	@yield('content')
</div>
@endsection