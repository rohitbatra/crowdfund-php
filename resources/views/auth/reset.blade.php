@extends('layouts.default')
<!-- resources/views/auth/password.blade.php -->
@section('sidebar')
    @parent
@endsection

@section('header')
	@parent
	<p>
		Create a New Password.
	</p>
@endsection

@section('content')
@include('errors.errors')
{!! Form::open(array('url'=>'password/reset','method'=>'post','class'=>'')) !!}
	<input type="hidden" name="token" value="{{ $token }}">
	@include('modules.form.formgroup',['type'=>'email','label'=>'E-Mail','id'=>'email',$required='required'])
	@include('modules.form.formgroup',['type'=>'password','label'=>'New Password','id'=>'password',$required='required'])
	@include('modules.form.formgroup',['type'=>'password','label'=>'Confirm New Password','id'=>'password_confirmation',$required='required'])
	{!! Form::submit('Save',['class'=>'btn btn-default']) !!}
{!! Form::close() !!}
@endsection