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

<div class="container">
    @foreach($serviceList as $service)
    <hr class="featurette-divider">
    <div class="row featurette">
    @if($loop->odd)
        @include(
            'featurette-text',
            [
                'darkText' => $service['catchy-desc-dark'],
                'lightText' => $service['catchy-desc-light'],
                'details' => $service['details']
            ]
        )
        @include(
            'featurette-picture',
            [

            ]
        )
    @else
        @include(
            'featurette-picture',
            [

            ]
        )
        @include(
            'featurette-text',
            [
                'darkText' => $service['catchy-desc-dark'],
                'lightText' => $service['catchy-desc-light'],
                'details' => $service['details']
            ]
        )
    @endif
    </div> <!-- /.row.featurette -->
    @endforeach

</div> <!-- /.container -->

@endsection
