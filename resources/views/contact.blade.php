@extends('master')

@section('content')
<div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <span class="ibox-icon" \>
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
                        <p><a href="mailto:cjwhite255@gmail.com" title="cjwhite255@gmail.com">cjwhite255@gmail.com</a>
                        </p>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <span class="ibox-icon">
                            <i class="fa fa-fax"></i>
                        </span>
                        <h3 class="text-muted pt-3">Fax</h3>
                        <p>(123) 456-7890</p>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
                <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <span class="ibox-icon">
                            <i class="fa fa-map-marker"></i>
                        </span>
                        <h3 class="text-muted pt-3">Directions to Us</h3>
                        <p><a href="#" title="Click here for directions via Google Maps">Click Here</a></p>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
                <div class="col-md-4">
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
                <div class="form-row mb-2">
                    <div class="col">
                        <label for="first-name" class="font-weight-bold">First Name</label>
                        <input type="text" class="form-control" id="first-name" name="first-name"
                            autocomplete="given-name" />
                    </div>
                    <div class="col">
                        <label for="last-name" class="font-weight-bold">Last Name</label>
                        <input type="text" class="form-control" id="last-name" autocomplete="family-name" />
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col">
                        <label for="email-address" class="font-weight-bold">Email</label>
                        <input type="email" class="form-control" id="email-address" autocomplete="email"
                            autocapitalize="off" />
                    </div>
                    <div class="col">
                        <label for="phone-number" class="font-weight-bold">Phone Number</label>
                        <input type="tel" class="form-control" id="phone-number" required title="(123) 456-7890"
                            autocomplete="tel" />
                    </div>
                </div> <!-- /.form-row mb-2 -->
                <div class="form-row mb-2">
                    <div class="form-group col-md-2">
                        <label for="vehicle-year" class="font-weight-bold">Vehicle Year</label>
                        <input type="text" class="form-control" id="vehicle-year" />
                    </div>
                    <div class="form-group col-md-5">
                        <label for="vehicle-make" class="font-weight-bold">Vehicle Make</label>
                        <input type="text" class="form-control" id="vehicle-make" />
                    </div>
                    <div class="form-group col-md-5">
                        <label for="vehicle-model" class="font-weight-bold">Vehicle Model</label>
                        <input type="text" class="form-control" id="vehicle-model" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact-message" class="font-weight-bold">Message</label>
                    <textarea id="contact-message" name="contact-message" class="form-control" rows="7"></textarea>
                </div>
                <button type="submit" id="submit-contact-form" class="btn btn-block btn-outline-cj btn-lg mb-3">Submit
                    Form</button>
            </form>
        </div> <!-- /.container -->
@endsection
