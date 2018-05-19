@extends('_layouts.master', ['page_title' => 'Secretaria BSI'])

@section('body')
<div class="container">
	@include('_partials.aside.secretaria')
	@yield('content')
</div>
@endsection