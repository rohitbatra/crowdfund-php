@extends('layouts.default')

@section('header')
	@parent
	<h3>Welcome User, Please Log-In to continue</h3>
    <hr class="tiny"/>
@endsection

@section('content')
	@include('errors.errors')
	@include('modules.user.login')
    <hr class="tiny"/>
	<h3>Forgot the password</h3>
	<p>Don't worry <a href="{!!url('user/reset/password')!!}">Click Here</a> to reset your Password.
@endsection