@extends('master')

@section('content')

@component('subheader')
    @slot('subheaderTitle')
    Services
    @endslot
    @slot('subheader_icon')
    <i class="fa-2x fa fa-list"></i>
    @endslot
    @slot('subheader_intro')
    A list of all the ways we can best serve your needs
    @endslot
@endcomponent

@component('servicelist')
@endcomponent

<div class="container">
    @foreach($serviceList as $service)

    @endforeach

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Flatbed towing. <span class="text-muted">24 hours a day, every day.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div> <!-- /.row.featurette -->
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Battery died? <span class="text-muted">A new one is a call away.</span></h2>
            <p class="lead">If you suspect your battery is having problems, we can test it within minutes and jumpstart
                your vehicle.
                If you need a new one, we can sell you one and install it for you on the spot.
            </p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div> <!-- /.row.featurette -->
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Tank empty? <span class="text-muted">We deliver both gas and diesel.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div> <!-- /.row.featurette -->
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Lockout recovery. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div> <!-- /.row.featurette -->
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                    mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div> <!-- /.row.featurette -->
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
        </div>
    </div> <!-- /.row.featurette -->
</div> <!-- /.container -->

@endsection
