<div class="main-menu navbar-collapse collapse">
    <nav>
        <ul>
            @foreach ($menus->menuItems as $item)
            @if ($item->type !== 'custom')
            <li><a href="{{ url($item->type.'/'.$item->slug) }}">{{ $item->name }}</a></li>
            @else
            <li><a href="{{ url($item->slug) }}">{{ $item->name }}</a></li>
            @endif
            @endforeach
        </ul>
    </nav>
</div>
