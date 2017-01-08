
<div class="container">
{!! Form::open(array('url'=>'admin/categories/store','method'=>'post','class'=>'')) !!}
    @if (isset($category))
		{!! Form::hidden('id',$category->id) !!}
		@include('modules.form.formgroup',['data'=>$category, 'type'=>'text','label'=>'Name','id'=>'title',$required='required'])
		@include('modules.form.formgroup',['data'=>$category, 'type'=>'text','label'=>'Slug','id'=>'slug',$required='required'])
		@include('modules.form.formgroup',['data'=>$category, 'type'=>'text','label'=>'Description','id'=>'description',$required=''])
		{!! Form::submit('Edit Category',['class'=>'btn btn-default btn-danger']) !!}
	@else
		@include('modules.form.formgroup',['type'=>'text','label'=>'Name','id'=>'title',$required='required'])
		@include('modules.form.formgroup',['type'=>'text','label'=>'Slug','id'=>'slug',$required='required'])
		@include('modules.form.formgroup',['type'=>'text','label'=>'Description','id'=>'description',$required=''])
		{!! Form::submit('Save Category',['class'=>'btn btn-default btn-info']) !!}
	@endif
{!! Form::close() !!}
</div>