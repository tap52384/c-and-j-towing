Your employment application was submitted successfully!

A confirmation email has been sent to {{ $employment->email }}.

To recap, here are the details:

Name: {{ $employment->first_name }}&nbsp;{{ $employment->last_name }}
Address: {{ $employment->address_1 }}
                @isset($employment->address_2)
                <br />
                {{ $employment->address_2 }}
                @endisset
                <br />
                {{ $employment->city . ', ' . $employment->state->initial . ' ' . $employment->zip }}
Phone: {{ $employment->phone }}
Email: {{ $employment->email }}
Has Driver's License: {{ $employment->valid_license === true ? 'Yes' : 'No' }}
How Did You Find Out About This Job? {{ $employment->learned_about_us ?? 'N/A' }}

We will contact you soon to let you know whether your application was selected
for an interview. Thanks for choosing C & J Towing Services!
