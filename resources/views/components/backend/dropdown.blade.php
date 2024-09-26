@props(['active','trigger','icon','id'])
@php
    $arr = explode('.',$active);
    $currentUrl = explode('.',Route::currentRouteName());
    $isActive   = in_array($currentUrl[0],$arr);
@endphp
<li class="sidebar-item {{ $isActive ?'active':'' }}">
    <a href="#{{$id}}" data-toggle="collapse" class="sidebar-link collapsed" aria-expanded="true">
    <i class="align-middle" data-feather="{{ $icon }}"></i>
    <span class="align-middle">{{ $trigger }}</span>
    </a>
    <ul id="{{$id}}" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
        {{ $content }}
    </ul>
</li>
