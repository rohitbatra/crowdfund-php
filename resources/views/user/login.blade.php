@extends('layouts.default')

@section('header')
	@parent
	<p>Welcome User, Please Log-In to continue.</p>
@endsection

@section('content')
	@include('errors.errors')
	@include('modules.user.login')
	<h3>Forgot the password:</h3>
	<p>Do not worry <a href="{!!url('user/reset/password')!!}">Click Here</a> to reset your Password.
@endsection