<div class="step-addproject">
	<h3>Add Project</h3>
	<p class="alert alert-info">Please fill in the fields carefully, you won't be able to change them later on. </p>
	@include('modules.form.formgroup',['type'=>'text','label'=>'Project Name','id'=>'title',$required='required'])
	@include('modules.form.formgroup',['type'=>'select','label'=>'Category','id'=>'category_ids',$required='required','option'=>$categories])
	@include('modules.form.formgroup',['type'=>'text','label'=>'Slug','id'=>'slug',$required='required','option'=>$categories,'note'=>'Your address will be as follows http://poloniago.com/projects/YOUR_PROJECT_TITLE'])
	{!! Form::hidden('step','addproject',['class'=>'step']) !!}
	{!! Form::submit('Submit',['class'=>'btn btn-default next']) !!}
</div>