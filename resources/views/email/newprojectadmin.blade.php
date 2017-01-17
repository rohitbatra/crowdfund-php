@extends('email.general')
@section('emailbody')

    <table border="0" cellpadding="0" cellspacing="0" class="body">
        <tr>
            <td>&nbsp;</td>
            <td class="container">
                <div class="content"><span class="preheader">New Project - {{{$project->title}}} | Submission.</span>
                    <table class="main">
                        <tr>
                            <td class="wrapper">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <p>Howdy,</p>
                                            <p>We've a new Project Submission for you to review.</p>
                                            <p>Please <a href='{{{url('user/login')}}}'>Login</a> & head to Projects section to review the new submissions.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Thanks!</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
@stop