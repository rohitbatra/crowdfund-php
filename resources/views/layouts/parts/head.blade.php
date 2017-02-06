<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	@if(isset($metas))
		<meta name="description" content="{{$metas['description']}}">
		<meta name="keywords" content="{{$metas['keywords']}}">
		<meta name="author" content="{{$metas['author']}}">
			@if(isset($settings) && $settings['live'] == '0')
				<meta name="robots" content="noindex, nofollow">
			@else
				<meta name="robots" content="index, follow">
			@endif
	<!-- App Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicon/apple-icon-57x57.png') }}">
		<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon/apple-icon-60x60.png') }}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/apple-icon-72x72.png') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/apple-icon-76x76.png') }}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-icon-114x114.png') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-icon-120x120.png') }}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon/apple-icon-144x144.png') }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/apple-icon-152x152.png') }}">
		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-icon-180x180.png') }}">
		<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/favicon/android-icon-192x192.png') }}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
		<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png') }}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
		<link rel="manifest" href="{{ asset('images/favicon/manifest.json') }}">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="{{ asset('images/favicon/ms-icon-144x144.png') }}">
		<meta name="theme-color" content="#ffffff">
	<!-- ENDS -->

		<title>{{$metas['title']}}</title>
	@endif

	@if(isset($styles))
		@foreach($styles as $style)
		{!! HTML::style(URL::asset('/css/'.$style)) !!}
		@endforeach
	@else
		<link media="all" type="text/css" rel="stylesheet" href="//www.poloniago.com/css/app.css">
		<link media="all" type="text/css" rel="stylesheet" href="//www.poloniago.com/css/main.css">
	@endif

	@if(isset($scripts['header']))
		@foreach($scripts['header'] as $script)
			@if (!preg_match("~^(?:f|ht)tps?://~i", $script))
				{!! HTML::script(URL::asset('/js/'.$script)) !!}
			@else
				{!! HTML::script(URL::asset($script)) !!}
			@endif
		@endforeach
	@endif
	
	@if(isset($recaptchakey))
		<script>
			var recaptchakey = '{!!$recaptchakey!!}';
		</script>
	@endif

	@yield('head')
    <link media="all" type="text/css" rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
</head>