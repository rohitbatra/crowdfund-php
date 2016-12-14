@extends('email.general')
@section('emailbody')
<h3>Hello {{{$user->fullname}}}</h3>
<p>
You got a new mail from {{{$fullname}}}.
</p>
<p>
{{{$mailmessage}}}
</p>
@stop