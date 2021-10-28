<div class="card mb-0">
    <div id="accordion">
        <a class="card-header border mb-0 d-block d-flex justify-content-between align-items-center collapsed"
            data-toggle="collapse" data-target="#{{$collapsId}}" aria-expanded="false" aria-controls="{{$collapsId}}">
            <span>{{ $collapsHeader }}</span>
            <span class="fa fa-angle-right"></span>
        </a>
        <div id="{{ $collapsId }}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            {{ $slot }}
        </div>
    </div>
</div>
