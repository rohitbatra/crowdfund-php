@if(isset($_GET) && !empty($_GET))
	<h1>
	@if (isset($metas['title']))
		{{$metas['title']}}
	@endif
	</h1>
@endif