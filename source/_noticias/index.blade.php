@extends('_layouts.noticias.master')
@section('content')
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<article> 

	<h1>Notícias</h1>

	<div class="fb-like-box" data-href="http://www.facebook.com/bsiunirio" data-width="719" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>

</article>  

@endsection