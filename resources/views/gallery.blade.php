@extends('master')

@section('content')

@component('subheader')
@slot('subheaderTitle')
Gallery
@endslot
@slot('subheader_icon')
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none" stroke="currentColor" stroke-linecap="round"
    stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false">
    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
    <circle cx="12" cy="13" r="4"></circle>
</svg>
@endslot
@slot('subheader_intro')
Shots of satisfied customers and recovery specialists hard at work
@endslot
@endcomponent

<div class="container">
    <div class="row text-center text-lg-left">
        @foreach(File::allFiles(public_path('images/gallery')) as $file)
        <div class="col-lg-3 col-md-4 col-6">
            <div class="card mb-4 shadow"> {{-- card mb-4 shadow --}}
                <img src="{{ asset('images/gallery/' . $file->getRelativePathName()) }}"
                    alt="{{ asset('images/gallery/' . $file->getRelativePathName()) }}"
                    class="img-thumbnail img-fluid" />
            </div>
        </div> <!-- ./col-md-4 -->
        @endforeach
        {{-- <div class="col-md-4">
                    <div class="card mb-4 shadow">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225px"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                    </div> <!-- /.card.mb-4.shadow -->
                </div> <!-- ./col-md-4 --> --}}
    </div> <!-- /.row -->
</div><!-- /.container -->
@endsection
