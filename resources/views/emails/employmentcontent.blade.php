<div class="alert alert-success">
        <h3>Your employment application was submitted successfully!</h3>
        <p class="lead">A confirmation email has been sent to
        <strong>{{ $employment->email }}</strong>.</p>
</div>

<p class="lead text-muted">To recap, here are the details:</p>
<table class="table">
    <tbody>
        <tr>
            <th scope="row">Name</td>
            <td>
            {{ $employment->first_name }}&nbsp;{{ $employment->last_name }}
            </td>
        </tr>
        <tr>
            <th scope="row">Address</td>
            <td>
                {{ $employment->address_1 }}
                @isset($employment->address_2)
                <br />
                {{ $employment->address_2 }}
                @endisset
                <br />
                {{ $employment->city . ', ' . $employment->state->initial . ' ' . $employment->zip }}
            </td>
        </tr>
        <tr>
            <th scope="row">Phone</td>
            <td>
                <a href="tel:+{{ $employment->phone }}" title="{{ $employment->phone }}">
                {{ $employment->phone }}
                </a>
            </td>
        </tr>
        <tr>
            <th scope="row">Email</td>
            <td>
                <a href="mailto:{{ $employment->email }}" title="{{ $employment->email }}">
                {{ $employment->email }}
                </a>
            </td>
        </tr>
        <tr>
            <th scope="row">Has Driver's License</td>
            <td>
                {{ $employment->valid_license === true ? 'Yes' : 'No' }}
            </td>
        </tr>
        <tr>
            <th scope="row">How did you find out this job?</td>
            <td>
                {{ $employment->learned_about_us ?? 'N/A' }}
            </td>
        </tr>
    </tbody>
</table>

<p class="lead text-muted">We will contact you soon to let you know whether your
application was selected for an interview. Thanks for choosing C &amp; J
Towing Services!</p>
