@extends('email.general')
@section('emailbody')

<table border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content"><span class="preheader">Thank you for signing-up with PoloniaGo.</span>
                <table class="main">
                    <tr>
                        <td class="wrapper">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <p>Hi {{{$user->fullname}}},</p>
                                        <p>Thank You for Registering.</p>
                                        <p>If you've not registered with us at
                                            <a href="https://poloniago.com">PoloniaGo</a>, you can just ignore this
                                            email.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>This is an automated response, please do not reply to this email. If you want
                                            to contact us, mail us at <a href="mailto:support@poloniago.com">support@poloniago.com</a></p>

                                        <p>Thanks!</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
@stop