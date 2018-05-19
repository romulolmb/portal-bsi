@extends('_layouts.master', ['page_title' => 'BSI UNIRIO'])

@section('body')
<div class="container">
	@include('_partials.aside.bsi')
	@yield('content')
</div>
@endsection