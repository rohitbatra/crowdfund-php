@if(!$user)
	@include('modules.user.login')
        Please sign in or before claiming rewards <a href="{{{url('user/register')}}}" target="_blank">Click here</a> to register.
	<hr>
	<h4>Lorem Ipsum.</h4>
	{!! Form::open(array('url'=>'user/store','method'=>'post','class'=>'')) !!}
		@include('modules.form.formgroup',['type'=>'text','label'=>'Full Name','id'=>'fullname',$required='required'])
		@include('modules.form.formgroup',['type'=>'email','label'=>'E-Mail','id'=>'email',$required='required'])
		@include('modules.form.formgroup',['type'=>'text','label'=>'Password','id'=>'password',$required='required'])
		<ul class="reward-claim-list">
			<li>
				Project you backed: <a href="{{{$reward->project->url}}}" target="_blank" alt="{{{$reward->project->title}}}">{{{$reward->project->title}}}</a>
					{!! Form::hidden('project_id',$reward->project->id)!!}
			</li>
			<li>
				Your Reward: <b>{{{$reward->title}}} x 1 (ширхэг)</b>
					{!! Form::hidden('id',$reward->id)!!}
			</li>
			<li>
				<p class="bg-success">Reward Value: <b>{{{number_format($reward->value)}}} ₮</b></p>
					{!! Form::hidden('value',$reward->value)!!}
			</li>
		</ul>
		{!! Form::submit('Payment',['class'=>'btn btn-default','data-action'=>'claimreward']) !!}
	{!! Form::close() !!}
@else
	{!! Form::open(array('url'=>'user/store','method'=>'post','class'=>'')) !!}
		<ul class="reward-claim-list">
			<li>
				Project you Backed: <a href="{{{$reward->project->url}}}" target="_blank" alt="{{{$reward->project->title}}}">{{{$reward->project->title}}}</a>
					{!! Form::hidden('project_id',$reward->project->id)!!}
			</li>
			<li>
				Reward: <b>{{{$reward->title}}} x 1 (ширхэг)</b>
					{!! Form::hidden('id',$reward->id)!!}
			</li>
			<li>
				<p class="bg-success">Reward Value: <b>{{{number_format($reward->value)}}} ₮</b></p>
					{!! Form::hidden('value',$reward->value)!!}
			</li>
		</ul>
		{!! Form::submit('Claim Reward',['class'=>'btn btn-default','data-action'=>'claimreward']) !!}
	{!! Form::close() !!}
@endif
