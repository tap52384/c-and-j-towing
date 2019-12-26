<div class="alert alert-success">
        <h3>Your contact form was submitted successfully!</h3>
        @isset($contact->email)
        <p class="lead">A confirmation email has been sent to
        <strong>{{ $contact->email }}</strong>.</p>
        @endisset
</div>

<p class="lead text-muted">To recap, here are the details:</p>
<table class="table">
    <tbody>
        <tr>
            <th scope="row">Name</td>
            <td>
            {{ $contact->first_name }}&nbsp;{{ $contact->last_name }}
            </td>
        </tr>
        <tr>
            <th scope="row">Phone</td>
            <td>
                <a href="tel:+{{ $contact->phone }}" title="{{ $contact->phone }}">
                {{ $contact->phone }}
                </a>
            </td>
        </tr>
        <tr>
            <th scope="row">Email</td>
            <td>
                <a href="mailto:{{ $contact->email }}" title="{{ $contact->email }}">
                {{ $contact->email }}
                </a>
            </td>
        </tr>
        <tr>
            <th scope="row">Vehicle</td>
            <td>
                {{ $contact->vehicle_year . ' ' . $contact->vehicle_make . ' ' .
                $contact->vehicle_model }}
            </td>
        </tr>
        <tr>
            <th scope="row">Message</td>
            <td>
                {{ $contact->message }}
            </td>
        </tr>
    </tbody>
</table>

<p class="lead text-muted">We will contact you soon in response to your request.
Thanks for choosing C &amp; J Towing Services!</p>
