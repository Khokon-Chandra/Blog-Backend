@props(['title','subTitle'])
<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ $title }}</h5>
        <h6 class="card-subtitle text-muted"> {{ $subTitle }} </h6>
    </div>
    {{ $slot }}
</div> 