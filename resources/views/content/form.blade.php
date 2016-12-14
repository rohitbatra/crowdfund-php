{!! Form::open(array('url'=>'admin/content/store','method'=>'post','class'=>'')) !!}
	@if (!isset($content) && empty($content))
		<?php $content = null;?>
	@else
		{!! Form::hidden('id',$content->id) !!}
	@endif

	@include('modules.form.formgroup',['data'=>$content,'type'=>'text','label'=>'Title','id'=>'title','required'=>true])
	@include('modules.form.formgroup',['data'=>$content,'type'=>'text','label'=>'Slug','id'=>'slug','required'=>true,'note'=>'Slug for a Page is to be entered directly, but for blog it has to be "blog/TITLE"'])
	<div class="row">
		<div class="col-md-2">
			@include('modules.form.formgroup',['data'=>$content,'type'=>'select','label'=>'Status','id'=>'status','option'=>['draft'=>'Draft','publish'=>'Publish'],'required'=>true,'old'=>'draft',])
		</div>
		<div class="col-md-3">
			@include('modules.form.formgroup',['data'=>$content,'type'=>'checkbox','label'=>'Featured','id'=>'featured'])
		</div>
		<div class="col-md-3">
			@include('modules.form.formgroup',['data'=>$content,'type'=>'checkbox','label'=>'Comments','id'=>'comments'])
		</div>
		<div class="col-md-2">
			@include('modules.form.formgroup',['data'=>$content,'type'=>'select','label'=>'Type','id'=>'type','required'=>true,'option'=>$content_type_options])
		</div>
		<div class="col-md-2">
			@include('modules.form.formgroup',['data'=>$content,'type'=>'select','label'=>'Category','id'=>'category_id','required'=>true,'option'=>$categories])
		</div>
	</div>
	@include('modules.form.formgroup',['data'=>$content,'type'=>'text','label'=>'Description','id'=>'description'])
	@include('modules.form.formgroup',['data'=>$content,'type'=>'textarea','label'=>'Summary','id'=>'summary'])
	@include('modules.form.formgroup',['data'=>$content,'type'=>'textarea','label'=>'Content','id'=>'content','cke'=>true,'required'=>true])
		
	{!! Form::submit('Submit',['class'=>'btn btn-default']) !!}
{!! Form::close() !!}