
{!! Form::open(array('url'=>'admin/categories/store','method'=>'post','class'=>'')) !!}
	@if (isset($category))
		{!! Form::hidden('id',$category->id) !!}
		@include('modules.form.formgroup',['type'=>'text','label'=>'Position','id'=>'position',$required='','old'=>$category->position])
		@include('modules.form.formgroup',['type'=>'text','label'=>'Name','id'=>'title',$required='required','old'=>$category->title])
		@include('modules.form.formgroup',['type'=>'text','label'=>'Slug','id'=>'slug',$required='required','old'=>$category->slug])
		@include('modules.form.formgroup',['type'=>'select','label'=>'Type','id'=>'type',$required='required','option'=>$category_type_options,'old'=>$category->type])
		@include('modules.form.formgroup',['type'=>'text','label'=>'Description','id'=>'description',$required='','old'=>$category->description])
		{!! Form::submit('Edit Category',['class'=>'btn btn-default btn-danger']) !!}
	@else
		@include('modules.form.formgroup',['type'=>'text','label'=>'Position','id'=>'position',$required=''])
		@include('modules.form.formgroup',['type'=>'text','label'=>'Name','id'=>'title',$required='required'])
		@include('modules.form.formgroup',['type'=>'text','label'=>'Slug','id'=>'slug',$required='required'])
		@include('modules.form.formgroup',['type'=>'select','label'=>'Type','id'=>'type',$required='required','option'=>$category_type_options])
		@include('modules.form.formgroup',['type'=>'text','label'=>'Description','id'=>'description',$required=''])
		{!! Form::submit('Save Category',['class'=>'btn btn-default btn-info']) !!}
	@endif
{!! Form::close() !!}