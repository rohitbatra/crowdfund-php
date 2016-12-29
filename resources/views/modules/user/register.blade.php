{!! Form::open(array('url'=>'user/store','method'=>'post','class'=>'')) !!}
	@include('modules.form.formgroup',['type'=>'text','label'=>'Username','id'=>'username',$required='required'])
	@include('modules.form.formgroup',['type'=>'email','label'=>'E-mail','id'=>'email',$required='required'])
	@include('modules.form.formgroup',['type'=>'email','label'=>'Confirm E-mail','id'=>'emailConfirmation',$required='required'])
	@include('modules.form.formgroup',['type'=>'password','label'=>'Password','id'=>'password',$required='required'])
	@include('modules.form.formgroup',['type'=>'password','label'=>'Confirm Password','id'=>'passwordConfirmation',$required='required'])
	<div class="form-group">
		<div class="g-recaptcha" id="g-recaptcha" data-sitekey="{{$recaptchakey}}"></div>
	</div>
	@include('modules.form.formgroup',['type'=>'checkbox','showlabel'=>false,'label'=>'Subscribe to Newsletter','id'=>'subscribe_me'])
	@include('modules.form.formgroup',['type'=>'checkbox','showlabel'=>false,'label'=>'I Accept <a href="'.url('tos').'" target="_blank">Terms of Service</a>.','id'=>'tos'])
  {!! Form::submit('Register',['class'=>'btn btn-default','data-action'=>'register']) !!}

	<hr class="tiny">

@include('modules.user.social')
{!! Form::close() !!}