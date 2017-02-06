@extends('layouts.default')
@section('header')
    @parent
@endsection
@section('content')
    @include('errors.errors')
    <div class="container">
            <h4>All Users: </h4>
        <table class="table table-bordered table-striped datatable">
            <thead>
            <tr>
                <th class="hidden-mobile">{{{trans('user.user_id')}}}</th>
                <th>{{{trans('user.name')}}}</th>
                <th>{{{trans('user.username')}}}</th>
                <th>{{{trans('user.email')}}}</th>
                <th class="hidden">{{{trans('user.bio')}}}</th>
                <th>{{{trans('user.user_role')}}}</th>
                <th>{{{trans('user.status')}}}</th>
                <th>{{{trans('user.registered_on')}}}</th>
                <th class="hidden">{{{trans('user.actions')}}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $u)
                @include('modules.user.table.item')
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


