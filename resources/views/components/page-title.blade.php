
<div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
        <h1 class="h3">{{$pagename}}:</h1>
    </div>

    <div class="col-auto ml-auto text-right mt-n1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page"> {{ $pagename }} </li>
            </ol>
        </nav>
    </div>
</div>