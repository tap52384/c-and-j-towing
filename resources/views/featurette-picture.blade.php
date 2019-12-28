<div class="col-md-3">
    @empty($service['font-awesome'])
    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200"
        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
        aria-label="Placeholder: 200x200">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">200x200</text>
    </svg>
    @else
    <div class="darna-icon-box style4">
            <span class="ibox-icon">
                <i class="fa-2x fa {{ $service['font-awesome'] }}"></i>
            </span>
    </div> <!-- /.darna-icon-box style4 -->
    <a href="#{{ $service['anchor-name'] }}" id="{{ $service['anchor-name'] }}"
        title="{{ $service['display-name'] }}" class="mt-5"></a>
    @endempty
</div>
