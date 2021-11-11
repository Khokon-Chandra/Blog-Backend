<div class="main-menu navbar-collapse collapse">
    <nav>
        <ul>
            @empty($menus)
                <p class="text-center text-danger">Menu items not found</p>
            @else
                @foreach ($menus->menuItems as $item)
                    @if ($item->type !== 'custom')
                        @if ($item->type === 'category')
                        <li><a href="{{ route('frontend.posts.category',$item->slug) }}">{{ $item->name }}</a></li>
                        @else
                        <li><a href="{{ route('frontend.posts.index') }}">{{ $item->name }}</a></li>
                        @endif
                    @else
                        <li><a href="{{ url($item->slug) }}">{{ $item->name }}</a></li>
                    @endif
                @endforeach
            @endempty
        </ul>
    </nav>
</div>
