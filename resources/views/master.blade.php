@php
$serviceList = [
    '24-hour-towing' => [
        'anchor-name' => '24-hour-towing',
        'catchy-desc-dark' => 'Flatbed towing.',
        'catchy-desc-light' => '24 hours a day, every day.',
        'details' => '',
        'font-awesome' => 'fa-clock-o',
        'display-name' => '24-Hour Towing'
    ],
    'battery-replacement' => [
        'anchor-name' => 'battery-replacement',
        'catchy-desc-dark' => 'Battery died?',
        'catchy-desc-light' => 'A new one is a call away.',
        'details' => '',
        'font-awesome' => 'fa-battery',
        'display-name' => 'Battery Replacement'
    ],
    'fuel-delivery' => [
        'anchor-name' => 'fuel-delivery',
        'catchy-desc-dark' => 'Tank empty?',
        'catchy-desc-light' => 'We deliver both gas and diesel.',
        'details' => 'If you suspect your battery is having problems, we can ' .
        'test it within minutes and jumpstart your vehicle. If you need a new one, we can sell you one and install it for you on the spot.',
        'font-awesome' => 'fa-tachometer',
        'display-name' => 'Fuel Delivery & Refill'
    ],
    'locksmith-service' => [
        'anchor-name' => 'locksmith-service',
        'catchy-desc-dark' => 'Lockout recovery.',
        'catchy-desc-light' => 'See for yourself.',
        'details' => '',
        'font-awesome' => 'fa-unlock-alt',
        'display-name' => 'Locksmith Service & Car Unlocking'
    ],
    'roadside-service' => [
        'anchor-name' => 'roadside-service',
        'catchy-desc-dark' => '',
        'catchy-desc-light' => '',
        'details' => '',
        'font-awesome' => 'fa-road',
        'display-name' => 'Roadside Service'
    ],
    'tire-repair' => [
        'anchor-name' => 'tire-repair',
        'catchy-desc-dark' => '',
        'catchy-desc-light' => '',
        'details' => '',
        'font-awesome' => 'fa-wrench',
        'display-name' => 'Tire Repair & Replacement'
    ]
];

@endphp

@include('header', ['serviceList' => $serviceList])

@if(Request::is('/'))
    <section id="home-intro" class="intro pt-5 pb-5">
        <div class="container">
            <h2>You Call, We Haul</h2>
            <h1>@cjtowingllc</h1>
            <h2 class="mb-5">Best prices in the Triangle and surrounding areas</h2>
            <a class="btn btn-lg btn-cj" href="/contact#contact-us-form">Schedule an Appointment</a>
        </div>
    </section>
@endif

@section('content')
<section class="container second-content-row">
            <div class="row my-3">
                <div class="col">
                    <h2 class="text-center">Top Customer Service</h2>
                    <img src="{{ asset('images/single-star.jpg') }}" title="Top Customer Service" class="img-fluid" />
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
                    <img src="{{ asset('images/aaa_logo.png') }}" title="Have AAA?" class="img-fluid mb-2" />
                    <p class="lead mt-3 mb-5">
                        Call us directly for faster service and we
                        will be sure to charge AAA and not you! Call
                        or text us today!
                    </p>
                    <a class="btn btn-lg btn-block btn-outline-cj" href="tel:+19842440240">Call Us Now</a>
                </div>
                <div class="col">
                    <h2>Tow Truck Driver Wanted</h2>
                    <img src="{{ asset('images/tow-truck.jpg') }}" title="Tow Truck Driver Wanted" class="img-fluid mb-2" />
                    <p class="lead mt-3 mb-5">
                        Are you an experienced tow truck driver with
                        great customer service experience? Join our
                        team!
                    </p>
                    <a class="btn btn-lg btn-block btn-outline-cj" href="/employment" title="Apply Now">Apply
                        Now</a>
                </div> <!-- /.col -->
            </div><!-- /.row -->
        </section>

        <section class="container">
            <hr class="featurette-divider" />
            <h2 class="featurette-heading mb-4 text-center">On the side of the road? <span class="text-muted text-cj">We have
                    you covered.</span></h2>

            <div class="row">
            @foreach($serviceList as $service)
            <div class="col-md-4">
                    <div class="darna-icon-box style4">
                        <a href="/services#{{ $service['anchor-name'] }}" title="{{ $service['display-name'] }}">
                            <span class="ibox-icon">
                                <i class="fa-2x fa {{ $service['font-awesome'] }}"></i>
                            </span>
                            <p class="lead text-muted pt-3">{{ $service['display-name'] }}</p>
                        </a>
                    </div> <!-- /.darna-icon-box style4 -->
                </div> <!-- ./col-md-4 -->
            @endforeach
            </div> <!-- /.row -->
        </section>
@show

@include('footer')
