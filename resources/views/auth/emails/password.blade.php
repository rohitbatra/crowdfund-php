@extends('email.general')
@section('emailbody')
<h3>Hi,</h3>
<p>
You've requested to reset your Password. Please use the link below.
<hr>
<a target="_blank" href="{{ url('password/reset/'.$token) }}">Click Here</a> to Reset your Passwod.
</p>
<p>
This is an automated response, please do not respond to this email. If you're facing any issues, please write to us at support@poloniago.com
</p>
@stop