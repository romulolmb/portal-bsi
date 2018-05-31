@extends('_layouts.master', ['page_title' => 'BSI UNIRIO'])

@section('body')
<div class="container-big">
	@include('_partials.aside.bsi')
	@yield('content')
</div>
@endsection