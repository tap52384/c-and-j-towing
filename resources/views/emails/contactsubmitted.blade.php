@extends('emails.master')

@section('content')
<h3>Your contact request has been submitted successfully!</h3>
<p class="lead text-muted">To recap, here are the details:</p>
<table class="table">
    <tbody>
        <tr>
            <th scope="row">Customer</td>
            <td>Here is some text<br />and more...</td>
        </tr>
        <tr>
            <th scope="row">Vehicle</td>
            <td>{{ $onyen ?? '' }}</td>
        </tr>
        <tr>
            <th scope="row">Message</td>
            <td>
                {{ $message_text ?? 'No message text entered.' }}
            </td>
        </tr>
    </tbody>
</table>

<p class="lead text-muted">A member of our team will be reaching out to you shortly.</p>
@endsection
