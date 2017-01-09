{!! Form::open(array('url'=>'admin/content/store','method'=>'post','class'=>'')) !!}
	@if (!isset($content) && empty($content))
		<?php $content = null;?>
	@else
		{!! Form::hidden('id',$content->id) !!}
	@endif

	@include('modules.form.formgroup',['data'=>$content,'type'=>'text','label'=>'Title','id'=>'title','required'=>true])
	@include('modules.form.formgroup',['data'=>$content,'type'=>'text','label'=>'Slug','id'=>'slug','required'=>true,'note'=>'Slug for a Page is its URL like "https://poloniago.com/SLUG"'])
	<div class="row">
		<div class="col-md-2">
			@include('modules.form.formgroup',['data'=>$content,'type'=>'select','label'=>'Status','id'=>'status','option'=>['draft'=>'Draft','publish'=>'Publish'],'required'=>true,'old'=>'draft',])
		</div>
	</div>
	@include('modules.form.formgroup',['data'=>$content,'type'=>'text','label'=>'Meta Description','id'=>'description','note'=>'META Description is for SEO & SEM purposes only.'])
	@include('modules.form.formgroup',['data'=>$content,'type'=>'textarea','label'=>'Content','id'=>'content','cke'=>true])
		
	{!! Form::submit('Submit',['class'=>'btn btn-default']) !!}
{!! Form::close() !!}