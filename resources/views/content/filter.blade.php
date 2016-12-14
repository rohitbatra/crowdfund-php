{!! Form::open(array('url'=>'admin/content','method'=>'get','class'=>'form-inline')) !!}
	
		@include('modules.form.formgroup',['type'=>'text','label'=>'Title','id'=>'title'])
		@include('modules.form.formgroup',['type'=>'select','label'=>'Type','id'=>'type','option'=>$content_type_options])
		@include('modules.form.formgroup',['type'=>'select','label'=>'Category','id'=>'category_id','option'=>$categories])
		@include('modules.form.formgroup',['type'=>'select','label'=>'Status','id'=>'status','option'=>['publish'=>'Publish','draft'=>'Draft','trashed'=>'Trash']])
	<button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<hr>