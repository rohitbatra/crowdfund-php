@extends('layouts.default')
@section('header')
	@parent
	<p>
		Enter your registered email-address, password change link will be emailed to you on that.
	</p>
@endsection

@section('content')
@include('errors.errors')
{!! Form::open(array('url'=>'user/reset/password','method'=>'post','class'=>'passwordresetemailform form-inline')) !!}
	@include('modules.form.formgroup',['type'=>'email','label'=>'Your registered e-mail address','id'=>'email',$required='required'])
	{!! Form::submit('Send password change link',['class'=>'btn btn-default']) !!}
{!! Form::close() !!}
@endsection