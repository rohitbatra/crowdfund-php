{!! Form::open(array('url'=>'search/user','method'=>'post','class'=>'preventSubmit')) !!}
	
	<div class="input-group form-group">
		{!! Form::text('searchuserfield',old('searchuserfield'),['class'=>'form-control required','placeholder'=>'Search member's name or e-mail','id'=>'searchuserfield']) !!}
		<span class="input-group-btn">
			<button class="btn btn-default" data-action="searchUser" type="button">Search</button>
		</span>
	</div>
	
	<div class="userlistmodal">
	</div>
{!! Form::close() !!}