@extends('layouts.default')
@section('header')
	@parent
	@include('content.actions')
@endsection

@section('content')
	@include('errors.errors')
	@if(isset($contents) && !empty($contents))
		<table class="table table-striped table-bordered">
			<tr>
                <th>{{trans('messages.title')}}</th>
                <th>{{trans('messages.status')}}</th>
                <th colspan="3" class="text-center">{{trans('messages.actions')}}</th>
            </tr>
			@foreach($contents as $c)
			<tr>
                <td><a href="{{{$c->url}}}">{{{$c->title}}}</a></td>
                <td>{{{ucfirst($c->status)}}}</td>
                <td class="text-center">
					<a href="{{{url('admin/content/edit/'.$c->id)}}}" class="btn"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> {{trans('messages.edit')}}</a>
                </td>
                <td class="text-center">
                    @if($c->trashed())
						<a href="{{{url('admin/content/restore/'.$c->id)}}}" class="btn text-success"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> {{trans('messages.restore')}}</a>
					@else
						<a href="{{{url('admin/content/delete/'.$c->id)}}}" class="btn text-muted"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> {{trans('messages.trash')}}</a>
					@endif
                </td>
                <td class="text-center">
					<a href="{{{url('admin/content/destroy/'.$c->id)}}}" class="btn text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{trans('messages.destroy')}}</a>
                </td>
            </tr>
			@endforeach
			<tfoot>
				{!! $contents->links() !!}
			</tfoot>
		</table>
	@endif
@endsection