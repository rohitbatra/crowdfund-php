{!! Form::open(array('url'=>'user/contact','method'=>'post','class'=>'preventSubmit')) !!}
	{!! Form::hidden('id',$user->id)!!}
	@include('modules.form.formgroup',['type'=>'email','label'=>'Your E-Mail','id'=>'email',$required='required'])
	@include('modules.form.formgroup',['type'=>'text','label'=>'Full Name','id'=>'fullname',$required='required'])
	@include('modules.form.formgroup',['type'=>'textarea','label'=>'Message','id'=>'message',$required='required'])
	{!! Form::submit('Send',['class'=>'btn btn-default','data-action'=>'contactUser']) !!}
{!! Form::close() !!}