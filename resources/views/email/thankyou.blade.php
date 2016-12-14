@extends('email.general')
@section('emailbody')
<h3>Hello {{{$user->fullname}}}</h3>
<p>
Thank You for Signing-Up.
<hr>
If you've not regsitered with us at <a href="http://www.poloniago.com">PoloniaGo</a>, you can just ignore this email.
</p>
<p>
This is an automated response, please do not reply to this email. If you want to contact us, mail us at support@poloniago.com.
</p>
@stop