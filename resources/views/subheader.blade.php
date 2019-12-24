<section class="intro pt-5">
    <h2>{{ $subheaderTitle ?? '' }}</h2>
    <h3>{{ $subheader_icon }}</h3>
</section>

@isset($subheader_intro)
<p class="lead text-muted text-center pt-5 pb-3">{{ $subheader_intro }}</p>
@endisset
