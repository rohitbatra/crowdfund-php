@extends('layouts.default')
@section('header')
	@parent
	@include('content.actions')
@endsection

@section('content')
	@include('errors.errors')
	@if(isset($contents) && !empty($contents))
		<table class="table table-striped table-bordered datatable">
            <thead>
                <tr>
                    <th>{{trans('messages.title')}}</th>
                    <th>{{trans('messages.status')}}</th>
                    <th>{{trans('messages.actions')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contents as $c)
                <tr>
                    <td><a href="{{{$c->url}}}" target="_blank">{{{$c->title}}}</a></td>
                    <td>{{{ucfirst($c->status)}}}</td>
                    <td>
                        <a href="{{{url('admin/content/edit/'.$c->id)}}}" class="btn"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> {{trans('messages.edit')}}</a>

                        @if($c->trashed())
                            <a href="{{{url('admin/content/restore/'.$c->id)}}}" class="btn text-success"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> {{trans('messages.restore')}}</a>
                        @else
                            <a href="{{{url('admin/content/delete/'.$c->id)}}}" class="btn text-muted"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> {{trans('messages.trash')}}</a>
                        @endif

                        <a href="{{{url('admin/content/destroy/'.$c->id)}}}" class="btn text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{trans('messages.destroy')}}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
		</table>
	@endif
@endsection