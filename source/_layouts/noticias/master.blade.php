@extends('_layouts.master', ['page_title' => 'Notícias BSI'])

@section('body')
<div class="container-small">
	<div class="container">
		<div class="row">
			<div class="d-none d-lg-block col-lg-3 pt-0 pl-0 pbr-10">
				@include('_partials.aside.noticias')
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 p-r-5 p-xs-l-5 p-sm-l-5">
				@yield('content')
			</div>
		</div>
	</div>
</div>
@endsection