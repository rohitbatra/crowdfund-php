@extends('email.general')
@section('emailbody')

    <table border="0" cellpadding="0" cellspacing="0" class="body">
        <tr>
            <td>&nbsp;</td>
            <td class="container">
                <div class="content"><span class="preheader">Thank you for your new Submission.</span>
                    <table class="main">
                        <tr>
                            <td class="wrapper">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <p>Hi {{{$user->fullname}}},</p>
                                            <p>Thank You for submitting a new Project - {{{$project->title}}}</p>
                                            <p>Your submission will be reviewed by our Team & approved if it meets all the necessary requirements. We will keep you posted on its status.</p>
                                            <p>If you've any doubt's or concerns, please do write us at <a href="mailto:support@poloniago.com">support@poloniago.com</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>This is an automated response, please do not reply to this email.</p>

                                            <p>Thanks!</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
@stop