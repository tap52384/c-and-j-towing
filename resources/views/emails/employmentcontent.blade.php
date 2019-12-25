<h3>Your employment application was submitted successfully!</h3>
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
                {{ $employment->phone }}
            </td>
        </tr>
        <tr>
            <th scope="row">Email</td>
            <td>
                {{ $employment->email }}
            </td>
        </tr>
        <tr>
            <th scope="row">Has Driver's License</td>
            <td>
                {{ $employment->valid_license === true ? 'Yes' : 'No' }}
            </td>
        </tr>
        <tr>
            <th scope="row">How did you find this job?</td>
            <td>
                {{ $employment->learned_about_us }}
            </td>
        </tr>
    </tbody>
</table>

<p class="lead text-muted">A member of our team will be reaching out to
you once your application has been reviewed. Thanks for choosing C &amp; J
Towing Services!</p>