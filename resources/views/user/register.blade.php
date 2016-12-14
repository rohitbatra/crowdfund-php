@extends('layouts.default')
@section('header')
	@parent
	<p>Register by filling the following fields.</p>
@endsection

@section('content')
	@include('errors.errors')
	@include('modules.user.register')
@endsection