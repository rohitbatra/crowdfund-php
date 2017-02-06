<tr>
    <td class="hidden-mobile">
        {{{$u->id}}}
    </td>
    <td>
        <span class="inline text-justify"> <img src="{{{ asset('images/avatar/thumbnail/'.$u->avatar.'') }}}" width="35px" height="35px"/>  {{{$u->firstname}}} {{{$u->lastname}}} </span>
    </td>
    <td>{{{$u->username}}}</td>
    <td>
        {{{$u->email}}}
    </td>
    <td class="hidden">
        {{{$u->bio}}}
    </td>
    <td>
        @if($u->role == '2')
            <span class="text-info">User</span>
        @elseif($u->role == '1')
            <span class="text-danger"> <strong>Admin</strong></span>
        @endif
    </td>
    <td>
        @if($u->status == '1')
            <span class="text-success">Active</span>
            @if($u->role == '2')
                <a href="{{{url('admin/users/lock/'.$u->id)}}}" class="btn text-danger" title="{{{trans('user.lock')}}}"><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span></a>
            @endif
        @else
            <span class="text-danger">In-Active</span>
            @if($u->role == '2')
                <a href="{{{url('admin/users/unlock/'.$u->id)}}}" class="btn text-success" title="{{{trans('user.unlock')}}}"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></a>
            @endif
        @endif
    </td>
    <td> {{{ date('Y-m-d',strtotime($u->created_at)) }}} </td>
    <td class="hidden">
        @if($u->role == '2')
        <a href="{{{url('admin/users/edit/'.$u->id)}}}" class="btn hidden"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> {{{trans('user.edit')}}}</a>
        <a href="{{{url('admin/users/delete/'.$u->id)}}}" class="btn text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{{trans('user.delete')}}}</a>
        @endif
    </td>
</tr>