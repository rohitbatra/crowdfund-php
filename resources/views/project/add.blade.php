@extends('layouts.default')
@section('header')
	@parent
		<div class="row well">
			<div class="text-center">Kindly go through the below information/links once. If you have any issues/doubts regarding anything please feel free to contact us at <a href="mailto:support@poloniago.com">support@poloniago.com</a></div>
			<hr class="tiny" />
			@foreach($content_data as $cd)
				<div class="col-md-3">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#{{{$cd['id']}}}">
						{{{$cd['title']}}}
					</button>
					@include('modules.modal',['id'=>$cd['id'],'modalbody'=>'content.modalitem','title'=>$cd['title'],'vars'=>['content'=>$cd['content']]])
				</div>
			@endforeach
		</div>
@endsection

@section('content')
	@include('errors.errors')
	<div class="well well-lg projectsteps">
		@if(!$user)
			<div class="step-register">
				<h3>Register</h3>
				<p>
                    Please register or login to your account first to create a new project.
				</p>
				@include('modules.user.register')
			</div>
		@else
			{!! Form::open(array('url'=>'/','method'=>'post','class'=>'')) !!}
				<div class="projectstepcontainer">
					@include('project.steps.addproject')
				</div>
			{!! Form::close() !!}
		@endif
	</div>
@endsection