@extends('emails.master')

@section('content')
<h1>Contact Form Submitted</h1>
<table class="table">
    <tbody>
        <tr>
            <th scope="row">Vacancy ID</td>
            <td>{{ $vacancy_id ?? '' }}</td>
        </tr>
        <tr>
            <th scope="row">Onyen</td>
            <td>{{ $onyen ?? '' }}</td>
        </tr>
        <tr>
            <th scope="row">Message</td>
            <td>
                {{ $message_text ?? '' }}
            </td>
        </tr>
        <tr>
            <th scope="row">Time</td>
            <td>{{ $current_time ?? '' }}</td>
        </tr>
        <tr>
            <th scope="row">Environment</td>
            <td>{{ $app_env ?? '' }}</td>
        </tr>
        <tr>
            <th scope="row">Details</td>
            <td>
                <pre>{{ $details ?? '' }}</pre>
            </td>
        </tr>
    </tbody>
</table>
@endsection
