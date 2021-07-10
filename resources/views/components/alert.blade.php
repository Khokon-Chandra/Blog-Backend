
@if(session()->has('error'))
    <div class="alert alert-danger p-3"> {{ session()->get('error') }} </div>
@elseif(session()->has('success'))
    <div class="alert alert-success p-3"> {{ session()->get('success') }} </div>
@endif