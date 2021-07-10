@props(['active','trigger','icon','id'])
{{ $active }}
<li class="sidebar-item {{ $active ?'active':'' }}">
    <a href="#{{$id}}" data-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
    <i class="align-middle" data-feather="{{ $icon }}"></i>
    <span class="align-middle">{{ $trigger }}</span>
    </a>
    <ul id="{{$id}}" class="sidebar-dropdown list-unstyled collapse {{ $active ? 'show':'' }}" data-parent="#sidebar">
        {{ $content }}
    </ul>
</li>
