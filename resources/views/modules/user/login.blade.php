{!! Form::open(array('url'=>'user/login','method'=>'post','class'=>'preventSubmit')) !!}
	@include('modules.form.formgroup',['type'=>'email','label'=>'E-mail','id'=>'email',$required='required'])
	@include('modules.form.formgroup',['type'=>'password','label'=>'Password','id'=>'password',$required='required'])
	<div class="checkbox">
		<label>
			{!! Form::checkbox('remember_me',null,false,["id"=>"remember_me"]) !!} Remember Me
		</label>
	</div>
	{!! Form::submit('Login',['class'=>'btn btn-default','data-action'=>'login']) !!}

	<hr class="tiny">

	@include('modules.user.social')
{!! Form::close() !!}