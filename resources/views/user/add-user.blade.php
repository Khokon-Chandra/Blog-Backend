<x-app-layout>
    <div class="container-fluid p-0">
    <x-page-title pagename="Add new user" />

    <div class="card">
            <div class="card-header">
                <h5 class="card-title">Basic Table</h5>
                <h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</h6>
            </div>



           
            <form action="/demo" method="POST">
            @csrf
                <input type="text" name="name">
                <input type="submit" value="10">
            </form>





        </div>
    </div>
</x-app-layout>