@extends('layouts.default')
@section('header')
	@parent
	<p>
		Enter your registered email-address, password reset link will be emailed to you on that.
	</p>
@endsection

@section('content')
@include('errors.errors')
{!! Form::open(array('url'=>'user/reset/password','method'=>'post','class'=>'passwordresetemailform form-inline')) !!}
	@include('modules.form.formgroup',['type'=>'email','label'=>'Your registered e-mail address','id'=>'email',$required='required'])
	{!! Form::submit('Reset Password',['class'=>'btn btn-default']) !!}
{!! Form::close() !!}
@endsection