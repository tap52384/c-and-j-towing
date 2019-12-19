@extends('master')

@section('content')

@component('subheader')
    @slot('subheaderTitle')
        About Our Company
    @endslot
    @slot('subheader_icon')
        <i class="fa-2x fa fa-address-book"></i>
    @endslot
    @slot('subheader_intro')
        Have what it takes to join the team? Submit the form with your resume
        below.
    @endslot
@endcomponent

@endsection
