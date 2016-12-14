@extends('layouts.default')

@section('content')
	@if(isset($status) && !empty($status))
		404 {{{$status}}}
	@else
		404 Page not found
	@endif
@endsection