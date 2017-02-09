@extends('layouts.default')

@section('header')
	@parent
@endsection

@section('content')

@include('errors.errors')
{!! Form::open(array('url'=>'user/update/profile','method'=>'post','class'=>'')) !!}
	@include('modules.form.formgroup',['data'=>$user,'type'=>'text','label'=>'First Name','id'=>'firstname','required'=>true])
	@include('modules.form.formgroup',['data'=>$user,'type'=>'text','label'=>'Last Name','id'=>'lastname','required'=>'required'])
	@include('modules.form.formgroup',['data'=>$user,'type'=>'text','label'=>'Username','id'=>'username','note'=>'Your user profile would be like user/profile/USERNAME ','required'=>true])
	@include('modules.form.formgroup',['data'=>$user,'type'=>'text','label'=>'E-Mail','id'=>'email','required'=>true])
	@include('modules.form.formgroup',['data'=>$user,'type'=>'select','label'=>'Accessing site using a Public Computer','id'=>'public','option'=>['1'=>'Yes','0'=>'No'],'required'=>true])
	@include('modules.upload.uploaditem',['id'=>'avatar','label'=>'Avatar','view'=>'create','old'=>$user->avatar])
	@include('modules.form.formgroup',['data'=>$user,'type'=>'textarea','cke'=>'true','label'=>'About Me','id'=>'bio'])
	{!! Form::submit('Update',['class'=>'btn btn-default']) !!}
{!! Form::close() !!}
@endsection