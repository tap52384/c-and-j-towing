@extends('master')

@section('content')

@component('subheader')
    @slot('subheaderTitle')
        Contact Us
    @endslot
    @slot('subheader_icon')
        <i class="fa-2x fa fa-address-book"></i>
    @endslot
    @empty($contact)
    @slot('subheader_intro')
        All day, every day, we're available to meet your towing needs!
    @endslot
    @endempty
@endcomponent

@if ($errors->any())
    <div class="alert alert-danger">
        <h3>The following errors were encountered:</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@empty($contact)
<div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <span class="ibox-icon">
                            <i class="fa fa-home"></i>
                        </span>
                        <h3 class="text-muted pt-3">Address</h3>
                        <p>C &amp; J Towing and Recovery Services<br>
                            Raleigh, NC</p>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
                <div class="col-md-4">
                    <div class="darna-icon-box style4 pb-3">
                        <span class="ibox-icon" title="">
                            <i class="fa fa-phone"></i>
                        </span>
                        <h3 class="text-muted pt-3">Phone</h3>
                        <p><a href="tel:+19842440240" title="(984) 244-0240">(984) 244-0240</a></p>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
                <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <span class="ibox-icon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <h3 class="text-muted pt-3">Email</h3>
                        <p><a href="mailto:info@candjtowingservices.com" title="info@candjtowingservices.com">info@candjtowingservices.com</a>
                        </p>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
            </div> <!-- /.row -->
            <div class="row">
                {{-- <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <span class="ibox-icon">
                            <i class="fa fa-fax"></i>
                        </span>
                        <h3 class="text-muted pt-3">Fax</h3>
                        <p>(123) 456-7890</p>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 --> --}}
                <div class="col-md-6">
                    <div class="darna-icon-box style4">
                        <span class="ibox-icon">
                            <i class="fa fa-map-marker"></i>
                        </span>
                        <h3 class="text-muted pt-3">Directions to Us</h3>
                        <p><a href="#" title="Click here for directions via Google Maps">Click Here</a></p>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
                <div class="col-md-6">
                    <div class="darna-icon-box style4">
                        <span class="ibox-icon">
                            <i class="fa fa-facebook"></i>
                        </span>
                        <h3 class="text-muted pt-3">Social Media</h3>
                        <p><a href="https://www.facebook.com/pg/cnjtowingandrecovery" title="Like us on Facebook!">Like
                                us on Facebook!</a></p>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
            </div> <!-- /.row -->

            <h2 class="mt-5 mb-5 text-center">
                <a id="contact-us-form" title="Contact Us Form"></a>
                Contact Us Form
            </h2>
            <form method="post">
                @csrf
                <div class="form-row mb-2">
                    <div class="col">
                        <label for="first_name" class="font-weight-bold">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                            autocomplete="given-name" required />
                    </div>
                    <div class="col">
                        <label for="last_name" class="font-weight-bold">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" autocomplete="family-name"
                        required />
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col">
                        <label for="email" class="font-weight-bold">Email</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="email"
                            autocapitalize="off" />
                    </div>
                    <div class="col">
                        <label for="phone" class="font-weight-bold">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required title="(123) 456-7890"
                            autocomplete="tel" required />
                    </div>
                </div> <!-- /.form-row mb-2 -->
                <div class="form-row mb-2">
                    <div class="form-group col-md-2">
                        <label for="vehicle_year" class="font-weight-bold">Vehicle Year</label>
                        <input type="text" class="form-control" id="vehicle_year" name="vehicle_year" required />
                    </div>
                    <div class="form-group col-md-5">
                        <label for="vehicle_make" class="font-weight-bold">Vehicle Make</label>
                        <input type="text" class="form-control" id="vehicle_make" name="vehicle_make" required />
                    </div>
                    <div class="form-group col-md-5">
                        <label for="vehicle_model" class="font-weight-bold">Vehicle Model</label>
                        <input type="text" class="form-control" id="vehicle_model" name="vehicle_model" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="font-weight-bold">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="7" maxlength="4000" required></textarea>
                </div>
                <button type="submit" id="submit-contact-form" name="submit-contact-form" class="btn btn-block btn-outline-cj btn-lg mb-3">
                Submit Form</button>
            </form>
        </div> <!-- /.container -->
        @else

<div class="container mt-3 mb-5">
    @include('emails.contactcontent')
</div>
@endempty

@endsection
