@extends('layouts.default')
@section('header')
	@parent
	<h3>{!!$content->title!!}</h3>
    <hr class="tiny"/>
@endsection

@section('content')
	{!!$content->content!!}
@endsection