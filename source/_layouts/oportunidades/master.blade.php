@extends('_layouts.master', ['page_title' => 'Oportunidades BSI'])

@section('body')
<div class="container">
	@include('_partials.aside.oportunidades')
	@yield('content')
</div>
@endsection