@extends('layouts.default')
@section('header')
	@parent
	<p>Lorem Ipsum.</p>
	<p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
		<ul>
			<li>Lorem Ipsum</li>
		</ul>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
		<div class="row">
			@foreach($content_data as $cd)
				<div class="col-md-3">
					<div class="well">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#{{{$cd['id']}}}">
							{{{$cd['title']}}}
						</button>
						@include('modules.modal',['id'=>$cd['id'],'modalbody'=>'content.modalitem','title'=>$cd['title'],'vars'=>['content'=>$cd['content']]])
					</div>
				</div>
			@endforeach
		</div>
	</p>
@endsection

@section('content')
	@include('errors.errors')
	<div class="well well-lg projectsteps">
		@if(!$user)
			<div class="step-register">
				<h3>Register</h3>
				<p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
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