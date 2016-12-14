{!! Form::open(array('url'=>'/','method'=>'post','class'=>'preventSubmit')) !!}
	@include('modules.form.formgroup',['type'=>'text','label'=>'Goal Title','id'=>'title','required'=>'required'])
	@include('modules.form.formgroup',['type'=>'textarea','label'=>'Description','id'=>'description','required'=>'required'])
	@include('modules.form.formgroup',['type'=>'date','label'=>'Start Date','id'=>'start','required'=>'required'])
	@include('modules.form.formgroup',['type'=>'date','label'=>'End Date','id'=>'end','required'=>'required'])
	@include('modules.form.formgroup',['type'=>'number','label'=>'Stage','id'=>'phase','required'=>'required'])
	@include('modules.form.formgroup',['type'=>'currency','label'=>'Capital Required','id'=>'goal','required'=>'required'])
	<button class="btn btn-default" data-action="addGoal" type="button">Add Goal</button>
{!! Form::close() !!}