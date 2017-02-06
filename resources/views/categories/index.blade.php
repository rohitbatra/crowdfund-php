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
		<table class="table table-striped table-bordered datatable">
			<thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $c)
                <tr>
                    <td>{{{$c->title}}}</td>
                    <td>{{{$c->slug}}}</td>
                    <td>{{{$c->description}}}</td>
                    <td>
                        <a href="{{{url('admin/categories/edit/'.$c->id)}}}" class="btn"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a>
                        <a href="{{{url('admin/categories/delete/'.$c->id)}}}" class="btn text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
		</table>
	@endif
	</div>
@endsection
