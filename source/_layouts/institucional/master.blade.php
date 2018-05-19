@extends('_layouts.master', ['page_title' => 'Institucional BSI'])

@section('body')
<div class="container">
	@include('_partials.aside.institucional')
	@yield('content')
</div>
@endsection