<div class="step-addproject">
	<h3>Add Project</h3>
	<p class="alert alert-info">Please fill in the below fields carefully, you won't be able to change them later on. </p>
	@include('modules.form.formgroup',['type'=>'text','label'=>'Project Name','id'=>'title',$required='required'])
	@include('modules.form.formgroup',['type'=>'select','label'=>'Category','id'=>'category_ids',$required='required','option'=>$categories])
	@include('modules.form.formgroup',['type'=>'text','label'=>'Slug','id'=>'slug',$required='required','note'=>'Your URL will be as follows https://poloniago.com/projects/SLUG'])
	{!! Form::hidden('step','addproject',['class'=>'step']) !!}
	{!! Form::submit('Submit',['class'=>'btn btn-default next']) !!}
</div>