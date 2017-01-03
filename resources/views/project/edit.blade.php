@extends('layouts.default')
@section('header')
	@parent
	<h3>{{{$project->title}}}</h3>
	<p>Edit Project Information</p>
@endsection

@section('content')
	@include('errors.errors')
	<div class="well well-lg projectsteps">
	@include('project.steps.addprojectdetail')
	</div>
@endsection