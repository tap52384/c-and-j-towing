@extends('master')

@section('content')

@component('subheader')
    @slot('subheaderTitle')
        About Us
    @endslot
    @slot('subheader_icon')
        <i class="fa-2x fa fa-check-square-o"></i>
    @endslot
    @slot('subheader_intro')
        Committed to providing professional, dependable, and friendly service every time
    @endslot
@endcomponent

<div class="container">
<h3>Meet C &amp; J Towing Services</h3>
<p>
C &amp; J Towing Services is a leading towing company that has served the
Triangle and surrounding areas for the last three years. With our many years of
experience and happy customer testimonials, we've developed a team of professionals
that is committed to providing prompt, dependable, friendly service as quickly as possible.
</p>
<h3>Our Company</h3>
<p>C &amp; J Towing Services is dedicated to serving our customers' roadside
    assistance and towing needs-24 hours a day, every day. Rain or shine,
midnight on the side of the road, or mid-day stranded in the midst of rush hour traffic,
we are here to help!</p>
<h3>Proudly Serving the Triangle</h3>
<p>Here is a list of services that we are able to provide for you:</p>
<ul>
@foreach($serviceList as $service)
<li>
<a href="/services#{{ $service['anchor-name'] }}" title="{{ $service['display-name'] }}">
{{ $service['display-name'] }}
</a>
</li>
@endforeach
</ul>
</div> <!-- /.container -->
@endsection
