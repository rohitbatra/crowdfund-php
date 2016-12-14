{!! Form::open(array('url'=>'/','method'=>'post','class'=>'preventSubmit')) !!}
	@include('modules.form.formgroup',['type'=>'text','label'=>'Reward Title','id'=>'title','required'=>'required'])
	@include('modules.upload.uploaditem',['id'=>'reward_image','label'=>'Picture','view'=>'create'])
	@include('modules.form.formgroup',['type'=>'textarea','label'=>'Description','id'=>'description','required'=>'required'])
	@include('modules.form.formgroup',['type'=>'currency','label'=>'Value','id'=>'value','required'=>'required'])
	@include('modules.form.formgroup',['type'=>'number','label'=>'Amount','id'=>'amount','required'=>'required'])
	@include('modules.form.formgroup',['type'=>'date','label'=>'Estimated Date','id'=>'estimated_date','required'=>'required'])
	<button class="btn btn-default" data-action="addReward" type="button">Add</button>
{!! Form::close() !!}