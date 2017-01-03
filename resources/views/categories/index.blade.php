@extends('layouts.default')
@section('header')
	@parent
	@include('categories.actions')
@endsection

@section('content')
	@include('errors.errors')
	<div class="container">
	@if(isset($category_types))
		<p>Category Types:</p>
		<ul>
		@foreach($category_types as $ct)
			<li><a href="{{{url('admin/categories/'.$ct->slug)}}}">{{{$ct->title}}}</a></li>
		@endforeach
		</ul>
	@endif
	@if(isset($categories) && !empty($categories))
		<table class="table table-striped table-bordered">
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Slug</th>
				<th>Type</th>
			</tr>
			@foreach($categories as $c)
			<tr>
				<td>{{{$c->id}}}</td>
				<td>{{{$c->title}}}</td>
				<td>{{{$c->slug}}}</td>
				<td>{{{$c->typetitle}}}</td>
			</tr>
			@endforeach
		</table>
	@endif
	</div>
@endsection
