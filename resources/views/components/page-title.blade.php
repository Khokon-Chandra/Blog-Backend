
<div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
        <h3><strong>{{$pagename}}:</strong></h3>
    </div>

    <div class="col-auto ml-auto text-right mt-n1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page"> {{ $pagename }} </li>
            </ol>
        </nav>
    </div>
</div>