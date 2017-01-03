@extends('email.general')
@section('emailbody')

<h3>Hello {{{$user->fullname}}}</h3>
<p>
Thank You for Registering.
</p>
<p>
If you've not registered with us at <a href="https://www.poloniago.com">PoloniaGo</a>, you can just ignore this email.
</p>
<p>
This is an automated response, please do not reply to this email. If you want to contact us, mail us at <a href="mailto:support@poloniago.com">support@poloniago.com</a> .
</p>

<p>
Regards,
PoloniGo Team

</p>
@stop