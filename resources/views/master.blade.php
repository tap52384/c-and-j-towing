@include('header')

@if(Request::is('/'))
    <section id="home-intro" class="intro pt-5 pb-5">
        <div class="container">
            <h2>You Call, We Haul</h2>
            <h1>@cjtowingllc</h1>
            <h2 class="mb-5">Best prices in the Triangle and surrounding areas</h2>
            <a class="btn btn-lg btn-cj" href="/contact#contact-us-form">Schedule an Appointment</a>
        </div>
    </section>
@else
    @component('subheader')
    @endcomponent
@endif

@section('content')
<section class="container second-content-row">
            <div class="row my-3">
                <div class="col">
                    <h2 class="text-center">Top Customer Service</h2>
                    <img src="img/single-star.jpg" title="Top Customer Service" class="img-fluid" />
                    <ul class="mb-1">
                        <li class="lead">Affordable, Competitive Rates</li>
                        <li class="lead">Quick, Reliable & Efficient</li>
                        <li class="lead">High Quality Towing</li>
                        <li class="lead">Friendly & Professional Service</li>
                        <li class="lead">Known for Customer Satisfaction</li>
                    </ul>
                    <a class="btn btn-lg btn-block btn-outline-cj"
                        href="https://www.facebook.com/pg/cnjtowingandrecovery/reviews/">See Real Customer Reviews</a>
                </div>
                <div class="col">
                    <h2 class="text-center">Have AAA?</h2>
                    <img src="img/aaa_logo.png" title="Have AAA?" class="img-fluid mb-2" />
                    <p class="lead mt-3 mb-5">
                        Call us directly for faster service and we
                        will be sure to charge AAA and not you! Call
                        or text us today!
                    </p>
                    <a class="btn btn-lg btn-block btn-outline-cj" href="tel:+19842440240">Call Us Now</a>
                </div>
                <div class="col">
                    <h2>Tow Truck Driver Wanted</h2>
                    <img src="img/tow-truck.jpg" title="Tow Truck Driver Wanted" class="img-fluid mb-2" />
                    <p class="lead mt-3 mb-5">
                        Are you an experienced tow truck driver with
                        great customer service experience? Join our
                        team!
                    </p>
                    <a class="btn btn-lg btn-block btn-outline-cj" href="./employment.html" title="Apply Now">Apply
                        Now</a>
                </div> <!-- /.col -->
            </div><!-- /.row -->
        </section>

        <section class="container">
            <hr class="featurette-divider" />
            <h2 class="featurette-heading mb-4 text-center">On the side of the road? <span class="text-muted text-cj">We have
                    you covered.</span></h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <a href="/services#24-hour-towing" title="24-Hour Towing">
                            <span class="ibox-icon">
                                <i class="fa-2x fa fa-clock-o"></i>
                            </span>
                            <p class="lead text-muted pt-3">
                                24-Hour Towing
                            </p>
                        </a>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
                <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <a href="./services.html#battery-replacement" title="Battery Replacement">
                            <span class="ibox-icon">
                                <i class="fa-2x fa fa-battery"></i>
                            </span>
                            <p class="lead text-muted pt-3">
                                Battery Replacement
                            </p>
                        </a>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
                <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <a href="./services.html#fuel-delivery" title="Fuel Delivery &amp; Refill">
                            <span class="ibox-icon">
                                <i class="fa-2x fa fa-car"></i>
                            </span>
                            <p class="lead text-muted pt-3">
                                Fuel Delivery &amp; Refill
                            </p>
                        </a>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <a href="./services.html#locksmith-service" title="Locksmith Service &amp; Car Unlocking">
                            <span class="ibox-icon">
                                <i class="fa-2x fa fa-car"></i>
                            </span>
                            <p class="lead text-muted pt-3">
                                Locksmith Service &amp; Car Unlocking
                            </p>
                        </a>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-6 -->
                <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <a href="./services.html#roadside-service" title="Roadside Service">
                            <span class="ibox-icon">
                                <i class="fa-2x fa fa-road"></i>
                            </span>
                            <p class="lead text-muted pt-3">
                                Roadside Service
                            </p>
                        </a>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
                <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <a href="./services.html#tire-repair" title="Tire Repair &amp; Replacement">
                            <span class="ibox-icon">
                                <i class="fa-2x fa fa-car"></i>
                            </span>
                            <p class="lead text-muted pt-3">
                                Tire Repair &amp; Replacement
                            </p>
                        </a>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
            </div><!-- /.row -->
        </section>
@show

@include('footer')
