@extends('layouts.default')
@section('header')
	@parent
	<h3>Register by filling the following fields.</h3>
    <hr class="tiny"/>
@endsection

@section('content')
	@include('errors.errors')
	@include('modules.user.register')
@endsection